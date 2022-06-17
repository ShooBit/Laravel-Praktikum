<!DOCTYPE html>
<html>
<head>
    <title>Edit Researcher</title>
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
      <form name="add-researcher-form" id="add-researcher-form" method="post" action="{{url('store-researcher')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Login Id</label>
          @if(isset($researcher))
          <input type="text" id="loginId" name="loginId" class="form-control" required="" value="{{$researcher->login_id}}">
          @else
          <input type="text" id="loginId" name="loginId" class="form-control" required="">
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Image</label>
          @if(isset($researcher))
          <input type="file" id="image" name="image" class="form-control" required="" value="{{$researcher->image_path}}">
          @else
          <input type="file" id="image" name="image" class="form-control" required="">
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          @if(isset($researcher))
          <input type="text" id="name" name="name" class="form-control" required="" value="{{$researcher->name}}">
          @else
          <input type="text" id="name" name="name" class="form-control" required="">
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">password</label>
          @if(isset($researcher)) 
          <input type="password" id="password" name="password" class="form-control" required="" value="{{$researcher->password}}">
          @else
          <input type="password" id="password" name="password" class="form-control" required="">
          @endif
        </div>
        @if(isset($researcher))
        <input type="hidden" id="id" name="id" value="{{$researcher->id}}">
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
