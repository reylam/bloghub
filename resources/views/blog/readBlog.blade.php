<x-app-layout>
    <div class="single-Blog">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-2/3 mb-8">
                    <div class="sn-container flex flex-col gap-2">
                        <div class="flex items-center gap-3">
                            <img src="#" alt="Profile Picture" class="w-10 h-10 rounded-full fill-black bg-black">
                            <p class="font-semibold">{{ $blog->user->username }}</p>
                        </div>
                        <div class="my-5">
                            <h2 class="sw-title text-xl font-bold">Blog Category</h2>
                            <div class="category">
                                <ul class="space-y-2">
                                    <li class="flex justify-between">
                                        <a href="#" class="hover:text-blue-600">{{ $blog->category->name }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h1 class="text-3xl font-bold mb-4">{{ $blog->title }}</h1>
                        <div class="sn-img">
                            <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                                class="w-full max-h-[500px] rounded-md shadow-md" />
                        </div>
                        <div class="sn-content py-4">
                            <p class="mb-4">
                                {{ $blog->content }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/3">
                    <div class="sidebar space-y-8 ms-5">
                        <div class="sidebar-widget">
                            <h2 class="sw-title text-xl font-bold mb-4">Related Blog</h2>
                            <div class="Blog-list space-y-4 my-3">
                                @foreach ($blogs as $blog)
                                    <div class="flex items-center">
                                        <img src="{{ asset('storage/' . $blog->thumbnail) }}"
                                            class="w-20 h-16 rounded-md mr-4" />
                                        <div class="nl-title">
                                            <a href="{{ route('blog.show', $blog->slug) }}"
                                                class="text-blue-600">{{ $blog->title }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="sidebar-widget">
                            <h2 class="sw-title text-xl font-bold mb-4">Comments</h2>
                            <div class="comments-section space-y-4">
                                @foreach ($blog->comments as $comment)
                                    <div class="comment-item flex flex-col gap-3 bg-slate-500 p-4 rounded-lg">
                                        <div class="flex items-center gap-5">
                                            <img src="#" alt="Profile Picture"
                                                class="w-10 h-10 rounded-full fill-black bg-black">
                                            <p class="font-semibold">{{ $comment->user->username }}</p>
                                        </div>
                                        <p>{{ $comment->content }}</p>
                                    </div>
                                @endforeach
                            </div>
                            @auth
                                <form action="{{ route('comment.store') }}" method="POST" class="mt-4">
                                    @csrf
                                    <textarea name="content" class="w-full border-2 hover:border-[#FFD600] rounded-md p-2 bg-transparent" rows="4"
                                        placeholder="Leave a comment..."></textarea>
                                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <button type="submit"
                                        class="mt-2 bg-blue-600 text-white py-2 px-4 rounded-md">Submit</button>
                                </form>
                            @endauth
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
