<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sutorimu</title>
    @include('include.admin.style')

</head>
<body>
    @include('include.admin.sidebar')
      @yield('content')
      
      @include('include.admin.script')
</body>
</html>
