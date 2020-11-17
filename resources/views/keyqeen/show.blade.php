@extends('layouts.app')
@section('content')

<style>
    input:focus {
        border: 1px solid #e3a008;
        border-radius: 10px;
        outline: -webkit-focus-ring-color auto 0px;
    }

    .banner {
        width: 100%;
        height: 400px;
        overflow: hidden;
    }
</style>
<div class="lg:flex">
    <div class="lg:w-1/6">
        @include('_sidebar_links')
    </div>
    <div class="flex-1 lg:mx-10" style="max-width:700px">
        <header class="mb-6 relative">
            <div class="relative">
                <div class="img">
                    <img src="{{url('public/images',$user->avatar_user)}}" alt="" style="height: 320px;" class="mb-2 w-100 rounded">
                </div>

                <img src="{{url('public/images',$user->avatar_user)}}" alt="" class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left: 50%" width="150">
            </div>

            <div class="flex justify-between items-center mb-6">
                <div style="max-width: 270px">
                    <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>

                <div class="flex">
                @if(auth()->user()->is($user))
                    {{-- @can ('edit', $user) --}}
                    <form method="POST" action="/keyqeen/profile/{{$user->name}}/edit">
                        <a   href="{{$user->path('edit')}}" class="btn btn-outline-dark rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                            Edit Profile</a>
                    </form>
                    {{-- @endcan --}}
                    @endif
                    @if(auth()->user()->isNot($user))
                    <form method="POST" action="/keyqeen/profile/{{$user->name}}/follow">
                        @csrf
                        <button type="submit" href="" class="btn btn-outline-dark rounded-full border shadow py-2 px-4 text-black text-xs mr-2">
                            {{auth()->user()->following($user)?'Unfollow Me':'Follow Me'}}</button>
                    </form>
                    @endif
                </div>
            </div>


            <p class="text-sm">
                The name’s Bugs. Bugs Bunny. Don’t wear it out. Bugs is an anthropomorphic gray
                and white rabbit or hare who is famous for his flippant, insouciant personality.
                He is also characterized by a Brooklyn accent, his portrayal as a trickster,
                and his catch phrase "Eh...What's up, doc?"
            </p>


        </header>
        @include('_timeline',[
        'keyqeen'=>$user->timeline(),
        ])
    </div>
    <div class="lg:w-1/6 bg-black rounded-lg p-4 min-height ml-3 text-light">@include('friends')
    </div>
</div>
@endsection