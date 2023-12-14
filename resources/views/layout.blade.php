<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link rel="icon" type="image/x-icon" href="{{ asset('/img/ico.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<!-- <body> -->

<body class="bg-white">

    @include('sections.header')

    @yield('content')

    @include('sections.footer')

    </div>
    
    <script src="./node_modules/preline/dist/preline.js"></script>
    
</body>

</html>