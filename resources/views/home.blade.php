@extends ('welcome')

@section('content')


<article>
    <div class="container">
    <h2>Latest Post</h2><hr>
    @foreach($post as $row)
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
       
            <div class="card">
                <img class="card-img-top" src="{{asset('frontend/img/'.$row->image) }}" height='400px' width='300px'">
                <div class="card-body ">
                    <h4 class="card-title">{{ $row->title}}</h4>
                    <p class="card_text">{{ substr($row->description,0,200) }}</p>
                    <a class="btn btn-info" href="{{URL::to('view_post/'.$row->id) }}">Show Details</a>
                </div>
            </div>
        </div>
        </div><br><br>
        @endforeach
    </div>
</article>
@endsection
