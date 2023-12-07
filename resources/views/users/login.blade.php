@extends('layout')

@section('content')

@auth
    @php
        redirect('/');
    @endphp
@endauth

<h3>Login</h3>

<form class="usercontrol" method="POST" action="/users/authenticate">
    @csrf
    <label for="email">E-mail:</label>
    <input type="email" name="email" placeholder="E-mail(π.χ johndoe123@example.com)" value="{{old('email')}}">
    @error('email')
    <span><p>{{$message}}</p></span>
    @enderror
    <label for="password">Κωδικός:</label>
    <input type="password" name="password" placeholder="Κωδικός πρόσβασης" value="{{old('password')}}">
    <a href="/register" class="small-text">Δεν διαθέτω λογαριασμό</a>
   <span> &nbsp;</span>
    <input type="submit" value="ΣΥΝΔΕΣΗ">
</form>
@endsection
