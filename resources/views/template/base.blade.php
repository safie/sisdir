
<!DOCTYPE html> 
<html class="has-navbar-fixed-top">
    <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>   
    <script src="{{ asset('js/app.js') }}" type="text/js"></script>
    <script>
        $( function() {
          $( document ).tooltip();
        } );
        </script>
        
    </head>
    <body>
    @include('template.navbar')
    
        <div class="container">
            <div class="columns">
                    <div class="column is-2 has-background-white">
                        @include('template.menulist')
                    </div>
                    <div class="column is-10 has-background-light">
                        @yield('content')
                    </div>
            
            </div>
        </div>
    
    


</body>
</html
   

