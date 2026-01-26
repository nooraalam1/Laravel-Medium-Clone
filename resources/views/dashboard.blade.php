<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 flex justify-center">
            Dashboard of {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <!-- Tab -->

    <div class="flex justify-center mt-4">
        <ul class="flex flex-wrap text-sm font-medium text-center text-body">
            <li class="me-2">
                <a href="#" class="inline-block px-4 py-2.5 text-white bg-brand rounded-base active"
                    aria-current="page">All</a>
            </li>

            @foreach ($categories as $category)
                <li class="me-2">
                    <a href="#" class="inline-block px-4 py-2.5 text-white bg-brand rounded-base active"
                        aria-current="page">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- posts -->

    @forelse ($posts as $post)
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="border border-white text-white rounded-md mt-4">

                <div class="p-6 text-center">
                    <span
                        class="inline-flex items-center bg-brand-softer border border-brand-subtle text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-sm">
                        <svg class="w-3 h-3 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z" />
                        </svg>
                        Trending
                    </span>
                    <div class="flex gap-4 mt-4">
                        <div>
                            <a href="#">
                                <h5 class="text-2xl font-semibold">{{ $post->title }}</h5>
                            </a>
                            <h5>{{ Str::words($post->content, 10)}}</h5>
                        </div>
                        <div>
                            <a href="#">
                                <img class="rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg"
                                    alt="{{ $post->title }}" />
                            </a>
                        </div>
                    </div>
                    <a href="#"
                        class="hover:text-blue-700 inline-flex items-center text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">
                        Read more
                        <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 12H5m14 0-4 4m4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
    @empty
            <p>No posts found</p>
        @endforelse
    </div>
    {{ $posts->links() }}
</x-app-layout>