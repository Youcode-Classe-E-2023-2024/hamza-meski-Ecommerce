@extends('layout.layout')

@section('content')
    <div class="h-screen w-full bg-yellow-500 pt-14 grid grid-cols-2">
        <!-- First child -->
        <div class="bg-blue-500 p-4">



            <!-- component -->
            <div class="bg-green-200 py-32 px-10 ">
                <!--   tip; mx-auto -- jagab ilusti keskele  -->
                <div class="bg-white p-10 mx-auto">

                    <form action="">

                        <!--       flex - asjad korvuti, nb! flex-1 - element kogu ylejaanud laius -->
                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="name" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Text</label>
                            <input type="text" id="name" name="name" placeholder="Name"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Number</label>
                            <input type="number" id="number" name="number" placeholder="number"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Range</label>
                            <input type="range" id="range" name="range" placeholder="range"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">File</label>
                            <input type="file" id="file" name="file" placeholder="file"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Date</label>
                            <input type="date" id="date" name="date" placeholder="date"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Month</label>
                            <input type="month" id="month" name="month" placeholder="month"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Time</label>
                            <input type="time" id="time" name="time" placeholder="time"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Password</label>
                            <input type="password" id="password" name="password" placeholder="password"
                                   class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                        </div>

                        <div class="flex items-center mb-5">
                            <!--         tip - here neede inline-block , but why? -->
                            <label for="number" class="inline-block w-20 mr-6 text-right
                                 font-bold text-gray-600">Select</label>
                            <select class="flex-1 py-2 border-b-2 border-gray-400 focus:border-green-400
                      text-gray-600 placeholder-gray-400
                      outline-none">
                                <option>Surabaya</option>
                                <option>Jakarta</option>
                                <option>bandung</option>
                                <option>Tangerang</option>
                            </select>
                        </div>

                        <div class="text-right">
                            <button class="py-3 px-8 bg-green-400 text-white font-bold">Submit</button>
                        </div>

                    </form>
                </div>
            </div>




        </div>

        <!-- Second child -->
        <div class="bg-green-500 p-4">
            <!-- Content for the second column goes here -->
            Column 2 Content
        </div>
    </div>
@endsection
