<style>
    .img-keyqeen {
        width: 50px;
        height: 50px;
    }
</style>
<div class="flex p-4 border-b gray-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile',$keyqeen->User->name)}}">
        <img src={{ $keyqeen->User->getAvatarAttribute() }} alt="" class="rounded-full mr-2 img-keyqeen">

        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4"><a  style="text-decoration:none" href="{{route('profile',$keyqeen->User->name)}}">{{$item->User->name}}</a></h5>
        <p class="text-sm">{{$keyqeen->body}}
        </p>
    </div>
</div>