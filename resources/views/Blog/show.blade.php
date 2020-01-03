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

    <section class="blog-single">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-single-section-img">
                        <img src="{{asset("$post->header_image")}}" alt="Blog Single Img">
                    </div>
                    <!-- Single Blog Page Main Content
                    ================================== -->
                    <div class="blog-single-content">
                        <div class="blog-content-description">
                            <h3>
                                <a class="blog-content-title">
                                    {{$post->title}}
                                </a>
                            </h3>
                            <div class="meta">
                                <div class="date">
                                    <p>{{strftime("%m %B %Y"),strtotime($post->created_at)}}</p>
                                </div>
                                <div class="author">
                                    <p>Talha Can</p>
                                </div>
                            </div>
                            <p class="blog-description">
                                {{$post->content}}
                            </p>
                        </div>
                    </div><!-- End Single Blog Content -->
                    <!-- Single Blog Page Comments
                    ================================== -->
                    <div class="blog-single-comments">
                        <h4 class="comments-title">Yorumlar ({{count($postComments)}})</h4>
                        @foreach($postComments as $comment)
                            <div class="blog-comments">
                                <div class="media">
                                    <div class="media-left blog-left-img">
                                        <div class="blog-comments-img">

                                        </div>
                                    </div>
                                    <div class="media-body comments-body">
                                        <p class="blog-comments-text">“ {{$comment->message}} ”</p>
                                        <h4 class="media-heading comments-author">{{$comment->name}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Single Blog Page Form
                    ================================== -->
                    <div class="blog-single-form">
                        <form action="{{route('blog.set-comment')}}">
                            <input type="hidden" name="post_id" value="{{$post->id}}">
                            <div class="form-group col-md-6 padding-0">
                                <input required name="name_surname" type="text" class="form-control blog-form-input" placeholder="Ad Soyad">
                            </div>
                            <div class="form-group col-md-6 padding-0 padding-left-15">
                                <input required name="email" type="email" class="form-control blog-form-input" placeholder="E-posta Adresi">
                            </div>
                            <div class="form-group col-md-12 padding-0">
                                <textarea required name="comment" class="form-control blog-form-textarea" placeholder="Yorum"></textarea>
                            </div>
                            <div class="col-md-12 padding-0">
                                <div class="form-submit-btn text-center">
                                    <button class="btn btn-default btn-main btn-block" type="submit">YORUM YAP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- See All Post -->
                </div>
                <div class="col-md-3">
                    <!-- Blog Right Sections
                    =========================-->
                    <div class="blog-sidbar">
                        @include('Layouts.search')
                        <div class="categories widgets">
                            <div class="list-group text-center">
                                <div class="list-group-item active"> KATEGORİLER </div>
                                @foreach($categoryList as $category)
                                    <a href="{{route('blog.category.page',[$category->id,1])}}" class="list-group-item">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('Layouts.footer')
@endsection
