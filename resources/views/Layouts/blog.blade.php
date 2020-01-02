<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                @if(count($allPosts) == 0)
                    <div class="title text-center">
                        <h2>BLOG</h2>
                    </div>
                    <div class="text-center">
                        Yayınlanacak Gönderi Bulunamadı
                    </div>
                @else
                    @php($counter = 0)
                    @foreach($allPosts as $post)
                        @if($counter%2 == 0)
                            <div class="blog-list-section blog-content-right row">
                                <div class="col-md-9 blog-content-area">
                                    <div class="blog-img">
                                        <img class="img-responsive" src="{{asset("$post->list_image")}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <a href="{{route('blog.show',\Illuminate\Support\Facades\Crypt::encrypt($post->id))}}">
                                            <h4 class="blog-title">
                                                {{strtoupper($post->title)}}
                                            </h4>
                                        </a>
                                        <div class="meta">
                                            <div class="date">
                                                <p>{{strftime("%m %B %Y"),strtotime($post->created_at)}}</p>
                                            </div>
                                            <div class="author">
                                                <p>Talha Can</p>
                                            </div>
                                        </div>
                                        <p class="blog-decisions">{{substr($post->content,0,163)}}...</p>
                                        <a href="{{route('blog.show',\Illuminate\Support\Facades\Crypt::encrypt($post->id))}}"
                                           class="btn btn-default btn-main" type="submit">DEVAMINI OKU</a>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="blog-list-section blog-content-left row">
                                <div class="col-md-9 blog-content-area">
                                    <!-- Blog slider -->
                                    <div class="blog-img">
                                        <img class="img-responsive" src="{{asset("$post->list_image")}}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <a href="{{route('blog.show',\Illuminate\Support\Facades\Crypt::encrypt($post->id))}}">
                                            <h4 class="blog-title">
                                                {{strtoupper($post->title)}}
                                            </h4>
                                        </a>
                                        <div class="meta">
                                            <div class="date">
                                                <p>{{strftime("%m %B %Y"),strtotime($post->created_at)}}</p>
                                            </div>
                                            <div class="author">
                                                <p>Talha Can</p>
                                            </div>
                                        </div>
                                        <p class="blog-decisions">{{substr($post->content,0,163)}}...</p>
                                        <a href="{{route('blog.show',\Illuminate\Support\Facades\Crypt::encrypt($post->id))}}"
                                           class="btn btn-default btn-main" type="submit">DEVAMINI OKU</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @php($counter =+ 1)
                    @endforeach
                @endif
                
            </div>
            <div class="col-md-3">
                <!-- Blog Right Sections
                =========================-->
                <div class="blog-sidbar">
                    <div class="search widgets">
                        <form class="form-inline">
                            <div class="form-group search-input">
                                <input type="text" class="form-control" placeholder="Ara ...">
                            </div>
                            <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="categories widgets">
                        <div class="list-group text-center">
                            <div class="list-group-item active">Kategoriler</div>
                            @if(count($allCategories) == 0)

                            @else
                                @foreach($allCategories as $category)
                                    <a href="#" class="list-group-item">{{$category->name}}</a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="related-post widgets">
                        <div class="list-group">
                            <div class="list-group-item active text-center">
                                Benzer Yazılar
                            </div>
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="media-left media-middle"><p class="post-count">1</p></div>
                                    <div class="media-body">
                                        <p>Typography is important fact for liusto odio dolore.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="media-left media-middle"><p class="post-count">2</p></div>
                                    <div class="media-body">
                                        <p>Typography is important fact for liusto odio dolore.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="media-left media-middle"><p class="post-count">3</p></div>
                                    <div class="media-body">
                                        <p>Typography is important fact for liusto odio dolore.</p>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="list-group-item">
                                <div class="media">
                                    <div class="media-left media-middle"><p class="post-count">4</p></div>
                                    <div class="media-body">
                                        <p>Typography is important fact for liusto odio dolore.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
