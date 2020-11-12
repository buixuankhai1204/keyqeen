<h1 class="font-weight-bold mb-4">FOLLOWS</h1>
<ul>
    @foreach(auth()->User()->follows as $User)
    <li>
        <div class="flex text-small mb-4">
            <a href="{{route('profile',$User)}}">
            <img class="rounded-full mr-2" src={{$User->getAvatarAttribute()}} alt="">
            </a>
            <a href="{{route('profile',$User)}}" style="text-decoration:none" >
            <p>{{$User->name}}</p>
            </a>
        </div>
    </li>
    @endforeach
</ul>