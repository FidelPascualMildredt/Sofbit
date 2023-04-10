<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador</title>
    @include('layouts.parts.dashboard.style')
</head>

<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.parts.dashboard.sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('layouts.parts.dashboard.header')

        <div class="container-fluid py-4">

            @yield('container')

          @include('layouts.parts.dashboard.footer')
        </div>
      </main>

      @include('layouts.parts.dashboard.settings')


    @include('layouts.parts.dashboard.script')
</body>
</html>
