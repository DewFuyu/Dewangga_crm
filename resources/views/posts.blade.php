<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">Halaman List</h3> --}}

    @foreach ($posts as $post )

    <article class="py-8 mx-w-screen-md border-b border-gray-500">
    <a href="/posts/{{ $post['id'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking light font-bold text-gray-900">{{ $post['title'] }}</h2>
    </a>
        <div class="text-base text-gray-500">
            <a href="#"> {{ $post['author'] }} </a>
        </div>
        <p class="my-4 font-light">{{Str::limit($post['body'], 8)}}
        </p>
        <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">Open more &raquo; </a>

    </article>

    @endforeach
</x-layout>
