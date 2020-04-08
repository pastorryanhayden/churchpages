<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
   <div>
    @include('_includes.navigation.navigation')
    @yield('content')
  
</div>
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"></script>
      <script>
  UPLOADCARE_PUBLIC_KEY = '757368ca8a68c3e71ade';
  UPLOADCARE_TABS = 'file camera';
  UPLOADCARE_IMAGE_SHRINK = '1600x1600';
  UPLOADCARE_IMAGES_ONLY = true;
</script>
@stack('scripts')
</body>
</html>
