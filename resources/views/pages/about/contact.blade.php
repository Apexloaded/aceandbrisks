@extends('layout.app')

@section('title')
    <title>About us</title>
@endsection

@section('content')
<div class="w-full bg-white pt-1">
    <section class="support h-96 xs:h-40 sm:h-40 md:h-60 items-center flex">
      <div class="w-10/12 xs:w-full sm:w-full md:w-full relative mx-auto xs:px-5 sm:px-5 md:px-5 text-center">
        <h1 class="text-white font-bold text-4xl xs:text-4xl sm:text-4xl">Send us a message</h1>
        <p class="text-xl text-white mt-5">We would send you a reply as soon as possible.</p>
      </div>
    </section>
    <section>
        <div class="bg-white w-full mb-20">
            <div class="bg-gray-300 w-full float-left mb-20">
                <div class="w-full float-left">
                    <div class="w-4/6 xs:w-full sm:w-full md:w-full relative mx-auto xs:px-5 sm:px-5 md:px-5">
                        <div class="py-10 flex justify-around xs:flex-col">
                            <div class="flex items-center my-4">
                                <div>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-8" viewBox="0 0 512 512"><title>Call</title><path d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg></span>
                                </div>
                                <div class="ml-4">
                                    <h1 class="font-bold text-2xl">Call Us</h1>
                                    <p>+234 701 618 0725</p>
                                    <div class="mt-2">
                                        <a href="tel:+234 701 618 0725" class="bg-green-600 text-white px-5 py-2 rounded-xl">Click to call</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center my-4">
                                <div>
                                    <span><svg xmlns="http://www.w3.org/2000/svg" class="ionicon h-8" viewBox="0 0 512 512"><title>Mail</title><rect x="48" y="96" width="416" height="320" rx="40" ry="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M112 160l144 112 144-112"/></svg></span>
                                </div>
                                <div class="ml-4">
                                    <h1 class="font-bold text-2xl">Email Us</h1>
                                    <a href="mailto:info@aceandbrisks.com">info@aceandbrisks.com</a>
                                    <div class="mt-2">
                                        <a href="mailto:info@aceandbrisks.com" class="bg-green-600 text-white px-5 py-2 rounded-xl">Send Email</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-10/12 xs:w-full sm:w-full md:w-full mx-auto xs:px-5 sm:px-5 md:px-5">
                <div class="w-4/6 xs:w-full sm:w-full mx-auto">
                    <div class="mb-20">
                        <h1 class="uppercase font-bold text-3xl text-center text-gray-800 mb-2">Have some questions?</h1>
                        <p class="text-center text-gray-700"><span class="fas fa-globe text-black"></span> Nigeria | Block B 105 Maccido Royal Estate, Galadimawa, Abuja.</p>
                    </div>
                    <div class="grid grid-cols-2 xs:grid-cols-1 sm:grid-cols-1 md:grid-cols-1 gap-5 lg:gap-5 mt-4">
                        <div class="xs:hidden sm:hidden md:hidden">
                            <img width="80%" src="{{ url('/images/mail.png') }}" alt="">
                        </div>
                        <div>
                            <form method="post" action="{{ route('send-mail') }}" id="contact_form">
                                @csrf
                                <div class="mb-5">
                                    <div class="w-full border border-gray-400 rounded-2xl shadow-md flex px-3 items-center">
                                        <input type="text" id="fname" class="outline-none w-full py-3" placeholder="Full Name">
                                    </div>
                                    <span class="text-red-500 text-sm" id="login_error"></span>
                                </div>
                                <div class="mb-5">
                                    <div class="w-full border border-gray-400 rounded-2xl shadow-md flex px-3 items-center">
                                        <input type="email" id="email" class="outline-none w-full py-3" placeholder="Email Address">
                                    </div>
                                    <span class="text-red-500 text-sm" id="login_error"></span>
                                </div>
                                <div class="mb-5">
                                    <div class="w-full border border-gray-400 rounded-2xl shadow-md flex px-3 items-center">
                                        <input type="text" id="subject" class="outline-none w-full py-3" placeholder="Why do you want to talk to us?">
                                    </div>
                                    <span class="text-red-500 text-sm" id="login_error"></span>
                                </div>
                                <div class="mb-8">
                                    <div class="w-full border border-gray-400 rounded-2xl shadow-md flex px-3 items-center">
                                        <textarea class="w-full" id="msg" rows="4"></textarea>
                                    </div>
                                    <span class="text-red-500 text-sm" id="login_error"></span>
                                </div>
                                <div class="mb-8">
                                    <div class="w-full rounded-2xl shadow-md flex items-center">
                                        <input type="submit" id="send-mail" class="outline-none bg-green-600 rounded-2xl w-full py-3 text-white font-semibold rounded-sm cursor-pointer" value="Send Message">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
@endsection
