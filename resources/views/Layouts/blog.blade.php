<section class="blog">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                @if(count($getBlogPosts) == 0)
                    <div class="title text-center">
                        <h2>BLOG</h2>
                    </div>
                    <div class="text-center">
                        Yayınlanacak Gönderi Bulunamadı
                    </div>
                @else
                    @php($counter = 0)
                    @foreach($getBlogPosts as $post)
                        @if($counter%2 == 0)
                            <div class="blog-list-section blog-content-right row">
                                <div class="col-md-9 blog-content-area">
                                    <div style="width: 550px;height: 450px;" class="blog-img">
                                        <img style="width: 550px;height: 450px;" class="img-responsive" src="{{asset("$post->list_image")}}" alt="">
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
                            @php($counter = $counter + 1)
                        @else
                            <div class="blog-list-section blog-content-left row">
                                <div class="col-md-9 blog-content-area">
                                    <!-- Blog slider -->
                                    <div style="width: 550px;height: 450px;" class="blog-img">
                                        <img style="width: 550px;height: 450px;" class="img-responsive" src="{{asset("$post->list_image")}}" alt="">
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
                            @php($counter = $counter + 1)
                        @endif
                    @endforeach
                @endif

                @if($page != 1)
                    <a href="{{route('blog.page',1)}}" class="btn btn-default btn-main" type="submit"><<</a>
                    <a href="{{route('blog.page',$page - 1)}}" class="btn btn-default btn-main" type="submit"><</a>
                @endif
                    <a class="btn btn-default btn-main" type="submit" disabled>{{$page}}</a>
                    @if(ceil(($allPostsCount / 10)) > $page)
                        <a href="{{route('blog.page',$page + 1)}}" class="btn btn-default btn-main" type="submit">{{$page + 1}}</a>
                    @endif
                    @if(ceil(($allPostsCount / 10)) > $page + 1)
                        <a href="{{route('blog.page',$page + 2)}}" class="btn btn-default btn-main" type="submit">{{$page + 2}}</a>
                    @endif
                    @if(ceil(($allPostsCount / 10)) > $page + 2)
                        <a href="{{route('blog.page',$page + 3)}}" class="btn btn-default btn-main" type="submit">{{$page + 3}}</a>
                    @endif
                    @if(ceil(($allPostsCount / 10)) > $page)
                        <a href="{{route('blog.page',$page + 1)}}" class="btn btn-default btn-main" type="submit">></a>
                    @endif
                    @if(ceil(($allPostsCount / 10)) != $page)
                        <a href="{{route('blog.page',ceil(($allPostsCount / 2)))}}" class="btn btn-default btn-main" type="submit">>></a>
                    @endif


            </div>
            <div class="col-md-3">
                <div class="blog-sidbar">
                    @include('Layouts.search')
                    @if(count($allCategories) != 0)
                        <div class="categories widgets">
                            <div class="list-group text-center">
                                <div class="list-group-item active">Kategoriler</div>
                                @foreach($allCategories as $category)
                                    <a href="#" class="list-group-item">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
