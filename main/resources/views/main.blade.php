@extends('layout.layout')

@section('content')
    <main class="h-screen overflow-auto">
        <!-- component -->
        <section class="h-screen">
            <div class="bg-black text-white py-20">
                <div class="container mx-auto flex flex-col md:flex-row items-center my-12 md:my-24">
                    <div class="flex flex-col w-full lg:w-1/3 justify-center items-start p-8">
                        <h1 class="text-3xl md:text-5xl p-2 text-yellow-300 tracking-loose">TechFest</h1>
                        <h2 class="text-3xl md:text-5xl leading-relaxed md:leading-snug mb-2">Space : The Timeless Infinity
                        </h2>
                        <p class="text-sm md:text-base text-gray-50 mb-4">Explore your favourite events and
                            register now to showcase your talent and win exciting prizes.</p>
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


        <!-- component -->
        <div id="product-section" class="px-4 py-16">
            <div class="relative w-full md:max-w-2xl md:mx-auto text-center">
                <h1 class="font-bold text-yellow-300 text-xl sm:text-2xl md:text-4xl leading-tight mb-6">
                    A simple and smart Place to get a product
                </h1>
                <p class="text-white underline md:text-xl md:px-18">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit hello.
                </p>
            </div>
        </div>

        <div class="container mx-auto p-4 lg:h-screen flex items-center justify-center">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Blog Entry 1 -->
                <div class="max-w-sm mx-auto relative shadow-md rounded-lg cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?auto=format&fit=crop&q=80&w=1528&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Img by Meriç Dağlı https://unsplash.com/@meric" class="w-full h-auto object-cover rounded-lg">
                    <div class="absolute bottom-0 left-0 right-0 h-40 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
                        <h1 class="text-2xl font-semibold">Nature Image</h1>
                        <p class="mt-2">This is a beautiful nature image placeholder. You can replace it with your own image.</p>
                    </div>
                </div>

                <!-- Blog Entry 2 -->
                <div class="max-w-sm mx-auto relative shadow-md rounded-lg cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?auto=format&fit=crop&q=80&w=1528&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Img by Meriç Dağlı https://unsplash.com/@meric" class="w-full h-auto object-cover rounded-lg">
                    <div class="absolute bottom-0 left-0 right-0 h-40 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
                        <h1 class="text-2xl font-semibold">Nature Image</h1>
                        <p class="mt-2">This is a beautiful nature image placeholder. You can replace it with your own image.</p>
                    </div>
                </div>

                <!-- Blog Entry 3 -->
                <div class="max-w-sm mx-auto relative shadow-md rounded-lg cursor-pointer cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1516205651411-aef33a44f7c2?auto=format&fit=crop&q=80&w=1528&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Img by Meriç Dağlı https://unsplash.com/@meric" class="w-full h-auto object-cover rounded-lg">
                    <div class="absolute bottom-0 left-0 right-0 h-40 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
                        <h1 class="text-2xl font-semibold">Nature Image</h1>
                        <p class="mt-2">This is a beautiful nature image placeholder. You can replace it with your own image.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
