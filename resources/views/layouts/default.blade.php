<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>AdvancedTest</title>

  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @stack('css')
  @stack('address-search')

</head>

<body>
  <div class="contact">
    <h1 class="contact__title">@yield('title')</h1>
    @yield('contactform')
  </div>

  @yield('script')
</body>
</html>