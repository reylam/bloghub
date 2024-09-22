<x-app-layout>
    <div class="min-w-full flex justify-center bg-[#111827] text-white py-10">
        <div class="flex w-[1380px] py-6 flex-col gap-8 bg-[#1f2937] rounded-lg p-8 shadow-lg">
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <p class="font-bold text-3xl text-center text-[#FFD600]">
                Add a New Blog
            </p>
            @if ($errors->any())
                <div class="mb-4 text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-col gap-6">
                    <div>
                        <label class="font-semibold text-lg" for="title">Title</label>
                        <input type="text" id="title" name="title" placeholder="Enter your blog title..."
                            class="border-2 border-[#ffd50070] rounded-md w-full py-2 px-3 bg-[#2d3748] text-white placeholder-gray-400 focus:ring-[#FFD600] focus:border-[#FFD600]"
                            required>
                    </div>
                    <div>
                        <label class="font-semibold text-lg" for="content">Content</label>
                        <textarea id="content" name="content" rows="8"
                            class="border-2 border-[#ffd50070] rounded-md w-full py-2 px-3 bg-[#2d3748] text-white placeholder-gray-400 focus:ring-[#FFD600] focus:border-[#FFD600]"
                            placeholder="Write your blog content here..." required></textarea>
                    </div>
                    <div>
<<<<<<< HEAD
                        <label for="category" class="font-semibold text-lg">Category:</label>
=======
                        <label for="category">Category:</label>
>>>>>>> origin/main
                        <select name="category_id" id="category"
                            class="border-2 border-[#ffd50070] rounded-md w-full py-2 px-3 bg-[#2d3748] text-white placeholder-gray-400 focus:ring-[#FFD600] focus:border-[#FFD600]">
                            <option value="" disabled selected class="bg-gray-700 text-gray-400">Select a category
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" class="bg-gray-800 text-white">{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-64 border-2 border-[#ffd50070] border-dashed rounded-lg cursor-pointer bg-[#2d3748] hover:bg-[#3a434c]">
<<<<<<< HEAD
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
=======
                            <div class="flex flex-col items-center justify-center pt-5 pb-6" id="upload-image">
>>>>>>> origin/main
                                <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span>
                                    or drag and drop</p>
                                <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" name="thumbnail" class="hidden"
                                onchange="displayFile(this)" />
                            <img id="image-preview"
<<<<<<< HEAD
                                class="mt-2 hidden w-24 h-24 object-cover border-2 border-[#ffd50070] rounded-md" />
                        </label>
                        <p id="file-name" class="mt-2 text-sm text-gray-400">No file chosen</p>
                    </div>
                    <div class="">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
=======
                                class="mt-2 hidden w-full h-full object-cover border-2 border-[#ffd50070] rounded-md" />
                        </label>
                        <p id="file-name" class="mt-2 text-sm text-gray-400">No file chosen</p>
                        <input type="text" value="{{ Auth::user()->id }}" name="user_id" class="hidden">
>>>>>>> origin/main
                    </div>
                    <div>
                        <button type="submit"
                            class="w-full bg-[#FFD600] text-black font-bold py-4 rounded-xl text-lg hover:bg-[#dbe921] transition duration-300">
                            Submit Blog
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<<<<<<< HEAD
    <script>
        function displayFile(input) {
            const fileName = input.files[0] ? input.files[0].name : 'No file chosen';
            document.getElementById('file-name').textContent = fileName;

            const file = input.files[0];
            const preview = document.getElementById('image-preview');
=======

    <script>
        function displayFile(input) {
            const fileName = input.files[0] ?
                input.files[0].name :
                "No file chosen";
            document.getElementById("file-name").textContent = fileName;

            const file = input.files[0];
            const preview = document.getElementById("image-preview");
            const uploadImage = document.getElementById('upload-image')
>>>>>>> origin/main

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
<<<<<<< HEAD
                    preview.classList.remove('hidden'); // Show the image preview
                };
                reader.readAsDataURL(file);
            } else {
                preview.classList.add('hidden'); // Hide the image preview if no file
            }
        }
=======
                    uploadImage.classList.add("hidden")
                    preview.classList.remove("hidden"); // Show the image preview
                };
                reader.readAsDataURL(file);
            } else {
                preview.classList.add("hidden"); // Hide the image preview if no file
            }
        }

        displayFile();
>>>>>>> origin/main
    </script>
</x-app-layout>
