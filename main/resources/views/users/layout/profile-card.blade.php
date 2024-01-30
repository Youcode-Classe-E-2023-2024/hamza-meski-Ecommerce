<!-- component -->
<div class="w-[80%] h-[75%] mx-auto my-10 bg-yellow-500 rounded-lg shadow-md p-5 flex flex-col justify-between">
    <div>
        <div class="flex justify-center">
            <div class="h-[120px] w-[120px] rounded-full" style="background-image: url('{{ $user->getImageURL() }}'); background-size:cover;background-position: center"></div>
        </div>
        <h2 class="text-center text-2xl font-semibold mt-3">{{ $user->name }}</h2>
        <div class="flex justify-center mt-5">
            <a href="#" class="text-blue-500 hover:text-blue-700 mx-3">{{ $user->email }}</a>
        </div>
        <div class="mt-5">
            <h3 class="text-xl font-bold">Bio</h3>
            <p class="text-white mt-2">{{ $user->bio }}</p>
        </div>
    </div>

    @if(auth()->id() == $user->id)
        <form action="{{ route('users.edit', auth()->id()) }}" class="flex justify-center">
            <button class="bg-black hover: px-4 py-2 rounded-md w-[80%]">
                Update Profile
            </button>
        </form>
    @else
        @if(auth()->user()->follows($user))
            <form action="{{ route('users.unfollow', $user->id) }}" class="flex justify-center" method="post">
                @csrf
                <button type="submit" class="bg-red-500 hover: px-4 py-2 rounded-md w-[80%]">
                    Unfollow
                </button>
            </form>
        @else
            <form action="{{ route('users.follow', $user->id) }}" class="flex justify-center" method="post">
                @csrf
                <button type="submit" class="bg-black hover: px-4 py-2 rounded-md w-[80%]">
                    Follow
                </button>
            </form>
        @endif
    @endif
</div>
