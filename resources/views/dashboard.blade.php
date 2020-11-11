@extends('layouts.app')
@section('content')
<style>
    input:focus {
        border: 1px solid #e3a008;
        border-radius: 10px;
        outline: -webkit-focus-ring-color auto 0px;
    }
</style>
<div class="lg:flex">
    <div class="lg:w-1/6">
        @include('_sidebar_links')
    </div>
    <div class="flex-1 lg:mx-10" style="max-width:700px">
        @include('publish')

        <div class="border border-grey-400 rounded-lg">
            @foreach($keyqeen as $item)
            @include('_keyqeen')
            @endforeach
        </div>
    </div>
    <div class="lg:w-1/6">@include('friends')</div>
</div>
@endsection