<!DOCTYPE html>
<html lang='en'>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Admin Area</title>
    <script type="application/javascript" src="../js/jquery-3.1.0.min.js"></script>
    {!!Html::style('css/bootstrap.min.css')!!}
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    {!!Html::style('css/backend.css')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    <style>
        body {
            margin-top: 5%;
        }
    </style>
</head>
<body>

    <div class="page-header">
        <h1>Admin Area
            <small>for Learning Applikation</small>
        </h1>
    </div>
    @section('nav')
    @show
    @if ($errors->hasBag('success'))
        @foreach ($errors->getBag('success')->messages() as $error)
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong> {!! $error[0] !!}
            </div>
        @endforeach
    @endif
    @if ($errors->hasBag('error'))
        @foreach ($errors->getBag('error')->messages() as $error)
            <div class="alert alert-error">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong> {!! $error[0] !!}
            </div>
        @endforeach
    @endif


    <div class='container'>
        @yield('content')
    </div>
    <script type="application/javascript">
        $(".alert:not(.permanent)").fadeTo(10000, 500).slideUp(500, function () {
            $(this).slideUp(500);
        });

    </script>
</body>
</html>