<x-app-layout>
    <div class="min-w-full flex justify-center bg-[#111827] text-white py-10">
        <div class="flex w-[1380px] py-6 flex-col gap-8 rounded-lg p-8 shadow-lg">
            @foreach ($blogs as $blog)
                {{ $blog->title }}
            @endforeach
        </div>
    </div>
</x-app-layout>
