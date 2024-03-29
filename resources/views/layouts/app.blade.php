<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>E-Parkir</title>
  @stack('prepend-style')
  @include('includes.style')
  @stack('addon-style')

</head>
<body >
    <div class="container-scroller">
        @include('includes.navbar')
        @include('includes.sidebar')
      <!-- Content -->
        @yield('content')
      <!-- end: Content -->
    </div>
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>
