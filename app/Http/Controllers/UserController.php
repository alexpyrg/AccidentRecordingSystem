<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);
        //Hashing password with bcrypt
        $formFields['password'] = bcrypt($formFields['password']);

        //Create user in db
        $user = User::create($formFields);
        //Automatically log the use in
        auth()->login($user);

        return redirect('/dashboard');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
         ]);

         if(auth()->attempt($formFields)) {
             $request->session()->regenerate();

             return redirect('/')->with('message', 'Συνδεθήκατε με επιτυχία!');
         }else{
            return back()->withErrors(['email' => 'Λάθος Στοιχεία!'])->onlyInput('email ');
         }

    }

    public function loadUsers(Request $request){
        $user = auth()->user();
        $role = $user->role_id;
        if(auth()->user()->role_id >= 3){
            $users = DB::select('select first_name,last_name,email,role_id,id from users WHERE id <> ?', [auth()->user()->id]);
            return view('dashboard', ['users'=>$users, 'user'=>$user,'role'=>$role]);
        }
        else{
            return abort(404,'Could not find requested page!');
        }

    }


    //Logout
    public function logout(Request $request){
    auth()->logout();
    $request->session()->invalidate(); //Invalidate user and then remove their token

    $request->session()->regenerateToken(); //Make sure no one can take advantage of the old token.

    return redirect('/');
    }



    public function showStatistics(){

        return view('livewire.statistics');
    }

    // UPDATE USER

    public function fetchUser(User $user){

        return view('livewire.editUser',[
            'user'=>$user
        ]);

    }
    public function updateUser(Request $request,User $user){

        $formFields = $request->validate([
            'first_name' => ['required', 'min:3'],
            'last_name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'role' => 'required|numeric|min:0|max:3'
        ]);

        //Update user in db
        $user->update($formFields);


        return redirect('/dashboard')->with('message', 'ΕΠΙΤΥΧΗΣ ΑΛΛΑΓΗ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ!');
    }
    //DELETE USER with delete req

    public function deleteUser(User $user){
        $user->delete();
        return redirect('/')->with('message','ΕΠΙΤΥΧΗΣ ΔΙΑΓΡΑΦΗ ΤΟΥ ΧΡΗΣΤΗ!');
    }
    //
}
