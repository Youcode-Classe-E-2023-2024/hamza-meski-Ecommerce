@extends('layout.layout')

@section('content')

    <!-- Landing page -->
    <section class="h-screen">
        <div class="bg-black text-white py-20">
            <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
                <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                    <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">Ecommerce</h1>
                    <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Space : The Products Infinity
                    </h2>
                    <p class="text-sm md:text-base text-gray-50 mb-4">Explore your favourite products and
                        register now to gain the last exciting stuffs.</p>
                    <a href="#product-section"
                       class="bg-transparent hover:bg-yellow-300 text-yellow-300 hover:text-black rounded shadow hover:shadow-lg py-2 px-4 border border-yellow-300 hover:border-transparent">
                        Explore Now</a>
                </div>
                <div class="p-8 mt-12 mb-6 md:mb-0 md:mt-0 ml-0 md:ml-12 lg:w-2/3  justify-center">
                    <div class="h-48 flex flex-wrap content-center">
                        <div>
                            <img class="inline-block mt-28 hidden xl:block" src="https://user-images.githubusercontent.com/54521023/116969935-c13d5b00-acd4-11eb-82b1-5ad2ff10fb76.png"></div>
                        <div>
                            <img class="inline-block mt-24 md:mt-0 p-8 md:p-0"  src="https://user-images.githubusercontent.com/54521023/116969931-bedb0100-acd4-11eb-99a9-ff5e0ee9f31f.png"></div>
                        <div>
                            <img class="inline-block mt-28 hidden lg:block" src="https://user-images.githubusercontent.com/54521023/116969939-c1d5f180-acd4-11eb-8ad4-9ab9143bdb50.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="">
        <!-- component -->
        <div id="product-section" class="px-4 pt-16 mb-20">
            <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
                <h1 class="font-bold text-yellow-300 text-xl sm:text-2xl md:text-4xl leading-tight mb-6">
                    A simple and smart Place to get a product
                </h1>
                <p class="text-white bg-black text-yellow-300 rounded-md py-2 md:text-xl md:px-18">
                    Bye Anything Anywhere.
                </p>
            </div>
        </div>

        <div class="container mx-auto px-20 lg:h-screen ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-8">

                @forelse($products as $product)
                    @include('products.layout.product-card')
                    @empty
                    <div class="flex justify-center align-items text-5xl">
                        There no product :(
                    </div>
                @endforelse

            </div>
            <div class="flex justify-center gap-2 my-16">
                {{ $products->links() }}
            </div>

        </div>
    </section>

@endsection
