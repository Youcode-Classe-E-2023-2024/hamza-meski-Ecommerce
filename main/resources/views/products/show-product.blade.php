@extends('layout.layout')

@section('content')
    <!-- component -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 h-screen">
            <div class="max-h-96 md:h-screen">
                <img class="w-screen h-screen object-cover object-top" src="https://images.pexels.com/photos/270373/pexels-photo-270373.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
            </div>
            <div class="flex bg-yellow-500 p-10">
                <div class="mb-auto mt-auto max-w-lg text">
                    <h1 class="text-3xl uppercase bg-black p-2 rounded-md text-center">Jun Santilla</h1>
                    <p class="font mb-5 font-bold">{{ $product->title }}</p>
                    <p class="font-semibold">{{ $product->content }}</p>
                    <button class="bg-black py-3 px-7 mt-6 text-white">{{ $product->user() }}</button>
                </div>
            </div>
        </div>
    </div>
@endsection
