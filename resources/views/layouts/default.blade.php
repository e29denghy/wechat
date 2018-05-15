<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/static/bootstrap/favicon.ico">
    <title>@yield('title', '中国') - 鹏聚文化</title>
    <!-- Bootstrap core CSS -->
    <link href="/static/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/static/index/css/command.css" />
    <!-- Custom styles for this template -->
    <link href="/static/index/css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <main role="main">
        @if("mobile"==$mobile_device)
          @include('layouts._header_bottom')
        @else
          @include('layouts._header')
        @endif
        @include('shared._messages')
        @yield('content')
        @if("pc"==$mobile_device)
          @include('layouts._footer')
        @endif
    </main>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="/static/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="/static/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/static/bootstrap/assets/js/vendor/holder.min.js"></script>
    </body>
</html>
