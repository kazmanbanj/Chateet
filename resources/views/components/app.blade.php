<x-master>
    <section class="px-8" style="margin-top:30px">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                @if (auth()->check())
                <!-- Left side bar -->
                <div>
                    <div class="lg:w-32 sticky top-0">
                        <header class="container mx-auto py-3">
                            <!-- <h1>
                                <a href="{{ route('home') }}" class="flex">
                                    <img src="/images/test.ico" alt="Chattar">
                                    Chattar</a>
                            </h1><br> -->
                            @include ('sidebar_links')
                        </header>
                    </div>
                </div>
                @endif

                <!-- Center/Main content -->
                <div class="lg:flex-1 lg:mx-10" style="max-width:700px">
                    {{ $slot }}
                </div>

                @if (auth()->check())
                <!-- Right sidebar -->
                <div class="lg:w-1/6 pt-2">

                    <div class="sticky top-0">
                        @include ('friends_list')
                    </div>
                </div>
                @endif
            </div>
        </main>
    </section>
</x-master>