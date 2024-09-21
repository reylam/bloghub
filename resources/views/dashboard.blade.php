<x-app-layout>
    <!-- Hero Apa Gitu Lupa -->
    <header class="container w-[1380px] h-[320px] bg-[#282828] mx-auto my-[30px] rounded-xl flex gap-8 d flex-col">
        <div class="">
            <h1 class="text-[48px] font-['Poppins'] font-bold text-white ps-[48px] pt-[50px]">
                Welcome to Blog<span class="text-[#FFD600]">.Hub</span>
            </h1>
            <p class="text-[16px] font-['Poppins'] text-white ps-[48px]">
                Your go-to platform for discovering insightful <span class="font-extrabold">articles, trends, and
                    stories</span>
            </p>
            <p class="text-[16px] font-['Poppins'] text-white ps-[48px] mt-[10px]">
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
                    class="w-full h-full ps-4 text-[16px] font-['Poppins'] text-white border-none focus:outline-none focus:ring-0 rounded-[26px] bg-[#555555]"
                    type="text" placeholder="Search Here" aria-label="Search">
            </div>
            <div class="flex space-x-4 ms-[15px]">
                <button
                    class="ms-[80px] px-[50px] h-[45px] text-white bg-none hover:bg-[#FFD600] hover:text-[#0E0E0E] hover:font-bold rounded-full text-[16px] font-['Poppins'] transition-all">All</button>
                <button
                    class="px-[50px] py-2 text-white bg-none hover:bg-[#FFD600] hover:text-[#0E0E0E] hover:font-bold rounded-full text-[16px] font-['Poppins'] transition-all">Technology</button>
                <button
                    class="px-[50px] py-2 text-white bg-none hover:bg-[#FFD600] hover:text-[#0E0E0E] hover:font-bold rounded-full text-[16px] font-['Poppins'] transition-all">Study</button>
                <button
                    class="px-[50px] py-2 text-white bg-none hover:bg-[#FFD600] hover:text-[#0E0E0E] hover:font-bold rounded-full text-[16px] font-['Poppins'] transition-all">Science</button>
            </div>
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
            <div class="w-[435px] object-cover flex flex-col gap-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTABbXr4i-QODqhy7tofHYmTYh05rYPktzacw&s"
                    class="w-full h-[500px] rounded-2xl">
                    <div class="flex flex-col gap-3 px-4 ">
                        <p class="font-extrabold text-2xl">Soon Robots Will Replace humans</p>
                        <p class="font-medium text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ad quibusdam possimus, a quod quidem accusantium quasi repudiandae nisi asperiores?</p>
                    </div>
            </div>

            <div class="w-[435px] object-cover flex flex-col gap-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTABbXr4i-QODqhy7tofHYmTYh05rYPktzacw&s"
                    class="w-full h-[500px] rounded-2xl">
                    <div class="flex flex-col gap-3 px-4 ">
                        <p class="font-extrabold text-2xl">Soon Robots Will Replace humans</p>
                        <p class="font-medium text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ad quibusdam possimus, a quod quidem accusantium quasi repudiandae nisi asperiores?</p>
                    </div>
            </div>

            <div class="w-[435px] object-cover flex flex-col gap-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTABbXr4i-QODqhy7tofHYmTYh05rYPktzacw&s"
                    class="w-full h-[500px] rounded-2xl">
                    <div class="flex flex-col gap-3 px-4 ">
                        <p class="font-extrabold text-2xl">Soon Robots Will Replace humans</p>
                        <p class="font-medium text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ad quibusdam possimus, a quod quidem accusantium quasi repudiandae nisi asperiores?</p>
                    </div>
            </div>
            <div class="w-[435px] object-cover flex flex-col gap-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTABbXr4i-QODqhy7tofHYmTYh05rYPktzacw&s"
                    class="w-full h-[500px] rounded-2xl">
                    <div class="flex flex-col gap-3 px-4 ">
                        <p class="font-extrabold text-2xl">Soon Robots Will Replace humans</p>
                        <p class="font-medium text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus ad quibusdam possimus, a quod quidem accusantium quasi repudiandae nisi asperiores?</p>
                    </div>
            </div>
        </div>
    </main>
</x-app-layout>
