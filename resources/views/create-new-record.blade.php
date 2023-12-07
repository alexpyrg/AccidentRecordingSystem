@extends('layout')

@section('content')
</head>
    {{-- @livewire('create-accident-form') --}}
    <div class="container">
        <a class="record-card" href="/create-new-accident"><p>Εγγραφή νέου ατυχήματος <i class="fa-solid fa-clipboard fa-xl"></i></p></a>
        <a class="record-card" href="/create-new-vehicle"><p>Εγγραφή νέου οχήματος <i class="fa-solid fa-car fa-xl"></i></p></a>
        <a class="record-card" href="/create-new-address"><p>Εγγραφή νέας οδού <i class="fa-solid fa-road fa-xl"></i></p></a>
    </div>
@endsection
