
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>

    </head>
    <body>
            @include('template.hero')
            @yield('content')
    </body>
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script>
    var btn = document.getElementById('mybtn');
    var modal = document.getElementById('mymodal');
    var btnclose = document.getElementById('btnclose');

    btn.onclick = function() {
    modal.style.display = "block";
    }

    btnclose.onclick = function(){
    modal.style.display = "none";
    }

    </script>
</html
