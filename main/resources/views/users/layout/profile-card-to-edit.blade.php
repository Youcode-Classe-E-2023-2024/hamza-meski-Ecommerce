<form enctype="multipart/form-data" action="{{ route('users.update', auth()->id()) }}" class="space-y-6 bg-yellow-500 w-[70%] p-14 rounded-md" method="post">
    @csrf
    @method('put')
    <div>
        <label for="" class="block text-sm font-bold">Name</label>
        <div class="mt-1">
            <input value="{{ auth()->user()->name }}" name="name" type="text" class="text-black px-2 py-3 mt-1 block w-full rounded-md border-2 border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm" />
            <div class="text-red-500">
                @error('name')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>

    <div>
        <label for="bio" class="block text-sm font-bold">Bio</label>
        <div class="mt-1">
            <textarea name="bio" class="text-black  px-2 py-3 mt-1 block w-full rounded-md border-2  border-gray-300 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-sky-500 sm:text-sm">{{ auth()->user()->bio }}</textarea>
            <div class="text-red-500">
                @error('bio')
                {{ $message }}
                @enderror
            </div>
        </div>
    </div>
    <div>
        <label for="" class="block text-sm font-bold">Profile image</label>
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
                class="flex w-full justify-center rounded-md border border-transparent bg-black py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">
            Update profile
        </button>
    </div>
</form>
