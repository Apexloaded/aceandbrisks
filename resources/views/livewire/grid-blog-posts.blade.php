<section>
    <div class="bg-white xs:px-3 sm:px-3 md:px-3 py-3 mb-20">
        <div class="xs:w-full sm:w-full md:w-full w-4/5 mx-auto">
            <div class="w-full py-1 border-b mb-4 flex justify-between items-center mt-14">
                <div class="py-2">
                    <h1 class="flex items-center"> <span class="font-bold mr-1">{{ count($properties) }}</span> Listings</h1>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center bg-white rounded-full py-1 border">
                        <input class="rounded-full px-3 outline-none font-thin" placeholder="Search">
                        <button class="px-1 py-1 mr-1 hover:bg-gray-800 hover:text-white rounded-full outline-none bg-gray-500"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-4" viewBox="0 0 512 512"><title>Search</title><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg></button>
                    </div>
                    <div class="ml-2 flex items-center xs:hidden sm:hidden md:hidden">
                        <button wire:click="toggleView(1)"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon {{ $display == 1 ? 'text-green-600' : '' }} h-5" viewBox="0 0 512 512"><title>Apps</title><rect x="64" y="64" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="216" y="64" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="368" y="64" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="64" y="216" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="216" y="216" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="368" y="216" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="64" y="368" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="216" y="368" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><rect x="368" y="368" width="80" height="80" rx="40" ry="40" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg></button>
                        <button wire:click="toggleView(2)"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon {{ $display == 2 ? 'text-green-600' : '' }} h-5 mx-1" viewBox="0 0 512 512"><title>Grid</title><rect x="48" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="288" y="48" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="48" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><rect x="288" y="288" width="176" height="176" rx="20" ry="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg></button>
                        <button wire:click="toggleView(3)"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon {{ $display == 3 ? 'text-green-600' : '' }} h-5" viewBox="0 0 512 512"><title>List</title><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M160 144h288M160 256h288M160 368h288"/><circle cx="80" cy="144" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="80" cy="256" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="80" cy="368" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg></button>
                    </div>
                </div>
            </div>
            @if (count($properties) < 0)
                <div class="w-100 shadow-2xl mt-5">
                    <div class="h-80 flex items-center justify-center flex-col">
                        <h1>No Post Yet</h1>
                        <p>There are no properties listed yet.</p>
                    </div>
                </div>
            @else
                <div class="{{ $display == 2 ? 'grid-cols-2' : 'grid-cols-3' }} {{ $display == 3 ? 'hidden' : 'grid' }} grid-cols-2 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($properties as $prop)
                        <a href="{{ url('/listing') }}/{{ $prop->post_id }}" class="shadow archpost rounded-xl">
                            <div class="bg-gray-100 rounded-t-xl h-60 img-holder flex items-center justify-center">
                                <div class="{{ $prop->offer_type == 'sale' || $prop->offer_type == 'rent' ? 'bg-green-600' : ''}} {{ $prop->offer_type == 'sold' || $prop->offer_type == 'leased' ? 'bg-red-600' : ''}} absolute z-10 top-2 right-3 bg-green-600 px-4 rounded-2xl text-white text-sm uppercase">{{ $prop->offer_type }}</div>
                                <img class="outline-none" src="{{ asset('images/uploads/images') }}/{{ $prop->image }}">
                            </div>
                            <div class="mt-3">
                                <div class="flex justify-between items-center">
                                    <span class="bg-gray-700 rounded-r-xl px-3 py-1 text-white text-sm">{{ \Carbon\Carbon::parse($prop->created_at)->isoFormat('MMM Do YYYY') }}</span>
                                    <span class="text-green-600 text-2xl font-bold mr-2">@currency($prop->price)</span>
                                </div>
                                <div class="px-3 mt-2">
                                    <h1 class="pb-1 font-bold outline-none">{{ $prop->title }}</h1>
                                    <p class="text-gray-800 text-sm">{!! Str::limit($prop->content, 150, ' ...More') !!}</p>
                                </div>
                            </div>
                            <div class="px-3 py-2">
                                <ul>
                                    <li class="flex items-center py-1 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon text-gray-500 h-5" viewBox="0 0 512 512"><title>Navigate</title><path d="M448 64L64 240.14h200a8 8 0 018 8V448z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                        <span class="text-gray-600 font-bold mx-2">Area:</span> {{ $prop->area }}
                                    </li>
                                    <li class="flex items-center py-1 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon text-gray-500 h-5" viewBox="0 0 512 512"><title>Calendar</title><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48"/><circle cx="296" cy="232" r="24"/><circle cx="376" cy="232" r="24"/><circle cx="296" cy="312" r="24"/><circle cx="376" cy="312" r="24"/><circle cx="136" cy="312" r="24"/><circle cx="216" cy="312" r="24"/><circle cx="136" cy="392" r="24"/><circle cx="216" cy="392" r="24"/><circle cx="296" cy="392" r="24"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M464 160H48"/></svg>
                                        <span class="text-gray-600 font-bold mx-2">Year:</span> {{ $prop->year }}
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="px-3 flex justify-end pb-2">
                                <p class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-4 text-green-500" viewBox="0 0 512 512"><title>Chatbox</title><path d="M408 64H104a56.16 56.16 0 00-56 56v192a56.16 56.16 0 0056 56h40v80l93.72-78.14a8 8 0 015.13-1.86H408a56.16 56.16 0 0056-56V120a56.16 56.16 0 00-56-56z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                                    <span class="text-gray-600 ml-1 text-sm">0</span>
                                </p>
                            </div> --}}
                        </a>
                    @endforeach
                </div>
                <div class="{{ $display != 3 ? 'hidden' : 'block'}} w-full">
                    <div class="mb-10">
                        @foreach($properties as $prop)
                            <a href="{{ url('/listing') }}/{{ $prop->post_id }}" class="grid grid-cols-3 gap-5 mb-10 bg-gray-100">
                                <div class="relative h-full flex items-center overflow-hidden">
                                    <div class="{{ $prop->offer_type == 'sale' || $prop->offer_type == 'rent' ? 'bg-green-600' : ''}} {{ $prop->offer_type == 'sold' || $prop->offer_type == 'leased' ? 'bg-red-600' : ''}} absolute z-10 top-2 right-3 bg-green-600 px-4 rounded-2xl text-white text-sm uppercase">{{ $prop->offer_type }}</div>
                                    <img class="w-full shadow project-thumbnail-list" src="{{ asset('images/uploads/images') }}/{{ $prop->image }}">
                                </div>
                                <div class="z-10 col-span-2 py-2 pr-3">
                                    <div class="project-details">
                                        <p class="font-bold leading-tight cursor-pointer text-lg">{{ $prop->title }}</p>
                                        <p class="text-gray-300 font-bold text-2xl mt-1">Price: <span class="text-green-600">@currency($prop->price)</span></p>
                                        <p class="py-1 text-sm">{!! Str::limit($prop->content, 150, ' ...More') !!}</p>
                                        <div class="flex mv-bottom justify-between">
                                            <ul>
                                                <li class="flex items-center pt-1 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon text-gray-500 h-5" viewBox="0 0 512 512"><title>Navigate</title><path d="M448 64L64 240.14h200a8 8 0 018 8V448z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                    <span class="text-gray-600 font-bold mx-2">Area:</span> {{ $prop->area }}
                                                </li>
                                                <li class="flex items-center pt-1 text-sm">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon text-gray-500 h-5" viewBox="0 0 512 512"><title>Calendar</title><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48"/><circle cx="296" cy="232" r="24"/><circle cx="376" cy="232" r="24"/><circle cx="296" cy="312" r="24"/><circle cx="376" cy="312" r="24"/><circle cx="136" cy="312" r="24"/><circle cx="216" cy="312" r="24"/><circle cx="136" cy="392" r="24"/><circle cx="216" cy="392" r="24"/><circle cx="296" cy="392" r="24"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M464 160H48"/></svg>
                                                    <span class="text-gray-600 font-bold mx-2">Year:</span> {{ $prop->year }}
                                                </li>
                                            </ul>
                                            <div class="relative">
                                                <p class="flex items-center mv-bottom">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-4 text-green-500" viewBox="0 0 512 512"><title>Chatbox</title><path d="M408 64H104a56.16 56.16 0 00-56 56v192a56.16 56.16 0 0056 56h40v80l93.72-78.14a8 8 0 015.13-1.86H408a56.16 56.16 0 0056-56V120a56.16 56.16 0 00-56-56z" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"/></svg>
                                                    <span class="text-gray-600 ml-1 text-sm">0</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>