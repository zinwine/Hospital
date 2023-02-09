<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    @include('project.partial.header_link')
</head>
<body>

@include('project.partial.header')

@include('project.partial.nav')

@yield('content')

@include('project.partial.footer')


</body>
</html>