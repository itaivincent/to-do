<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="userid" content="">

    <title>to-do | to-do</title>
    @include('layouts.admin.meta')
    @include('layouts.admin.stylesheets')
    @yield('styles')
    @include('sweetalert::alert')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    @include('admin.partials.navbar')
    @include('sweetalert::alert')
    <div class="app-body">
        @include('admin.partials.sidebar')

        <main class="main">
        <!-- Breadcrumb-->
     
         @yield('content') 

        </main>
    </div>
  @include('admin.partials.footer')
  <div id="loader"></div>
@include('layouts.admin.scripts')
<script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
  ]) !!};
</script>

@yield('scripts')
</body>
</html>