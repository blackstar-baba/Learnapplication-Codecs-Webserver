{!!Html::script('js/jquery-3.1.0.min.js') !!}
{!!Html::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') !!}
{!!Html::style('css/bootstrap.min.css')!!}
{!!Html::style('css/frontend.css')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/jquery.ui.widget.js')!!}
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Learning Applikation</title>

    <style>
        body {
            margin-top: 5%;
        }
    </style>
</head>
<body>
<div class='container-fluid'>
      @section('nav')
    @show

    <div class='row'>
        @yield('content')
    </div>
</div>
</body>
</html>