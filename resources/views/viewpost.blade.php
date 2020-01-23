@extends ('welcome')

@section('content')
<article>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="card">
                <img class="card-img-top" src="{{asset('frontend/img/'.$post->image) }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $post->title}}</h4>
                    <p class="card_text">{{ $post->description }}</p>
                </div>
                <div class="card-footer bg-secondary">
                    <div class="col-lg-4"><b>Author Name:</b>  {{ $row->author}}</div>
                        
                    <div class=" col-lg-5 mr-auto">
                        <b>Created At:</b>  {{ $row->created_at}}
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</article>
@endsection
