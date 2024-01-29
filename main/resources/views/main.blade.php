<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!-- component -->
    <style>
        html {
            scroll-behavior: smooth;
        }
        /* Compiled dark classes from Tailwind */
        .dark .dark\:divide-gray-700 > :not([hidden]) ~ :not([hidden]) {
            border-color: rgba(55, 65, 81);
        }
        .dark .dark\:bg-gray-50 {
            background-color: rgba(249, 250, 251);
        }
        .dark .dark\:bg-gray-100 {
            background-color: rgba(243, 244, 246);
        }
        .dark .dark\:bg-gray-600 {
            background-color: rgba(75, 85, 99);
        }
        .dark .dark\:bg-gray-700 {
            background-color: rgba(55, 65, 81);
        }
        .dark .dark\:bg-gray-800 {
            background-color: rgba(31, 41, 55);
        }
        .dark .dark\:bg-gray-900 {
            background-color: rgba(17, 24, 39);
        }
        .dark .dark\:bg-red-700 {
            background-color: rgba(185, 28, 28);
        }
        .dark .dark\:bg-green-700 {
            background-color: rgba(4, 120, 87);
        }
        .dark .dark\:hover\:bg-gray-200:hover {
            background-color: rgba(229, 231, 235);
        }
        .dark .dark\:hover\:bg-gray-600:hover {
            background-color: rgba(75, 85, 99);
        }
        .dark .dark\:hover\:bg-gray-700:hover {
            background-color: rgba(55, 65, 81);
        }
        .dark .dark\:hover\:bg-gray-900:hover {
            background-color: rgba(17, 24, 39);
        }
        .dark .dark\:border-gray-100 {
            border-color: rgba(243, 244, 246);
        }
        .dark .dark\:border-gray-400 {
            border-color: rgba(156, 163, 175);
        }
        .dark .dark\:border-gray-500 {
            border-color: rgba(107, 114, 128);
        }
        .dark .dark\:border-gray-600 {
            border-color: rgba(75, 85, 99);
        }
        .dark .dark\:border-gray-700 {
            border-color: rgba(55, 65, 81);
        }
        .dark .dark\:border-gray-900 {
            border-color: rgba(17, 24, 39);
        }
        .dark .dark\:hover\:border-gray-800:hover {
            border-color: rgba(31, 41, 55);
        }
        .dark .dark\:text-white {
            color: rgba(255, 255, 255);
        }
        .dark .dark\:text-gray-50 {
            color: rgba(249, 250, 251);
        }
        .dark .dark\:text-gray-100 {
            color: rgba(243, 244, 246);
        }
        .dark .dark\:text-gray-200 {
            color: rgba(229, 231, 235);
        }
        .dark .dark\:text-gray-400 {
            color: rgba(156, 163, 175);
        }
        .dark .dark\:text-gray-500 {
            color: rgba(107, 114, 128);
        }
        .dark .dark\:text-gray-700 {
            color: rgba(55, 65, 81);
        }
        .dark .dark\:text-gray-800 {
            color: rgba(31, 41, 55);
        }
        .dark .dark\:text-red-100 {
            color: rgba(254, 226, 226);
        }
        .dark .dark\:text-green-100 {
            color: rgba(209, 250, 229);
        }
        .dark .dark\:text-blue-400 {
            color: rgba(96, 165, 250);
        }
        .dark .group:hover .dark\:group-hover\:text-gray-500 {
            color: rgba(107, 114, 128);
        }
        .dark .group:focus .dark\:group-focus\:text-gray-700 {
            color: rgba(55, 65, 81);
        }
        .dark .dark\:hover\:text-gray-100:hover {
            color: rgba(243, 244, 246);
        }
        .dark .dark\:hover\:text-blue-500:hover {
            color: rgba(59, 130, 246);
        }

        /* Custom style */
        .header-right {
            width: calc(100% - 3.5rem);
        }
        .sidebar:hover {
            width: 16rem;
        }
        @media only screen and (min-width: 768px) {
            .header-right {
                width: calc(100% - 16rem);
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>

    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- top nav-bar -->
            <div class="fixed w-full flex items-center justify-between h-14 text-white z-10">
                <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-blue-800 dark:bg-gray-800 border-none">
                    <img class="w-7 h-7 md:w-10 md:h-10 mr-2 rounded-md overflow-hidden" src="https://therminic2018.eu/wp-content/uploads/2018/07/dummy-avatar.jpg" />
                    <span class="hidden md:block">ADMIN</span>
                </div>
                <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
                    <div class="bg-white rounded flex items-center w-full max-w-xl mr-4 p-2 shadow-sm border border-gray-200">
                        <button class="outline-none focus:outline-none">
                            <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </button>
                        <input type="search" name="" id="" placeholder="Search" class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" />
                    </div>
                    <ul class="flex items-center">
                        <li>
                            <a href="#" class="flex items-center mr-4 hover:text-blue-100">
                    <span class="inline-flex mr-1">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    </span>
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <section class="flex w-full h-full">
                <!-- Sidebar -->
                <div class="h-screen flex flex-col w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                    <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                        <ul class="flex flex-col py-4 space-y-1">
                            <li class="px-5 hidden md:block">
                                <div class="flex flex-row items-center h-8">
                                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Board</span>
                                    <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-blue-500 bg-indigo-50 rounded-full">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Notifications</span>
                                    <span class="hidden md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-red-500 bg-red-50 rounded-full">1.2k</span>
                                </a>
                            </li>
                            <li class="px-5 hidden md:block">
                                <div class="flex flex-row items-center mt-5 h-8">
                                    <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                                </div>
                            </li>
                            <li>
                                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                    <span class="inline-flex justify-center items-center ml-4">
                      <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                    </span>
                                    <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                                </a>
                            </li>
                        </ul>
                        <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2021</p>
                    </div>
                </div>

                <!-- container -->
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
                            <h1
                                class="font-bold text-yellow-300 text-xl sm:text-2xl md:text-4xl leading-tight mb-6"
                            >
                                A simple and smart Place to get a product
                            </h1>

                            <p class="text-white underline md:text-xl md:px-18">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit hello.
                            </p>

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
            </section>

        </div>
    </div>
</body>

</html>
