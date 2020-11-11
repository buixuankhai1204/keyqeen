<h1>FLOWs</h1>
<ul>
    @foreach(auth()->User()->follows as $User)
    <li>
        <div class="flex text-small mb-2">
            <img class="rounded-full mr-2" src={{$User->getAvatarAttribute()}} alt="">
            <p>{{$User->name}}</p>
        </div>
    </li>
    @endforeach
</ul>