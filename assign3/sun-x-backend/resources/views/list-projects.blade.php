<!DOCTYPE html>
<html>
<head>
    <title>List Projects</title>
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
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
    </tr>
</thead>

    @foreach($projects as $project)
    <tr>    
      <td>{{$project->title}}</td>
      <td>{{$project->description}}</td>
      <td>{{$project->date}}</td>
      <td>
      <form action ="{{ route('delete-project', ['id'=>$project->id]) }}" method="post">
        <input class="btn btn-danger" type="submit" value="Delete" />
          @method('delete')
          @csrf
      </form>
      </td>
      <td>
      <a type="button" class="btn btn-primary" href="{{ route('update-project', ['id'=>$project->id]) }}">Update Project</a>
    </td>
    </tr>
@endforeach
</table>  
</div>
<a type="button" class="btn btn-primary" href="{{ route('add-project') }}">Add Project</a>
<a type="button" class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
<a type="button" class="btn btn-primary" href="{{ route('list-researchers') }}">List researchers</a>
</body>
</html>
