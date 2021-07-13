<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

</head>
<body >

    @if(isset($navbar))
    <x-navbar-login></x-navbar-login>
    @endif
    

    <div id = "app">

        
        <main>
            {{ $slot }}
        </main>

    </div>

    <x-footer></x-footer>
</body>
</html>