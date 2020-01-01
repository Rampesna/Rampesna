@extends('Layouts.main')
@section('title')
    <title>Talha Can | Yazılım Mühendisi & Grafiker</title>
@endsection
@section('description')
    <meta name="description" content="Talha Can, Yazılım Mühendisi ve Grafiker">
@endsection
@section('keywords')
    <meta name="keywords" content="yazılım,yazılım mühendisi,web geliştirici,web tasarım,web yazılım,laravel,sql,mysql,php,framework,grafiker, grafik tasarım,photoshop,illustrator">
@endsection
@section('custom-header')
@endsection
@section('main')
    @include('Layouts.loading')
    @include('Layouts.navbar')
    @include('Layouts.slider')
    @include('Layouts.about')
    @include('Layouts.client-comments')
    @include('Layouts.partners')
    @include('Layouts.team')
    @include('Layouts.contact')
    @include('Layouts.footer')
@endsection
