<html>
    <head>
        @include('app.pages.sections.links')
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @include('app.pages.sections.header')
        @yield('content')
        @include('app.pages.sections.script')
    </body>

</html>