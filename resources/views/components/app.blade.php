<x-master>
    <section class="px-8">
        <main class="mx-auto">
            <div class="lg:flex lg:justify-between">
                @if(auth()->check())
                    <div class="w-1/6">
                        @include('_sidebar-links')
                    </div>
                @endif

                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>

                @if(auth()->check())
                    <div class="w-1/6 bg-blue-100 rounded-lg p-4">
                        @include('_friends-list')
                    </div>
                @endif

            </div>
        </main>
    </section>
</x-master>
