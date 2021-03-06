@extends('layouts.app')
@section('content')
<style>
    input:focus {
        border: 1px solid #e3a008;
        border-radius: 10px;
        outline: -webkit-focus-ring-color auto 0px;
    }

    .min-height {
        min-height: 150px!important;
    }
</style>
<div class="lg:flex">
    @if(auth()->check())
    <div class="lg:w-1/6">
        @include('_sidebar_links')
    </div>
    @endif
    <div class="flex-1 lg:mx-10" style="max-width:700px">
        @include('publish')

        <div class="border border-black-400 rounded-lg mb-4">
            @forelse($keyqeen as $item)
            @include('_keyqeen')
            @empty

            <p class=" py-3 px-2">không có bài viết nào</p>
            @endforelse
        </div>
    </div>
    @if(auth()->check())
    <div class="lg:w-1/6 bg-black rounded-lg p-4 min-height ml-3 text-light">@include('friends')
    </div>
    @endif
</div>
@endsection