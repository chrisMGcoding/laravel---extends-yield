<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Document</title>
</head>
<body>
    
    @include('partials/cards')

    <a href="/pages/contact">contact</a>
    <a href="/">home</a>

    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>

<!-- composer require laravel/ui
php artisan ui bootstrap
ensuite tu vas dans ton package.json
tu change la version de bootstrap en 5.0.2
ensuite tu fais un npm install @popperjs/core
puis un npm install
puis npm run dev
et encore un npm run dev -->