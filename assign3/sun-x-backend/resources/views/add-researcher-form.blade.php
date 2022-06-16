<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Add researcher
    </div>
    <div class="card-body">
      <form name="add-researcher-form" id="add-researcher-form" method="post" action="{{url('store-researcher')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Login Id</label>
          <input type="text" id="loginId" name="loginId" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">picture path</label>
          <input type="text" id="picture_path" name="picture_path" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="name" name="name" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">password</label>
          <input type="password" id="password" name="password" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
