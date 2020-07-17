<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ToDo List</title>
          
          <!-- Bootstrap CSS -->
          <link href="{{asset('fontawesome/css/fontawesome.css')}}" rel="stylesheet">
          <link href="{{asset('fontawesome/css/brands.css')}}" rel="stylesheet">
          <link href="{{asset('fontawesome/css/solid.css')}}" rel="stylesheet">
      
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
          <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
      
    </head>
    <body>
      <div class="container">
        <nav class="navbar navbar-default">
          <!-- ナビバーの内容 -->
          <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/')}}">
              ToDo List
            </a>
          </div>
        </nav>
      </div>
      
      @yield('content')
      
      <!-- JavaScripts -->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
      
    </body>
</html>
