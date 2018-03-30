<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>
    <div class="container-fluid">
            <div class="jumbotron mt-3">
                <h1>Bottom Navbar example</h1>
                    <p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
                    <a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs &raquo;</a>
                </div>
                @if(Session::has('success'))
                    <div class="alert alert-primary" role="alert">
                        {{Session::get('success')}}
                    </div>
                @elseif(Session::has('info'))
                <div class="alert alert-dark" role="alert">
                        {{Session::get('info')}}
                </div>
                
                @endif
            <div class="row">
                


                <div class="col-md-6 col-md-offset-3">
                        <h1>Laravel Todo App</h1>
                    @yield('input')
                </div>
            </div>
        <div class="row">
            <div class="col-md-12">
                
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>