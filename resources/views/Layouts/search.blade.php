<div class="search widgets">
    <form action="{{route('blog.search')}}" method="post" class="form-inline">
        {{csrf_field()}}
        <div class="form-group search-input">
            <input required name="keyword" type="text" class="form-control" placeholder="Ara ...">
        </div>
        <button type="submit" class="btn btn-default tf-search-btn"><i class="tf-search"></i></button>
    </form>
</div>
