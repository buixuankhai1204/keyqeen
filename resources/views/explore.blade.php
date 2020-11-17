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
    @if(auth()->check())
    <div class="lg:w-1/6">
        @include('_sidebar_links')
    </div>
    @endif
    <div class="flex-1 lg:mx-10" style="max-width:700px">
        <ul>
            @foreach($list_follow as $item)
            <li class="d-flex justify-content border-b font-weight-bold mt-4 pb-4">
                    <div class="user_avatar mr-8">
                        <img class="rounded-full mr-2 w-20" src="{{url('public/images',$item->avatar_user)}}" alt="">
                    </div>
                    <div class="username">
                        {{$item->name}}
                    </div>
            </li>
            @endforeach
        </ul>        
    </div>
    @if(auth()->check())
    <div class="lg:w-1/6 bg-black rounded-lg p-4 min-height ml-3 text-light">@include('friends')
    </div>
@endif
</div>
@endsection