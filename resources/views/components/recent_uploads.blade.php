<section>
    <div class="bg-gray-100 xs:px-3 sm:px-3 md:px-3 py-10">
        <div class="xs:w-full sm:w-full md:w-full w-4/5 mx-auto">
            <div>
                <p class="text-lg flex items-center justify-center font-medium text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 mr-1 text-green-600" viewBox="0 0 512 512"><title>Star</title><path d="M480 208H308L256 48l-52 160H32l140 96-54 160 138-100 138 100-54-160z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                    Recent Uploads
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-5 ml-1 text-green-600" viewBox="0 0 512 512"><title>Star</title><path d="M480 208H308L256 48l-52 160H32l140 96-54 160 138-100 138 100-54-160z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                </p>
                <div class="h-1 mx-auto bg-green-600 mt-1 w-20 rounded-xl"></div>
            </div>
            @if(count($recent) > 0)
                <div class="py-8 grid grid-cols-4 gap-5">
                    @foreach($recent as $post)
                    <a href="{{ url('/listing') }}/{{ $post->post_id }}">
                        <div class="img-container h-52">
                            <div class="title py-2 px-3 transition rounded-md duration-500 ease-in-out text-white font-bold">
                                <span class="capitalize">{{ $post->title }}</span>
                                <div class="mt-3">
                                    <p class="text-gray-300 font-light">Location: {{ $post->area }}</p>
                                    <p class="text-gray-300">Price: <span class="text-green-400">@currency($post->price)</span></p>
                                </div>
                            </div>
                            <img class="rounded-md" src="{{ asset('images/banner/banner1.jpeg') }}" [title]="slide.title">
                        </div>
                    </a>
                    @endforeach
                </div>
            @else
                <div class="w-100 shadow-2xl mt-5">
                    <div class="h-40 flex items-center justify-center flex-col">
                        <h1>No Recent Post</h1>
                        <p>There are no recent records yet.</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>