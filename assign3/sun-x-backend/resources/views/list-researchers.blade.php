<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
 <div>
 <table class="table">
 <thead>
    <tr>
      <th scope="col">Login Id</th>
      <th scope="col">Picture Path</th>
      <th scope="col">name</th>
      <th scope="col">password</th>
    </tr>
</thead>

    @foreach($researchers as $researcher)
    <tr>    
      <td>{{$researcher->login_id}}</td>
      <td>{{$researcher->picture_path}}</td>
      <td>{{$researcher->name}}</td>
      <td>{{$researcher->password}}</td>
    </tr>
@endforeach
</table>  
</div>
<a type="button" class="btn btn-primary" href="{{ route('add-researcher') }}">Add Researcher</a>
</body>
</html>
