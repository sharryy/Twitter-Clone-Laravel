<div class="border border-blue-400 rounded-lg p-8 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" placeholder="What's Up!"></textarea>
        <hr class="my-4">

        <footer class="flex justify-between">
            <img src="{{auth()->user()->getAvatarAttribute()}}" alt="" class="rounded-full mr-2"
                 width="50" height="50">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white">
                Tweet-a-Roo!
            </button>
        </footer>

    </form>

    @error('body')
    <p class="text-red-500 text-sm">{{$message}}</p>
    @enderror

</div>
