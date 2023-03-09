{{-- <header class="bg-white border-b xs:border-none relative sm:border-none sticky top-0 z-50" [ngClass]="isMenuClick ? 'h-full' : ''">
    <div class="flex bg-white xs:block sm:block md:justify-center md:flex-col justify-between items-center xs:w-full sm:w-full md:w-full lg:w-11/12 md:px-3 w-4/5 mx-auto" [ngClass]="isMenuClick ? 'xs:pb-3 sm:pb-3 absolute h-full z-50' : 'transition-all duration-1000 ease-in-out'">
        <div class="flex justify-between xs:w-full sm:w-full md:w-full md:justify-center items-center py-3 xs:border-b sm:border-b xs:px-3 sm:px-3">
            <h1 class="logo font-black cursor-pointer outline-none" [routerLink]="['/']"><span class="text-2xl font-black">Arch</span><span class="text-green-700 font-black">build</span><span class="text-2xl font-black">Up</span></h1>
            <span class="xs:inline sm:inline hidden transition-all duration-1000 ease-in-out cursor-pointer" (click)="toggleMenu($event)"><mat-icon>{{ menuBtn }}</mat-icon></span>
        </div>
        <div class="xs:w-full sm:w-full xs:py-2 sm:py-2 xs:px-3 sm:px-3 md:w-4/5" [ngClass]="isMenuClick ? 'xs:block sm:block' : 'xs:hidden sm:hidden'">
            <ul class="flex xs:block sm:block justify-between xs:mt-1 sm:mt-1">
                <li class="xs:mb-2 sm:mb-2 py-2 px-3 hover:bg-gray-200 cursor-pointer flex items-center"><mat-icon>dynamic_feed</mat-icon>
                    <a href="" class="outline-none font-thin ml-1">Magazine</a>
                </li>
                <li class="xs:mb-2 sm:mb-2 py-2 px-3 hover:bg-gray-200 cursor-pointer flex items-center"><mat-icon>corporate_fare</mat-icon><a [routerLink]="['/','projects']" class="outline-none font-thin ml-1">Projects</a></li>
                <li class="xs:mb-2 sm:mb-2 py-2 px-3 hover:bg-gray-200 cursor-pointer flex items-center"><mat-icon>dashboard</mat-icon><a class="outline-none font-thin ml-1">Products</a></li>
                <li class="xs:mb-2 sm:mb-2 py-2 px-3 hover:bg-gray-200 cursor-pointer flex items-center"><mat-icon>menu_book</mat-icon><a href="" class="outline-none font-thin ml-1">News</a></li>
                <li class="xs:mb-2 sm:mb-2 py-2 px-3 hover:bg-gray-200 cursor-pointer flex items-center"><mat-icon>event_seat</mat-icon><a href="" class="outline-none font-thin ml-1">Competition</a></li>
            </ul>
        </div>
        <div class="xs:mt-2 sm:mt-2 xs:px-3 sm:px-3 xs:w-full sm:w-full flex md:justify-center md:py-5 md:w-3/5 " [ngClass]="isMenuClick ? 'xs:block sm:block' : 'xs:hidden sm:hidden'">
            <a href="" class="transition duration-500 ease-in-out text-center font-medium block xs:w-full sm:w-full xs:rounded-md sm:rounded-md md:rounded-md lg:rounded-l-xl xl:rounded-l-xl xxl:rounded-l-xl bg-gray-200 py-2 md:w-full px-5 hover:bg-gray-100 text-gray-700 hover:text-gray-900">Log in</a>
            <div class="h-4 hidden xs:block sm:block md:block md:mx-4"></div>
            <a href="" class="transition xs:w-full sm:w-full duration-500 ease-in-out bg-green-700 px-5 md:w-full xs:rounded-md sm:rounded-md md:rounded-md lg:rounded-r-xl xl:rounded-r-xl xxl:rounded-r-xl hover:bg-green-500 hover:text-gray-900 text-white py-2 block text-center font-medium">Sign up</a>
        </div>
    </div>
</header> --}}
@livewire('header')