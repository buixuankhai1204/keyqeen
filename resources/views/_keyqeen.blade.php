<style>
    .img-keyqeen {
        width: 50px;
        height: 50px;
    }
</style>
<div class="flex p-4 border-b gray-400">
    <div class="mr-2 flex-shrink-0">
        <img src={{ auth()->User()->getAvatarAttribute() }} alt="" class="rounded-full mr-2 img-keyqeen">
    </div>
    <div>
        <h5 class="font-bold mb-4">{{$item->User->name}}</h5>
        <p class="text-sm">{{$item->body}}
        </p>
    </div>
</div>