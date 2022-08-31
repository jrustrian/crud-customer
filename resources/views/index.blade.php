<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href={{asset('css/app.css')}} >
</head>
<body>



<div id="app">
   @yield('content')
</div>

</body>

<script src="{{ asset('js/app.js') }}" async defer></script>
</html>

