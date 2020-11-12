<div class="border rounded-lg border-yellow-400 px-8 py-4 mb-8">
    <form action="{{url('home')}}" method="POST">
        @csrf
        <!-- <input type="text" name="body" placeholder="what do you think?" class="w-full py-5 mb-4 text-black" required>
        </input> -->
        <input type="text" name="body" placeholder="what do you think?" id="" class="w-full py-3 mb-4 text-black" required>
        <hr>
        <div class="flex justify-between py-2">
            <div class="flex text-small mb-2">
                <img class="rounded-full mr-2" src={{ auth()->User()->getAvatarAttribute() }} alt="">
            </div>
            <button type="submit" class="bg-yellow-500 rounded-lg shadow text-white py-2 px-2">POST</button>
        </div>
        @if(session('success'))
        <div class="card" style="height: 50px!important;">
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        </div>
        @endif
            
                @error('body')
                
                <div class="card" style="height: 50px!important;">
            <div class="alert alert-danger">
                <p class="help text-danger">{{$errors->first('body')}}</p>
            </div>
        </div>
                @enderror
    </form>
</div>