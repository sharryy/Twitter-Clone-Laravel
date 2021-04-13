<x-app>
    <header class="mb-6 relative">
        <a href="https://www.pexels.com">
            <img src="https://images.pexels.com/lib/api/pexels-white.png"/>
        </a>


        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="text font-bold">{{$user->name}}</h2>
                <p>Joined {{$user->created_at->diffForHumans()}}</p>
            </div>

            <div class="flex">
                @can('edit',$user)
                    <a href="{{ $user->path('edit') }}"
                       class="rounded-full shadow shadow py-2 px-2 text-black-100 text-xs">
                        Edit Profile
                    </a>
                @endcan
                <x-follow-button :user='$user'></x-follow-button>
            </div>

        </div>

        <p class="text-sm">Iam a Demon with dead feelings...
            but don't you judge...
            For once I was a angel...
            Who felt too much
            Hello Who Is There. Lorem Ipsum is a Dummy Text. Needed not to know
            bout this shit. Just a dummy text.
        </p>

        <img src="{{$user->avatar}}"
             class="rounded-full mr-2 absolute"
             style="width: 150px;
             left: calc(50% - 75px);
             top: 138px">

    </header>

    @include('_timeline',[
    'tweets'=>$user->tweets
    ])

</x-app>
