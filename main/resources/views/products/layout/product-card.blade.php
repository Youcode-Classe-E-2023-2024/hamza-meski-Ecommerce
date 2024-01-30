<div class="w-80 h-[400px]  max-w-sm mx-auto relative shadow-md rounded-lg cursor-pointer overflow-hidden">
    <div class="aspect-w-3 aspect-h-2 h-full">
        <img src="{{ $product->getImageURL() }}" alt="Image" class="w-full h-full object-cover rounded-t-lg">
    </div>
    <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-50 backdrop-blur text-white p-4 rounded-b-lg">
        <h1 class="text-2xl font-semibold">{{ $product->title }}</h1>
        <p class="mt-2">{{ Illuminate\Support\Str::limit($product->content, 100) }}</p>
        <p class="text-yellow-500 mt-2">{{ $product->created_at->toDateString() }}</p>
        <div class="flex justify-center">
            <a href="{{ route('products.show', $product->id) }}" class="block w-full text-center mt-6 text-yellow-500 bg-black hover:bg-gray-900 px-6 py-2 mt-2 rounded-md block">View</a>
        </div>
    </div>
</div>
