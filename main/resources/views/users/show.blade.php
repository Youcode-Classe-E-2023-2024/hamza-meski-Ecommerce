@extends('layout.layout')

@section('content')
    <div class="h-screen w-full pt-14 grid grid-cols-2">
        <!-- First child -->
        <div class=" p-4 flex items-center justify-center ">
                @include('users.layout.profile-card')
        </div>

        <!-- Second child -->
        <div class="bg-yellow-500 h-full overflow-auto">
            @foreach($user->products as $product)
                @include('products.layout.product-card-to-edit')
            @endforeach
        </div>
    </div>
@endsection
