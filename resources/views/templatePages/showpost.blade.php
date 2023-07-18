@extends('../template/main')

@section('bannerImage')
    <div class="tm-blog-img-container">
        
    </div>
@endsection
@section('main-section')
    <section class="tm-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9">
                    <div class="tm-blog-post">
                        <h3 class="tm-gold-text">{{$post->title}}</p>
                        <img src="{{$post->image}}" alt="Image" class="img-fluid tm-img-post">
                        <p>{{$post->description}}</p>
                    </div>  
                </div>
            </div>
        </div>
    </section>
@endsection