<x-app-layout>
    <div class="min-w-full flex justify-center">
        <div class="flex w-[1380px] py-6 flex-col gap-6">
            <p class="font-bold text-2xl">
                Add Blog New
            </p>
            <form action="{{ route('blog.store') }}" method="POST">
                @csrf
                <div class="flex flex-col gap-4">
                    <div>
                        <label class="font-semi-bold" for="title">
                            Title
                        </label>
                        <input type="text" id="title" name="title" placeholder="Enter your blog title.."
                            class="border-2 border-[#ffd50070] rounded-md w-full py-2 px-3 bg-transparent" required>
                    </div>
                    <div>
                        <label for="content">Content:</label>
                        <textarea id="content" name="content" rows="8"
                            class="border-2 border-[#ffd50070] rounded-md w-full py-2 px-3 bg-transparent"
                            placeholder="Write your blog content here..." required></textarea>
                    </div>
                    <div>
                        <label for="category">Category:</label>
                        <select name="category_id" id="category"
                            class="border-2 border-[#ffd50070] rounded-md w-full py-2 px-3 bg-yellow-100 text-black"
                            required>
                            <option value="" disabled selected>Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="image">Upload Image:</label>
                        <input type="file" id="image" name="image" class="w-full">
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-[#FFD600] text-black font-bold py-5 rounded-2xl text-lg hover:bg-[#dbe921]">
                            Submit Blog
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
