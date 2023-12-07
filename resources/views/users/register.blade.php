@extends('layout')

@section('content')

@auth
    @php
        redirect('/');
    @endphp
@endauth
   <h3> Register </h3>

    <form class="usercontrol" method="POST" action="/users">
        @csrf
        <label for="first_name">Όνομα:</label>
        <input type="text" name="first_name" placeholder="Όνομα" id="first_name" value="{{old('first_name')}}">
        @error('first_name')
        <span><p>{{$message}}</p></span>
        @enderror
        <label for="last_name">Επώνυμο:</label>
        <input type="text"name="last_name" placeholder="Επώνυμο" id="last_name" value="{{old('last_name')}}">
        @error('last_name')
        <span><p>{{$message}}</p></span>
        @enderror
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="E-mail" id="email" value="{{old('email')}}">
        @error('email')
        <span><p>{{$message}}</p></span>
        @enderror
        <label for="first_name">Κωδικός:</label>
        <input type="password" name="password" id="password" placeholder="Κωδικός πρόσβασης" value="{{old('password')}}">
        @error('password')
        <span><p>{{$message}}</p></span>
        @enderror
        <label for="first_name">Επιβεβαίωση Κωδικού:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Επιβεβαίωση κωδικού πρόσβασης" value="{{old('password_confirmation')}}">



        <input type="submit" value="ΕΓΓΡΑΦΗ">

    </form>
@endsection
