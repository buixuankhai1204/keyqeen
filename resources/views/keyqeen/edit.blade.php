@extends('layouts.app')
@section('content')

<style>
    input:focus {
        border: 1px solid #e3a008;
        border-radius: 10px;
        outline: -webkit-focus-ring-color auto 0px;
    }

    input {
        padding: 10px;
        color: white !important;

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

        <form action="{{$user->path()}}" method="post" class="container mx-auto" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div>
                <label for="name" class="block text-sm font-bold mb-1 mx-4  ">NAME</label>
                <input type="text" name="name" id="name" value="{{$user->name}}" class="shadow appearance-none border rounded mx-4  text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full py-1" required>
            </div>



            <div>
                <label for="Email" class="block text-sm font-bold mb-1 mx-4 mt-5 ">EMAIL</label>
                <input type="email" name="email" value="{{$user->email}}" id="email" class="shadow appearance-none border rounded mx-4  text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full py-1" required>
            </div>
            <div>
                <label for="avatar" class="block text-sm font-bold mb-1 mx-4 mt-5 ">AVATAR</label>
                <input type="file" name="avatar" id="avatar" class="shadow appearance-none border rounded mx-4  text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full py-1" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-bold mb-1 mx-4 mt-5 ">PASSWORD</label>
                <input type="password" name="password" class="shadow appearance-none border rounded mx-4  text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full py-1">
                <label for="password_confirmation" class="block text-sm font-bold mb-1 mx-4 mt-5 ">PASSWORD CONFIRMATION</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="shadow appearance-none border rounded mx-4  text-gray-700 leading-tight focus:outline-none focus:shadow-outline w-full py-1">
            </div>

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <button type="submit" class="bg-blue-500 rounded-lg mx-4 mt-2 px-4 py-1 text-white">EDIT</button>
        </form>
    </div>
    <div class="lg:w-1/6">@include('friends')</div>
</div>
@endsection