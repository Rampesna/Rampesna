@extends('Admin.main')

@section('custom-header')
@endsection

@section('page-title')
    Kontrol Paneli
@endsection
{{-----------------------------------------------}}
@section('main')

    <section class="no-padding-top no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <a href="#" style="text-decoration: none;" class="col-md-6 col-sm-12 mb-3">
                    <div class="statistic-block block" style="height: 150px;border-radius: 5px;">
                        <div class="text-center">
                            <i class="dashtext-2 fa fa-envelope fa-2x mt-2" style="float: left"></i>
                            <div class="number dashtext-2" style="float: right">10</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                 aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                        </div>
                        <div class="title text-center">
                            <strong></strong>
                            <strong class="mt-3">Bugün Gelen Mesajlar</strong>
                        </div>
                    </div>
                </a>
                <a href="#" style="text-decoration: none;" class="col-md-6 col-sm-12 mb-3">
                    <div class="statistic-block block" style="height: 150px;border-radius: 5px;">
                        <div class="text-center">
                            <i class="dashtext-1 fa fa-envelope fa-2x mt-2" style="float: left"></i>
                            <div class="number dashtext-1" style="float: right">6</div>
                        </div>
                        <div class="progress progress-template">
                            <div role="progressbar" style="width: 100%" aria-valuenow="30" aria-valuemin="0"
                                 aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                        </div>
                        <div class="title text-center">
                            <strong></strong>
                            <strong class="mt-3">Bugün Yapılan Yorumlar</strong>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

@endsection
{{-----------------------------------------------}}
@section('custom-footer')
@endsection
