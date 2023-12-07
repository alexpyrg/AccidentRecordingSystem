@extends('layout')

@section('content')
</head>
<body>
<h1>All accidents recorded!</h1>

@foreach ($listings as $listing)
<div class="listing">
    <a href="/record/{{$listing['id']}}"><h2>{{$listing['title']}} /{{$listing['id']}} </h2></a>
    <p> {{$listing['description']}}</p>
    Tags: <a href="#">{{$listing['tags']}}</a><br>
</div>
@endforeach

@endsection
