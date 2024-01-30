<div class="w-[400px] h-[400px]  max-w-sm mx-auto relative shadow-md rounded-lg cursor-pointer overflow-hidden mt-6">
    <div class="aspect-w-3 aspect-h-2 h-full">
        <img src="{{ $product->getImageURL() }}" alt="Image" class="w-full h-full object-cover rounded-t-lg">
    </div>
    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
        <h1 class="text-2xl font-semibold">{{ $product->title }}</h1>
        <p class="mt-2">{{ $product->content }}</p>
        <div class="flex justify-center gap-2 mt-8">
            <form action="{{ route('products.update', $product->id) }}" method="post">
                @csrf
                @method('put')
                <button type="submit" class="text-green-500 bg-black hover:bg-gray-900 px-6 py-2 mt-2 rounded-md block">update</button>
            </form>
            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="text-red-500 bg-black hover:bg-gray-900 px-6 py-2 mt-2 rounded-md block">delete</button>
            </form>

        </div>
    </div>
</div>
