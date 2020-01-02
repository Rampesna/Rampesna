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
    @include('Layouts.contact')
{{--    @include('Layouts.about')--}}
{{--    @include('Layouts.client-comments')--}}
{{--    @include('Layouts.partners')--}}
{{--    @include('Layouts.team')--}}
{{--    @include('Layouts.contact')--}}
    @include('Layouts.footer')
@endsection
