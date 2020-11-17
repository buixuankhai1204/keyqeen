<h1 class="font-weight-bold mb-4">FOLLOWS</h1>
<ul>
    @foreach(auth()->User()->follows as $User)
    <li>
        <div class="flex text-small mb-4">
            <a href="{{$User->path()}}">
            <img class="rounded-full mr-4 w-13" src="{{url('public/images',$User->avatar_user)}}">
            </a>
            <a href="{{$User->path()}}" style="text-decoration:none" >
            <p>{{$User->name}}</p>
            </a>
        </div>
    </li>
    @endforeach
</ul>