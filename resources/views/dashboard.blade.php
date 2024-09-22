<x-app-layout>
    <!-- Hero Apa Gitu Lupa -->
    <header class="container w-[1380px] h-[320px] bg-[#282828] mx-auto my-[30px] rounded-xl flex gap-8 d flex-col">
        <div class="">
            <h1 class="text-[48px] font-bold text-white ps-[48px] pt-[50px]">
                Welcome to Blog<span class="text-[#FFD600]">.Hub</span>
            </h1>
            <p class="text-[16px] text-white ps-[48px]">
                Your go-to platform for discovering insightful <span class="font-extrabold">articles, trends, and
                    stories</span>
            </p>
            <p class="text-[16px] text-white ps-[48px] mt-[10px]">
                across various fields including technology, lifestyle, travel, productivity, and much more
            </p>
        </div>

        <!-- Search Bar ama Category -->
        <div class="flex items-center ps-[40px]">
            <div class="flex items-center w-[460px] h-[66px] bg-[#555555] rounded-[26px] ps-[25px]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-[30px] h-[30px] text-white"
                    viewBox="0 0 16 16" aria-hidden="true">
                    <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                </svg>
                <input
                    class="w-full h-full ps-4 text-[16px] text-white border-none focus:outline-none focus:ring-0 rounded-[26px] bg-[#555555]"
                    type="text" placeholder="Search Here" aria-label="Search">
            </div>

            <!-- Container Kategori yang Bisa Di-scroll -->
            <div id="category-container"
                class="flex space-x-4 ms-[15px] overflow-hidden max-w-[810px] transition-all duration-300">
                <div class="flex space-x-4 w-max">
                    <button
                        class="px-[50px] py-2 text-white bg-none hover:bg-[#FFD600] hover:text-[#0E0E0E] hover:font-bold rounded-full text-[16px] transition-all">All</button>
                    @foreach ($categories as $category)
                        <button
                            class="px-[50px] py-2 text-white bg-none hover:bg-[#FFD600] hover:text-[#0E0E0E] hover:font-bold rounded-full text-[16px] transition-all">{{ $category->name }}</button>
                    @endforeach
                </div>
            </div>

            <!-- Tombol Kanan untuk Navigasi -->
            <button id="next-btn"
                class="ms-[10px] fill-white bg-none hover:bg-[#FFD600] hover:fill-black rounded-full px-3 py-3 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-arrow-right-circle"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                </svg>
            </button>
        </div>
    </header>

    <section class="flex flex-col gap-6 items-center mb-12 ">
        <p class="text-2xl font-black">Articles</p>
        <div class="container w-[1380px] h-[500px] bg-[#b7d5e7] rounded-2xl overflow-hidden relative">
            <div class="carousel flex transition-transform duration-500 ease-in-out">
                <div class="carousel-item min-w-full">
                    <img src="https://picsum.photos/1380/500/?random=1" alt="Slide 1"
                        class="w-full h-full object-cover">
                </div>
                <div class="carousel-item min-w-full">
                    <img src="https://picsum.photos/1380/500/?random=2" alt="Slide 2"
                        class="w-full h-full object-cover">
                </div>
                <div class="carousel-item min-w-full">
                    <img src="https://picsum.photos/1380/500/?random=3" alt="Slide 3"
                        class="w-full h-full object-cover">
                </div>
                <div class="carousel-item min-w-full">
                    <img src="https://picsum.photos/1380/500/?random=4" alt="Slide 4"
                        class="w-full h-full object-cover">
                </div>
            </div>

            <!-- Dot indicators -->
            <div class="indicators absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <div class="dot w-4 h-4 bg-transparent border-2 border-gray-300 rounded-full cursor-pointer"
                    data-index="0"></div>
                <div class="dot w-4 h-4 bg-transparent border-2 border-gray-300 rounded-full cursor-pointer"
                    data-index="1"></div>
                <div class="dot w-4 h-4 bg-transparent border-2 border-gray-300 rounded-full cursor-pointer"
                    data-index="2"></div>
                <div class="dot w-4 h-4 bg-transparent border-2 border-gray-300 rounded-full cursor-pointer"
                    data-index="3"></div>
            </div>
        </div>
    </section>


    <main class="min-w-full flex justify-center">
        <div class="flex w-[1380px] flex-wrap gap-9">
            @foreach ($blogs as $blog)
                <div class="w-[435px] h-[800px] object-cover flex flex-col gap-5">
                    <img src="{{ asset('storage') . '/' . $blog->thumbnail }}"
                        class="w-[435px] h-[435px] rounded-2xl object-cover">
                    <div class="flex flex-col gap-4 px-4 flex-grow">
                        <p class="font-extrabold text-2xl"> {{ Str::limit($blog->title, 20, '...') }}</p>
                        <p class="font-medium text-gray-500 flex-grow">{{ Str::limit($blog->content, 200, '...') }}</p>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="flex gap-5 align-middle justify-between text-gray-400">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z" />
                                </svg>
                            </button>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-calendar-event" viewBox="0 0 16 16">
                                    <path
                                        d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z" />
                                </svg>
                                <p>{{ $blog->created_at->format('d F Y') }}</p>
                            </div>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                                    <path
                                        d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                                </svg>
                                <p>{{ $blog->views }} Views</p>
                            </div>
                        </div>
                        <a href="{{ route('blog.show', $blog->slug) }}"
                            class="text-center mt-3 transition-all ease-in duration-200 border-solid border-2 border-gray-600 p-3 rounded-3xl hover:bg-blue-600 hover:font-semibold hover:border-blue-600">Read
                            More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

    <div class="flex justify-center py-10 space-x-2 items-center gap-3 bg-[#111827]">
        <!-- Arrow Left -->
        <button
            class="pagination-arrow w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-gray-500 transition duration-200">
            < </button>

                <!-- Page Numbers -->
                <div class="flex space-x-3">
                    <button
                        class="pagination-number w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-yellow-500 hover:text-black transition duration-200">1</button>
                    <button
                        class="pagination-number w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-yellow-500 hover:text-black transition duration-200">2</button>
                    <button
                        class="pagination-number w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-yellow-500 hover:text-black transition duration-200">3</button>
                    <button
                        class="pagination-number w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-yellow-500 hover:text-black transition duration-200">4</button>
                    <button
                        class="pagination-number w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-yellow-500 hover:text-black transition duration-200">5</button>
                </div>

                <!-- Arrow Right -->
                <button
                    class="pagination-arrow w-10 h-10 flex items-center justify-center rounded-lg border border-gray-500 hover:bg-gray-500 transition duration-200">
                    >
                </button>
    </div>

    <footer class="w-full flex justify-center p-10 bg-slate-800">
        <div class="shrink-0 flex items-center transition-all ease-in-out duration-300 hover:scale-105">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>
    </footer>


</x-app-layout>
