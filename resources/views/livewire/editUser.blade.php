@extends('layout')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
function callbackThen(response) {
// read Promise object
response.json().then(function(data) {
    console.log(data);
    if(data.success && data.score > 0.5) {
        console.log('valid recpatcha');
    } else {
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('recpatcha error');
        });
    }
});
}

function callbackCatch(error){
console.error('Error:', error)
}
</script>

{!! htmlScriptTagJsApi([
'callback_then' => 'callbackThen',
'callback_catch' => 'callbackCatch',
]) !!}
</head>
<body>
   <h3> ΑΛΛΑΓΗ ΣΤΟΙΧΕΙΩΝ ΧΡΗΣΤΗ {{$user->first_name}} {{$user->last_name}}</h3>

    <form class="usercontrol" autocomplete="off" method="POST" action="/user/update/{{$user->id}}">
        @csrf
        @method('PUT')
        <label for="first_name">Όνομα:</label>
        <input type="text" name="first_name" placeholder="Όνομα" id="first_name" value="{{$user->first_name}}">
        @error('first_name')
        <span><p>{{$message}}</p></span>
        @enderror
        <label for="last_name">Επώνυμο:</label>
        <input type="text"name="last_name" placeholder="Επώνυμο" id="last_name" value="{{$user->last_name}}">
        @error('last_name')
        <span><p>{{$message}}</p></span>
        @enderror
        <label for="email">E-mail:</label>
        <input type="email" name="email" placeholder="E-mail" id="email" value="{{$user->email}}">
        @error('email')
        <span><p>{{$message}}</p></span>
        @enderror


        <input type="submit" value="ΑΛΛΑΓΗ">

    </form>

@endsection
