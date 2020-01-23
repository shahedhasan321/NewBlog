@extends ('welcome')

@section('content')
<div class="container-fluid">
<h2>All Post</h2><hr>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach($post as $row)
    <tr>
      <th scope="row">{{ $row->id }}</th>
      <td>{{ $row->title }}</td>
      <td><img src="{{asset('frontend/img/'.$row->image) }}" height='40px' width='50px'></td>
      <td>{{ $row->category }}</td>
      <td>{{ substr($row->description,0,70) }}</td>
      <td><a href="{{URL::to('view_post/'.$row->id) }}" class="btn btn-sm btn-secondary">View</a>
          <a href="{{URL::to('edit_post/'.$row->id) }}" class="btn btn-sm btn-outline-info">Edit</a>
          <a href="{{URL::to('delete_post/'.$row->id) }}" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection