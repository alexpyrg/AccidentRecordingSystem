@extends('layout')

@section('content')
@auth
</head>
<body>
{{-- <h1>Individual accident <a href="{{url()->previous()}}">back</a></h1> --}}

<span class="indi-title">{{$accident['accidentCase']}}</span> <span class="indi-id">{{$accident['id']}} </span>
<h3 class="indi-company">{{$accident['company']}}</h3>
<h3 class="indi-email" action="mailto:{{$accident['email']}}">{{$accident['email']}}</h3>
<a href="{{$accident['website']}}"class="website">{{$accident['website']}}</a>
<h3 class="location">{{$accident['location']}}</h3>
<p class="indi-description">{{$accident['description']}}</p>

<p class="indi-tags">

    <span class="tag">{{$accident['tags']}}
    </span>

</p>
@endauth
@endsection
