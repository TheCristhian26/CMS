<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @if (Route::has('login'))
            @auth
            @include('layouts.test')
            @else
            @if (Route::has('register'))
            @include('layouts.welcome')
            @endif
            @endauth
        @endif
    </div>   
    
</body>

</html>