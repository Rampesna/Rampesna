<div class="search widgets">
    <form action="{{route('blog.search')}}" method="get" class="form-inline">
        {{csrf_field()}}
        <div class="form-group search-input">
            <input required name="search_keyword" type="text" class="form-control" placeholder="Ara ...">
        </div>
        <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
    </form>
</div>
