<div class="border border-grey-400 rounded-lg">
            @forelse ($keyqeen as $item)
            @include('_keyqeen')
            @empty
            <p class="m-3">không có bài viết nào</p>
            @endforelse
        </div>