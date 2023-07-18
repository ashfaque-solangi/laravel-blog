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
                        <h3 class="tm-gold-text">Pellentesque fermentum mauris</h3>
                        <p>Vivamus accumsan blandit ligula. Sed lobortis efficitur sapien</p>
                        <img src="{{asset('blog/img/tm-img-1010x336-1.jpg')}}" alt="Image" class="img-fluid tm-img-post">
                        
                        <p>You can help templatemo by telling your friends about our HTML CSS templates. Praesent velit ante, congue ac dignissim in, vehicula sit amet urna. Fusce in dapibus quam, eget finibus velit. Nullam erat odio, vulputate id est ut, consequat rutrum justo. Vivamus vel leo vel nunc tincidunt mattis. Sed neque diam, semper suscipit dictum a, sodales ac metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                            Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.
                            Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.
                            Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.
                            Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.
                            Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.
                            Morbi vel pharetra massa, non iaculis tortor. Nulla porttitor tincidunt felis et feugiat. Vivamus fermentum ligula justo, sit amet blandit nisl volutpat id. Fusce sagittis ultricies felis, non luctus mauris lacinia quis. Ut fringilla lacus ac tempor ullamcorper. Mauris iaculis placerat ex et mattis.
                        </p>
                    </div>
                    
                    <div class="row tm-margin-t-big">

                        @foreach ($posts as $post)
                        {{--  {{dd($post)}}  --}}
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

                                <div class="tm-content-box">
                                    <img src="{{$post->image}}" alt="Image" class="tm-margin-b-30 img-fluid">
                                    <h4 class="tm-margin-b-20 tm-gold-text">{{$post->title}} #{{$post->id}}</h4>
                                    <p class="tm-margin-b-20">{{Str::limit($post->description,100)}}<a href="post/{{$post->id}}" >read more</a></p>
                                    {{--  <a href="post/{{$post->id}}/edit" class="tm-btn text-uppercase bg-info">Edit</a>
                                    <a href="post/{{$post->id}}" class="tm-btn text-uppercase bg-danger">Delete</a>    
                                    <a href="post/{{$post->id}}" class="tm-btn text-uppercase">Detail</a>      --}}

                                    <a class="btn btn-success" href="{{ route('post.show',$post->id) }}">Show</a>
                                    <a class="btn bg-info" href="{{ route('post.edit',$post->id) }}">Edit</a>
                                    <br/>

                                    <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                          
                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                </div>  

                            </div>
                        @endforeach
                    </div>

                    <div  class="row tm-margin-t-big"><span>{{$posts->links()}}</span></div>
                </div>
                
                <aside class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-aside-r">

                    <div class="tm-aside-container">
                        <h3 class="tm-gold-text tm-title">
                            <a href="/post/create">Add New Post</a>
                        </h3>
                        <h3 class="tm-gold-text tm-title">
                            Categories
                        </h3>
                        <nav>
                            <ul class="nav">
                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                <li><a href="#" class="tm-text-link">Tincidunt non faucibus placerat</a></li>
                                <li><a href="#" class="tm-text-link">Vestibulum tempor ac lectus</a></li>
                                <li><a href="#" class="tm-text-link">Elementum egestas dui</a></li>
                                <li><a href="#" class="tm-text-link">Nam in augue consectetur</a></li>
                                <li><a href="#" class="tm-text-link">Fusce non turpis euismod</a></li>
                                <li><a href="#" class="tm-text-link">Text Link Color #006699</a></li>
                            </ul>
                        </nav>
                        <hr class="tm-margin-t-small">   
                        <h3 class="tm-gold-text tm-title tm-margin-t-small">
                            Useful Links
                        </h3>
                        <nav>   
                            <ul class="nav">
                                <li><a href="#" class="tm-text-link">Suspendisse sed dui nulla</a></li>
                                <li><a href="#" class="tm-text-link">Lorem ipsum dolor sit</a></li>
                                <li><a href="#" class="tm-text-link">Duiss nec purus et eros</a></li>
                                <li><a href="#" class="tm-text-link">Etiam pulvinar et ligula sed</a></li>
                                <li><a href="#" class="tm-text-link">Proin egestas eu felis et iaculis</a></li>
                            </ul>
                        </nav>   
                        <hr class="tm-margin-t-small"> 

                        <div class="tm-content-box tm-margin-t-small">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                            <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                        </div>
                        <hr class="tm-margin-t-small">
                        <div class="tm-content-box tm-margin-t-small">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                            <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                        </div>  
                        <hr class="tm-margin-t-small">
                        <div class="tm-content-box tm-margin-t-small">
                            <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #3</h4></a>
                            <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                        </div>      
                    </div>
                    
                    
                </aside>

            </div>
            
        </div>
    </section>
@endsection