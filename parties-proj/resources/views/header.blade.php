<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="/css/style.css">
    <title>
        @yield('title')
    </title>
</head>
<body>
   
    @yield('content')

</body>
</html>