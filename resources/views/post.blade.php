<x-layout>
    <x-slot:title> {{ $title }}</x-slot:title>
    {{-- <h3 class="text-xl">Halaman List</h3> --}}



    <article class="py-8 mx-w-screen-md border-b border-gray-500">
        <h2 class="mb-1 text-3xl tracking light font-bold text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="#"> {{ $post['author'] }} </a>
        </div>
        <p class="my-4 font-light">{{($post['body'])}}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">Back &laquo;; </a>

    </article>

</x-layout>
