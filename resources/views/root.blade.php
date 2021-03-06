<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="An example of a blog created with the Prismic Eloquent Laravel package.">

    <title>Prismic Eloquent Example Blog</title>

    <link rel="stylesheet" type="text/css" href="{{ mix('css/site.css') }}">
</head>
<body class="bg-grey-lightest leading-normal">
    @include('fork')

    @yield('content')

    <footer class="text-center py-8 text-grey-darker text-xs">
        Build with
        <a class="text-grey-darkest" href="https://github.com/robindrost/prismic-eloquent">Prismic Eloquent</a>,
        <a class="text-grey-darkest" href="https://laravel.com">Laravel</a> and
        <a class="text-grey-darkest" href="https://tailwindcss.com">Tailwind</a>
    </footer>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
