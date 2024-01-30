<form enctype="multipart/form-data" action="{{ route('register.store') }}" class="space-y-6 bg-yellow-500 h" method="post">
    @csrf
    <div>
        <label for="" class="block text-sm font-medium">Name</label>
        <div class="mt-1">
            <input name="name" type="text" class="text-black px-2 py-3 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
            <div class="text-red-500">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div>
        <label for="bio" class="block text-sm font-medium">Bio</label>
        <div class="mt-1">
            <textarea name="bio" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm"></textarea>
            <div class="text-red-500">
                @error('bio')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div>
        <label for="" class="block text-sm font-medium">Profile image</label>
        <div class="mt-1">
            <input name="image" type="file" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
            <div class="text-red-500">
                @error('image')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div>
        <button type="submit"
                class="flex w-full justify-center rounded-md border border-transparent bg-sky-400 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">Register
            Account
        </button>
    </div>
</form>
