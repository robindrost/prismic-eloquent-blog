<!DOCTYPE html>
<html>
<head>
    <title>Prismic Eloquent Example</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/site.css') }}">
</head>
<body class="bg-grey-lightest leading-normal">
    @yield('content')
    <footer class="text-center py-8 text-grey-dark text-xs">
        Build with
        <a class="text-grey-darker" href="https://github.com/robindrost/prismic-eloquent">Prismic Eloquent</a>,
        <a class="text-grey-darker" href="https://laravel.com">Laravel</a> and
        <a class="text-grey-darker" href="https://tailwindcss.com">Tailwind</a>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
