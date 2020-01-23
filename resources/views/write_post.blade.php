@extends ('welcome')

@section('content')


<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <h1>Write Post</h1>
        <form action="{{route('add_post') }}" method="post">
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input type="text" class="form-control" placeholder="Post Title" name="title" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Author Name</label>
              <input type="text" class="form-control" placeholder="Author Name" name="author" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Description</label>
              <textarea rows="7" class="form-control" placeholder="Description" name="description"></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Category</label>
              <select class="form-control" name="category" id="category">
                <option value=" ">Post Category</option>
                <option value="biography">Biography</option>
                <option value="history">History</option>
                <option value="war">1971 war</option>
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
            <button type="submit" class="btn btn-outline-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection