<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-warning">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Login
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('login.perform') }}">
        @csrf
        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="loginid" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Loginid</label>
        </div>
        
        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        
    </form>
    </div>
  </div>
</div>  
</body>
</html>
