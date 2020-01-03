<div class="col-md-3">
    <div class="blog-sidbar">
        @include('Layouts.search')
        @if(count($allCategories) != 0)
            <div class="categories widgets">
                <div class="list-group text-center">
                    <div class="list-group-item active">Kategoriler</div>
                    @foreach($allCategories as $category)
                        <a href="{{route('blog.category.page',[$category->id,1])}}" class="list-group-item">{{$category->name}}</a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</div>
