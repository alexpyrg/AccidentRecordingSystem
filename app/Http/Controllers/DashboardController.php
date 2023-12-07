<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Datatable;
use App\Models\Accident;
use App\Models\accidentAlcohol;
use App\Models\accidentAnimal;
use App\Models\accidentSeverity;
use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Psy\Readline\Hoa\Console;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index(Request $request){
        $user = auth()->user();
        $role = $user->role_id;
        $Accidents = Accident::all();
        if($request->ajax()){
    if ($role >= 2) {
        $Accidents = Accident::with('accidentAlcohol','accidentAnimalCollision','accidentSeverity')->get();
            return Datatables::of($Accidents)->addIndexColumn()->addColumn('actions', function($row){
            $btns = '<a href="/accidents/view/'. $row->id .'" class="inline btn-view-sm"><i class="fa fa-fw fa-eye"></i> ΑΝΟΙΓΜΑ </a>
            <a href="/accidents/edit/'.$row->id .'" class="inline btn-edit-sm"><i class="fa fa-fw fa-edit"></i> ΕΠΕΞΕΡΓΑΣΙΑ </a>
            <a href="/accidents/delete/'. $row->id .'" class="inline btn-delete-sm"><i class="fa fa-fw fa-trash"></i> ΔΙΑΓΡΑΦΗ </a>';
            return $btns;
            })->rawColumns(['actions'])->addColumn('accidentSeverity', function(Accident $acc){
                return $acc->accidentSeverity->description;
            })->addColumn('accidentAnimalCollision', function(Accident $acc){
                return $acc->accidentAnimalCollision->description;
            })->addColumn('accidentAlcohol', function(Accident $acc){
                return $acc->accidentAlcohol->description;
            })->make(true);

        }else{
        $Accidents = Accident::with(['users','accidentAnimalCollision'])->where('user_id',$user->id)->get();
        return DataTables::of($Accidents)->addIndexColumn()->addColumn('actions', function($row){

            $btns = '<a href="/accidents/edit/'. $row->id . '" class="btn-edit-sm">Edit</a>';
            return $btns;
        })->rawColumns(['actions'])->make(true);
        }
        }

            return view('dashboard', ['user'=>$user, 'role'=>$role, 'Accidents'=>$Accidents]);

    }//index


    public function roadIndex(Request $request){
        $user = auth()->user();
        $role = $user->role_id;

        return view('dashboard', ['user'=>$user, 'role'=>$role]);
    }
    public function vehicleIndex(Request $request){
        $user = auth()->user();
        $role = $user->role_id;

        return view('dashboard', ['user'=>$user, 'role'=>$role,]);
    }



    public function loadUsers(){
        $userRole = auth()->user()->role;
        $users = DB::select('select first_name,last_name,email,role,id from users WHERE id <> ?', [auth()->user()->id]);
        if($userRole >=3){
           return view('livewire.manageUsers', ['users'=>$users]);
        }else{
           return abort(404);
        }
   }

}
