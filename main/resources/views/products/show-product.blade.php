@extends('layout.layout')

@section('content')
    <!-- component -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
            <div class="max-h-96 md:h-screen">
                <img class="w-screen h-screen object-cover object-top" src="{{ $product->getImageURL() }}" alt="">
            </div>
            <div class="flex bg-yellow-500 p-10">
                <div class="mb-auto mt-auto max-w-lg text">
                    <h1 class="text-3xl uppercase bg-black p-2 rounded-md text-center">{{ $product->title }}</h1>
                    <p class="font mb-5 font-bold">{{ $product->created_at->toDateString() }}</p>
                    <p class="font-semibold">{{ $product->content }}</p>
                    <a href="{{ route('users.show', $product->user->id) }}" class="bg-black py-3 px-7 mt-4 text-white inline-block mt-6">{{ $product->user->name }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
