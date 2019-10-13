<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>website</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
  @include('inc.navbar')
  @yield('content')
  {{--コメント-> @includeはsidebarの親の@section~@showまでがある --}}
  @include('inc.sidebar')
</body>
</html>
