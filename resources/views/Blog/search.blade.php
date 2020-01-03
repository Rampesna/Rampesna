@extends('Layouts.main')
@section('title')
    <title>{{$generalSettings->title}}</title>
@endsection
@section('description')
    <meta name="description" content="{{$generalSettings->description}}">
@endsection
@section('keywords')
    <meta name="keywords" content="{{$generalSettings->keywords}}">
@endsection
@section('custom-header')
@endsection
@section('main')
    @include('Layouts.loading')
    @include('Layouts.navbar')
    @include('Layouts.slim-slider')

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
                            <a href="{{route('blog.search.page',[$keyword,1])}}" class="btn btn-default btn-main" type="submit"><<</a>
                            <a href="{{route('blog.search.page',[$keyword,$page - 1])}}" class="btn btn-default btn-main" type="submit"><</a>
                        @endif
                        <a class="btn btn-default btn-main" type="submit" disabled>{{$page}}</a>
                        @if(ceil(($allPostsCount / 5)) > $page)
                            <a href="{{route('blog.search.page',[$keyword,$page + 1])}}" class="btn btn-default btn-main" type="submit">{{$page + 1}}</a>
                        @endif
                        @if(ceil(($allPostsCount / 5)) > $page + 1)
                            <a href="{{route('blog.search.page',[$keyword,$page + 2])}}" class="btn btn-default btn-main" type="submit">{{$page + 2}}</a>
                        @endif
                        @if(ceil(($allPostsCount / 5)) > $page + 2)
                            <a href="{{route('blog.search.page',[$keyword,$page + 3])}}" class="btn btn-default btn-main" type="submit">{{$page + 3}}</a>
                        @endif
                        @if(ceil(($allPostsCount / 5)) > $page)
                            <a href="{{route('blog.search.page',[$keyword,$page + 1])}}" class="btn btn-default btn-main" type="submit">></a>
                        @endif


                </div>
                @include('Layouts.list-categories')
            </div>
        </div>
    </section>


    @include('Layouts.footer')
@endsection
