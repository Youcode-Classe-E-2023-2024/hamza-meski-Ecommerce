@extends('layout.layout')

@section('content')
    <div class="h-screen w-full pt-14 grid grid-cols-2">
        <!-- First child -->
        <div class=" p-4 flex items-center justify-center ">

                <!--   product form  -->
                <div class="bg-white p-10 w-[90%]">
                    <h1 class="text-black font-bold text-3xl text-center mb-8">add a product</h1>

                    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" class="flex flex-col gap-10">
                        @csrf
                        <!-- flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Title</label>
                            <input type="text" name="title" placeholder="Product example"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Content</label>
                            <textarea name="content" placeholder="Content example"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none"></textarea>
                        </div>


                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">File</label>
                            <input type="file" name="image" placeholder="file"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>


                        <div class="text-right">
                            <button type="submit" class="py-3 px-8 bg-green-400 text-white font-bold">Submit</button>
                        </div>

                    </form>
                </div>

        </div>

        <!-- Second child -->
        <div class="bg-green-500 p-4">
            <!-- Content for the second column goes here -->
            Column 2 Content
        </div>
    </div>
@endsection
