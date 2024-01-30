<!-- component -->
<body class="">
<div class="w-[80%] h-[75%] mx-auto my-10 bg-yellow-500 rounded-lg shadow-md p-5 ">
    <img class="w-32 h-32 rounded-full mx-auto" src="{{ $user->getImageURL() }}" alt="Profile picture">
    <h2 class="text-center text-2xl font-semibold mt-3">{{ $user->name }}</h2>
    <div class="flex justify-center mt-5">
        <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">{{ $user->email }}</a>
    </div>
    <div class="mt-5">
        <h3 class="text-xl font-bold">Bio</h3>
        <p class="text-white mt-2">{{ $user->bio }}</p>
    </div>
</div>
</body>
