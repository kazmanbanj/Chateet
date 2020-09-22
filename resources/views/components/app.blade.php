<x-master>
<section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if (auth()->check())
                    <!-- Left side bar -->
                    <div class="lg:w-32">
                        @include ('sidebar_links')
                    </div>
                @endif

                <!-- Center/Main content -->
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                    {{ $slot }}
                </div>

                @if (auth()->check())
                    <!-- Right sidebar -->
                    <div class="lg:w-1/6 ">
                        @include ('friends_list')
                    </div>
                @endif
            </div>
        </main>
    </section>
</x-master>