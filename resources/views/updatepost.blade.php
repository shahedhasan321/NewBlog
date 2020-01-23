@extends ('welcome')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <h1>Update Post</h1><hr>
        <form action="{{url('update_post'.$post_edit->id) }}" method="post">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input type="text" class="form-control" value="{{ $post_edit->title}}" name="title" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Author Name</label>
              <input type="text" class="form-control" value="{{ $post_edit->author}}" name="author" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Description</label>
              <textarea rows="7" class="form-control" value="{{ $post_edit->description }}" name="description">{{ $post_edit->description }}</textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category</label>
              <select class="form-control" name="category" >
                <option value=" ">Post Category</option>
                <option value="Biography">Biography</option>
                <option value="History">History</option>
                <option value="1971 war">1971 war</option>
              </select>
              <p class="help-block text-danger"></p>
            </div>
          </div>


          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Upload Image</label>
              <input type="file" class="form-control-file" name="image">
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-outline-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection