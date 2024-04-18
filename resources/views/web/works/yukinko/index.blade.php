@extends('web.layouts.app')
@section('page_class', 'l-post')
@section('title', 'worksのタイトル')
@section('description', 'worksの説明')
@section('content')
  @component('web.works.layout._frame')
    @slot('head')
    @endslot
    @slot('body')
    @endslot
    @slot('foot')
    @endslot
  @endcompoonent
@endsection