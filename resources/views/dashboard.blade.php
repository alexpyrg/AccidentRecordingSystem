@extends('layout')

@section('content')
@auth
@php
    $crn = Route::currentRouteName();
    //crn stands for Current Route Name
@endphp
</head>
<body>
<div class="userDashInfo">
<p><b>{{$user->first_name}} {{$user->last_name}}</b> |<span class="role">

            @php
                switch($role){
                case 0:
                    echo 'Registrar';
                    break;
                case 1:
                    echo 'Manager';
                    break;
                case 2:
                    echo 'Expert';
                    break;
                case 3:
                    echo 'Admin';
                    break;
                default:
                  echo  'Άγνωστος ρόλος ['. $role .'] / Α!';
                }
            @endphp
            </span>
        </p>
        <a href="{{ $crn=='dashboard' ? '#' : '/' }}" class="db-button">ΑΤΥΧΗΜΑΤΑ</a>@if (auth()->user()->role_id >= 3)<a href="{{ $crn=='users.manage' ? '#' : '/users/manage' }}" class="db-button">ΧΡΗΣΤΕΣ</a>@endif<a href="{{ $crn=='roads.manage' ? '#' : '/roads' }}" class="db-button">ΟΔΟΙ</a><a href="{{ $crn=='vehicles.manage' ? '#' : '/vehicles' }}" class="db-button">ΟΧΗΜΑΤΑ</a>
    </div>
<div class="table-wrapper">

@if($crn=='dashboard')
    @livewire('dash-accident-table')
@elseif ($crn=='users.manage')
    @livewire('dash-users-table')
@elseif ($crn=='roads.manage')
    @livewire('dash-road-table')
@elseif($crn=='vehicles.manage')
    @livewire('dash-vehicle-table')
@endif

</div>

</body>

        {{-- END AUTH EVERYTHING AUTH RELATED SHOULD BE ABOVE THIS COMMENT --}}
@else
@php
    redirect('/login');
@endphp
    <a href="/login"> ΣΥΝΔΕΣΗ </a> | <a href="/register"> ΕΓΓΡΑΦΗ </a>
@endauth

@endsection
