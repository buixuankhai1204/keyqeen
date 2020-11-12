<style>
    
    .img-keyqeen {
        width: 50px;
        height: 50px;
    }
</style>
<div class="flex p-4 border-b dark-400">
    <div class="mr-2 flex-shrink-0">
        <a href="{{route('profile',$item->user->name)}}">
        <img src={{ $item->User->getAvatarAttribute() }} alt="" class="rounded-full mr-2 img-keyqeen">

        </a>
    </div>
    <div>
        <h5 class="font-bold mb-2"><a  style="text-decoration:none" href="{{route('profile',$item->user->name)}}">{{$item->User->name}}</a></h5>
        <p class="text-sm">{{$item->body}}
        </p>
    </div>
</div>