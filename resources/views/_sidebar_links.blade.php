<ul>
    <li>
        <a href="{{route('home')}}" class="font-bold text-lg mb-4 block">
            Home
        </a>
    </li>
    <li>
        <a href="{{route('explore')}}" class="font-bold text-lg mb-4 block">
            Explore
        </a>
    </li>
        
    <li>
        <a href="{{route('profile',auth()->user()->name)}}" class="font-bold text-lg mb-4 block">
            Profile
        </a>
    </li>
    <li>
        <a href="{{route('login')}}" class="font-bold text-lg mb-4 block">
            logout
        </a>
    </li>
</ul>