@extends('web.layouts.app')
@section('page_class', 'l-home')
@section('description', 'descriptiondescriptiondescription')
@section('title', 'Mitsumeru Creative Studio')
@section('content')
{{-- FV --}}
@include('web.components.home._view')
{{-- service --}}
@include('web.components.home._service')
{{-- about --}}
@include('web.components.home._about')
{{-- flow --}}
@include('web.components.home._flow')
<div class="mt-16">
    <a href="{{ route('works') }}" class="c-btn">Works</a>
</div>
<div class="pWorks mt-16">
    <div class="pWorks__sticky">
        <div class="pWorks__scroll">
            <div class="pWorks__scroll--contents red">
                <h2 class="left">Hello</h2>
            </div>
            <div class="pWorks__scroll--contents yellow"></div>
            <div class="pWorks__scroll--contents green"></div>
            <div class="pWorks__scroll--contents blue">
                <h2 class="right">Goodbye</h2>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection