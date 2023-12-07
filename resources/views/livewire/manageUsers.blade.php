@extends('layout')

@section('content')
    @if(auth()->user->role == 3)

        <table id="userList" class="userList">
            <tr>
                <th>Όνομα</th>
                <th>Επώνυμο</th>
                <th>E-mail</th>
                <th>Δικαιώματα</th>
                <th>Ιδιότητες</th>
            </tr>


                @foreach ($users as $user)
                <tr>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>@php
                       $role = $user->role;
                if($role == 0){
                    echo('Registrar');
                }else
                 if($role == 1){
                    echo('Manager');
                }else
                if($role == 2){
                    echo('Expert');
                }else
                if($role == 3){
                    echo('Admin');
                }else{
                    echo('Unknown role id ['. $role .'] / Please contact an admin!');
                }
                    @endphp</td>
                <td><a href="/edituser/{{$user->id}}" class="editUser"><i class="fa-regular fa-pen-to-square"></i> Επεξεργασία</a>
                    <a href="/deleteuser/{{$user->id}}" class="deleteUser"><i class="fa-regular fa-trash-can"></i> Διαγραφή</a>
                    <a href="/banuser/{{$user->id}}" class="banUser"><i class="fa-solid fa-ban"></i> Αποκλεισμός</a>
                </td>
            </tr>
                    @endforeach

        </table>
        @else
        @php
            redirect('/');
        @endphp

    @endif
@endsection
