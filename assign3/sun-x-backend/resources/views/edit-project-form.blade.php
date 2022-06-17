<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
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
      Add project
    </div>
    <div class="card-body">
      <form name="add-project-form"  method="post" action="{{url('store-project')}}" enctype="multipart/form-data">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          @if(isset($project))
          <input type="text" name="title" class="form-control" required="" value="{{$project->title}}">
          @else
          <input type="text" name="title" class="form-control" required="">
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description of progress</label>
          @if(isset($project))
          <input type="text" name="description" class="form-control" required="" value="{{$project->description}}">
          @else
          <input type="text" name="description" class="form-control" required="">
          @endif
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Date</label>
          @if(isset($project)) 
          <input type="date" name="date" class="form-control" required="" value="{{$project->date}}">
          @else
          <input type="date" name="date" class="form-control" required="">
          @endif
        </div>
        @if(isset($project))
        <input type="hidden" id="id" name="id" value="{{$project->id}}">
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>  
</body>
</html>
