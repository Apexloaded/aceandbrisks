@extends('layout.app')

@section('title')
    <title>About us</title>
@endsection

@section('content')
    <section class="w-full about-banner">
        <div class="h-80 flex justify-center items-center flex-col inner-banner">
            <p class="text-3xl text-wrap font-bold text-white font-sans text-center">Looking for a reliable real estate company?</p>
            <p class="text-2xl font-thin text-white font-mono text-center py-2">We've got you covered.</p>
            <a href="{{ url('/contact') }}" class="bg-green-700 text-white py-2 px-5 rounded-3xl font-mono font-semibold z-1">Contact Us</a>
        </div>
    </section>
    <section>
        <div class="py-10 bg-white">
            <div class="text-center">
                <h1 class="text-4xl text-gray-800 font-bold font-mono">Who we are</h1>
                <div class="mx-auto w-16 mt-2 bg-green-600 rounded-md py-1"></div>
            </div>
        </div>
    </section>
    <section>
        <div class="xs:w-full sm:w-full md:w-full w-4/5 mx-auto xs:px-3 sm:px-3 md:px-3">
            <div class="grid grid-cols-2 gap-10 xs:grid-cols-1 sm:grid-cols-1">
                <div class="py-10 xs:py-5 sm:py-5">
                    <div class="mb-3"><h1 class="text-green-600 text-4xl font-bold">About Ace and Brisk?</h1></div>
                    <p class="font-thin text-2xl">Ace and Brisk Integrated Limited is a full-service real estate brokerage specializing in assisting land and landed property investors—buyers, sellers and renters, with their various interests.</p>
                </div>
                <div class="py-10 xs:py-5 sm:py-5">
                    <img height="300px" src="{{ asset('images/about.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-white">
            <div class="w-4/5 xs:w-full sm:w-full md:w-full relative mx-auto z-10 mt-10 xs:mt-0 sm:mt-0 md:mt-0">
                <div class="w-full">
                    <div class="w-full py-4 xs:px-5 sm:px-5 md:px-5">
                        <div class="col-span-3">
                            <h1 class="font-bold text-sm text-2xl text-gray-800">Our Major:</h1>
                            <div class="grid grid-cols-4 gap-x-4 xs:flex sm:flex md:flex xs:flex-col sm:flex-col md:flex-col">
                                <div class="flex items-center py-5 xs:py-2 sm:py-2 md:py-2">
                                    <div class="bg-blue-700 p-3 rounded-full">
                                        <span class="fas fa-hand-holding-usd fa-2x text-white"></span>
                                    </div>
                                    <div class="pl-3">
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">Land leasing</p>
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">& Selling</p>
                                    </div>
                                </div>
                                <div class="flex items-center py-5 xs:py-2 sm:py-2 md:py-2">
                                    <div class="bg-red-600 p-3 rounded-full">
                                        <span class="fas fa-user-lock fa-2x text-white"></span>
                                    </div>
                                    <div class="pl-3">
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">House leasing</p>
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">& Selling</p>
                                    </div>
                                </div>
                                <div class="flex items-center py-5 xs:py-2 sm:py-2 md:py-2">
                                    <div class="bg-green-700 p-3 rounded-full">
                                        <span class="fas fa-hand-holding-usd fa-2x text-white"></span>
                                    </div>
                                    <div class="pl-3">
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">Property</p>
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">Procurement</p>
                                    </div>
                                </div>
                                <div class="flex items-center py-5 xs:py-2 sm:py-2 md:py-2">
                                    <div class="bg-gray-800 p-3 rounded-full">
                                        <span class="fas fa-umbrella fa-2x text-white"></span>
                                    </div>
                                    <div class="pl-3">
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">Real Estate</p>
                                        <p class="leading-4 font-normal text-gray-800 text-1xl">Investment Advice</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="w-full py-20">
        <div class="grid grid-cols-2 xs:grid-cols-1 sm:grid-cols-1">
            <div class="bg-white xs:bg-green-600 py-5 sm:bg-green-600 xs:px-5 sm:px-5 md:px-5">
                <div class="w-4/5 xs:w-full sm:w-full md:w-full float-right xs:pr-0 sm:pr-0 md:pr-0">
                    <div class="my-5">
                        <img src="{{ asset('images/why_us.jpeg') }}" alt="">
                    </div>
                    <div class="text-gray-800 xs:text-white sm:text-white">
                        <h1 class="text-2xl">Together we can achieve more</h1>
                        <div class="mt-2"></div>
                        <p class="leading-5 font-light">We have gathered experienced realtors to ensure 100% quality customer service. Your satisfaction is our number one priority, together we can achieve more in the real estate sector.</p>
                    </div>
                </div>
            </div>
            <div class="bg-green-600 shadow-3xl xs:bg-white sm:bg-white py-12 xs:px-5 sm:px-5 md:px-5">
                <div class="w-4/5 text-white xs:text-gray-800 sm:text-gray-800 xs:w-full sm:w-full md:w-full float-left pl-10 xs:pl-0 sm:pl-0 md:pl-0">
                    <div class="mb-10">
                        <h1 class="text-4xl font-semibold xs:text-3xl sm:text-3xl md:text-3xl">Why Client Choose Us</h1>
                    </div>
                    <div>
                        <div class="mb-6">
                            <h1 class="text-2xl font-normal">Competent Professionals</h1>
                            <p class="leading-5 mt-1 font-light">We work in an atmosphere of trust and professinalism where partners collaborate with each other to achieve success.</p>
                        </div>
                        <div class="mb-6">
                            <h1 class="text-2xl font-normal">Superior Services</h1>
                            <p class="leading-5 mt-1 font-light">We are committed to providing our clients with best, superior and quality services in the real estate industry.</p>
                        </div>
                        <div class="mb-6">
                            <h1 class="text-2xl font-normal">Competitive Pricing</h1>
                            <p class="leading-5 mt-1 font-light">We provide value to our client through straight forward commissions and added services.</p>
                        </div>
                        <div class="mb-6">
                            <h1 class="text-2xl font-normal">No Hidden Charges</h1>
                            <p class="leading-5 mt-1 font-light">We render our services with no hidden charges attached.</p>
                        </div>
                        <div class="mt-10 mb-5">
                            <a href="{{ url('/contact') }}" class="py-4 px-10 bg-white text-gray-800 hover:bg-gray-200 xs:bg-green-600 sm:bg-green-600 xs:text-white sm:text-white">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
