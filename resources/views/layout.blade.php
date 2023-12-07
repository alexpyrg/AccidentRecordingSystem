<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <title>Πληροφοριακό Σύστημα Καταγραφής και Ανάλησης Ατυχημάτων</title>
    <script src="//unpkg.com/alpinejs" defer></script>

    @if($route = Route::current()->getName() == "/login" || $route = Route::current()->getName() === "/register")

    @endif


    @livewireStyles

        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- <script type="text/javascript">
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
        </script> --}}

        {{-- {!! htmlScriptTagJsApi([
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch',
        ]) !!} --}}
        </head>
        <body>
    <div class="navbar">
        @auth
        <a class="@php if(Route::currentRouteName() === 'dashboard'){ echo 'active';}  @endphp" href="@php if(Route::currentRouteName() != 'dashboard'){ echo '/';}else{echo '#';} @endphp"><i class="fa-solid fa-table-columns"></i> ΑΡΧΙΚΗ</a>
        <a href="@php if(Route::currentRouteName() != 'newRecordSelection'){ echo '/record-selection';}else{echo '#';} @endphp" class="@php if(Route::currentRouteName() === 'newRecordSelection' || Route::currentRouteName() === 'newRecord'){ echo 'active';}@endphp"><i class="fa fa-fw fa-clipboard"></i> ΝΕΑ ΕΓΓΡΑΦΗ</a>
        <a href="@php if(Route::currentRouteName() != 'statistics'){ echo '/statistics';}else{echo '#';} @endphp" class="@php if(Route::currentRouteName() === 'statistics'){ echo 'active';}@endphp"><i class="fa fa-fw fa-chart-line"></i> ΣΤΑΤΙΣΤΙΚΑ</a>

       @else
        <a href="/login"><i class="fa fa-fw fa-user"></i> ΣΥΝΔΕΣΗ</a>
        <a href="/register"><i class="fa fa-fw fa-user"></i> ΕΓΓΡΑΦΗ</a>
        @endauth
        @auth
        <form class="logout" method="POST" action="/logout">
            @csrf
            <button type="submit"><i class="fa-solid fa-right-from-bracket"></i> ΑΠΟΣΥΝΔΕΣΗ</button></form>
        @endauth
    </div>
    <x-flash-message />

    <div class="container" id="container">

   @yield('content')


    </div>
    {{-- <h3>over-footer</h3> --}}


    @livewireScripts
    {{-- <livewire:scripts> --}}

    <script>
    window.onload = function(){
        var curr = new Date().getFullYear();

        selectY = document.getElementById('year');

        for (var i = curr; i>=curr-120; i--){
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
        selectY.appendChild(opt);
            // console.log('test');
        }

        for (var i = 0; i <=24; i++)
        {
            selectH = document.getElementById('hour');
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            selectH.appendChild(opt);
        }

        for (var i = 00; i <=59; i++)
        {
            selectMin = document.getElementById('minute');
            var opt = document.createElement('option');
            opt.value = i;
            opt.innerHTML = i;
            selectMin.appendChild(opt);
        }
}
    </script>
</body>
<footer class="footer" id="footer">
    <p>Πληροφοριακό Σύστημα Καταγραφής και Ανάλησης Ατυχημάτων</p>
</footer>
</html>
