@extends('layout.app')

@section('title')
    <title>Ace and Brisk</title>
@endsection

@section('content')
<section>
    <div class="bg-white xs:px-3 sm:px-3 md:px-3 py-3">
        <div class="xs:w-full sm:w-full md:w-full w-4/5 mx-auto">
            <div class="grid grid-cols-3 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 gap-4">
                <div class="md:col-span-2 lg:col-span-2 xl:col-span-2">
                    <div class="w-full flex flex-col">
                        <div class="xs:min-h-40 sm:min-h-40 md:min-h-60 min-h-60 max-h-60 flex items-center bg-gray-200 fullimg rounded-md">
                            <img #fullImage src="{{ asset('images/banner/banner1.jpeg') }}">
                        </div>
                        <div class="grid xs:grid-cols-4 sm:grid-cols-4 grid-cols-6 gap-4 mt-4">
                            <div class="xs:max-h-10 sm:max-h-10 max-h-10 rounded-md cursor-pointer" *ngFor="let thumbnail of archPost.images">
                                <img class="thumbnail rounded-md w-full" #thumbnail (click)="switchToFull($event)" src="{{ asset('images/banner/banner1.jpeg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-6">
                        <div class="flex border-t border-b xs:flex-col sm:flex-col justify-between py-2">
                            <div>
                                <p class="text-xl font-bold text-green-600">{{ $post->title }}</p>
                                <p class="text-gray-800 text-sm font-light">{{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY') }}</p>
                            </div>
                        </div>
                        <div class="py-2">
                            <div class="w-full">
                                <ul>
                                    <li class="flex items-center py-1 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon text-gray-500 h-5" viewBox="0 0 512 512"><title>Navigate</title><path d="M448 64L64 240.14h200a8 8 0 018 8V448z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                        <span class="text-gray-600 font-bold mx-2">Area:</span> {{ $post->area }}
                                    </li>
                                    <li class="flex items-center py-1 text-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon text-gray-500 h-5" viewBox="0 0 512 512"><title>Calendar</title><rect fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" x="48" y="80" width="416" height="384" rx="48"/><circle cx="296" cy="232" r="24"/><circle cx="376" cy="232" r="24"/><circle cx="296" cy="312" r="24"/><circle cx="376" cy="312" r="24"/><circle cx="136" cy="312" r="24"/><circle cx="216" cy="312" r="24"/><circle cx="136" cy="392" r="24"/><circle cx="216" cy="392" r="24"/><circle cx="296" cy="392" r="24"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" stroke-linecap="round" d="M128 48v32M384 48v32"/><path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32" d="M464 160H48"/></svg>
                                        <span class="text-gray-600 font-bold mx-2">Year:</span> {{ $post->year }}
                                    </li>
                                </ul>
                            </div>
                            <div class="bg-green-100 my-2">
                                <div class="bg-green-600 py-2 px-2 block">
                                    <h1 class="font-bold text-white">Features</h1>
                                </div>
                                <div class="py-2 bg-green-100 block overflow-hidden">
                                    <ul class="list-disc ml-5">
                                        <li class="ml-1 font-light {{ $post->central_water ? '' : 'hidden' }}">Central Water</li>
                                        <li class="ml-1 font-light {{ $post->chandelier ? '' : 'hidden' }}">Chandelier</li>
                                        <li class="ml-1 font-light {{ $post->exterior_brick_design ? '' : 'hidden'}}">Exterior Bricks Design</li>
                                        <li class="ml-1 font-light {{ $post->wooden_doors ? '' : 'hidden'}}">Wooden Doors</li>
                                        <li class="ml-1 font-light {{ $post->high_ceiling ? '' : 'hidden'}}">High Ceiling</li>
                                        <li class="ml-1 font-light {{ $post->hot_tub ? '' : 'hidden'}}">Hot Tub</li>
                                        <li class="ml-1 font-light {{ $post->parking_lot ? '' : 'hidden'}}">Parking Lot</li>
                                        <li class="ml-1 font-light {{ $post->massive_closet ? '' : 'hidden'}}">Massive Closet</li>
                                        <li class="ml-1 font-light {{ $post->microwave ? '' : 'hidden'}}">Microwave</li>
                                        <li class="ml-1 font-light {{ $post->penthouse ? '' : 'hidden'}}">Penthouse</li>
                                        <li class="ml-1 font-light {{ $post->swimming_pool ? '' : 'hidden'}}">Swimming Pool</li>
                                        <li class="ml-1 font-light {{ $post->tv_cable ? '' : 'hidden'}}">Tv Cable</li>
                                        <li class="ml-1 font-light {{ $post->underground_cabling ? '' : 'hidden'}}">Underground Cabling</li>
                                        <li class="ml-1 font-light {{ $post->equipped_kitchen ? '' : 'hidden'}}">Equipped Kitchen</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="w-full pt-2">
                                {!! $post->content !!}
                            </div>
                        </div>
                        {{-- <div class="mt-2">
                            <p class="font-bold">1,938 Comments</p>
                        </div>
                        <div class="w-full">
                            <form>
                                <div class="w-full">
                                    <div class="flex flex-col py-2">
                                        <input class="outline-none border-b py-1" placeholder="Name">
                                    </div>
                                    <div class="flex flex-col py-2">
                                        <textarea class="outline-none border-b" rows="4" placeholder="Make a comment"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="w-full">
                            <div class="grid xs:grid-cols-6 sm:grid-cols-8 grid-cols-12 gap-4 py-5">
                                <div class="thumbnail-user bg-gray-400 w-20 flex items-center justify-center">
                                    <span class="text-xl font-bold">J</span>
                                </div>
                                <div class="xs:col-span-5 sm:col-span-7 col-span-11">
                                    <p class="text-gray-900 font-bold">Joel Jeffery</p>
                                    <div class="py-1">
                                        <p class="text-sm">Kaan Architecten has built a pavilion to commemorate Dutch victims of the second world war, with thickset walls that strategically frame views of the trees and sky. More
                                            Kaan Architecten has built a pavilion to commemorate Dutch victims of the second world war, with thickset walls that strategically frame views of the trees and sky. More
                                            Kaan Architecten has built a pavilion to commemorate Dutch victims of the second world war, with thickset walls that strategically frame views of the trees and sky. More
                                            Kaan Architecten has built a pavilion to commemorate Dutch victims of the second world war, with thickset walls that strategically frame views of the trees and sky. More
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="w-full">
                    <p>Related Posts</p>
                    @foreach ($relativePost as $post)
                        <a href="{{ url('/listing') }}/{{ $post->post_id }}">
                            <div class="grid xs:grid-cols-1 sm:grid-cols-1 grid-cols-3 gap-4 py-2 cursor-pointer">
                                <div><img class="xs:h-40 sm:h-40 h-20 w-full" src="{{ asset('images/banner/banner1.jpeg') }}"></div>
                                <div class="md:col-span-1 col-span-2">
                                    <p class="font-bold text-sm">{{ $post->title }}</p>
                                    <p class="text-gray-800 py-1 text-sm font-weight-light">{!! Str::limit($post->content, 80, ' ...More') !!}</p>
                                </div>
                            </div>
                        </a>
                        
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
