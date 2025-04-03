@extends('layout.app')

@section('title', 'Home')

@section('content')
<section class="w-full lg:w-160 h-screen bg-gray-100 dark:bg-gray-900">
    <div class="p-10">
        <h3><span class="font-simebold text-2xl mr-2 dark:text-white">Messages</span> <span class="text-blue-400 text-md">(12)</span></h3>
        <div class="relative mt-5 mb-2">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-600 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full p-3 ps-10 text-xl text-gray-900 border border-gray-300 rounded-lg bg-white placeholder:text-gray-600" placeholder="Search here..." required />
        </div>
    </div>
    <div class="h-[70%]">
        <ul class="px-10 pb-20 md:px-10 md:pb-0 relative overflow-y-auto h-[100%] z-1 overscroll-y-contain [&::-webkit-scrollbar]:w-[0.8px] [&::-webkit-scrollbar-track]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/gojo.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/gojoSaturo.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/Nami.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/Nobara.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/robin.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/yuta.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/Lucy.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/Hancock.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>
            <li class="pb-5">
                <button class="cursor-pointer">
                    <div class="flex items-center space-x-3">
                        <div class="relative">
                            <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/zoro.jpeg') }}" alt="">
                            <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
                        </div>
                        <div class="flex items-start flex-col">
                            <h4 class="text-lg dark:text-white">Name</h4>
                            <p class="text-gray-400 text-start">Lorem ipsum dolor sit amet consectetur</p>
                        </div>
                    </div>
                </button>
            </li>

        </ul>
    </div>
</section>
<section class="w-full h-screen bg-white dark:bg-gray-800 hidden lg:block">
    <header class="p-6 flex justify-between items-center border-b border-gray-200 dark:border-gray-700">
        <div class="flex items-center space-x-3">
            <div class="relative">
                <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/gojo.jpeg') }}" alt="">
                <span class="absolute bottom-0 right-0 block h-4 w-4 rounded-full border-2 border-white bg-green-500"></span>
            </div>
            <div class="flex items-start flex-col">
                <h4 class="text-xl font-semibold dark:text-white">Name</h4>
                <span class="text-gray-400 text-md">Online</span>
            </div>
        </div>
        <div class="flex items-center space-x-8 text-gray-500">
            <button class="hover:text-gray-900 dark:hover:text-gray-300">
                <i class="fa-solid fa-search fa-xl"></i>
            </button>
            <button class="hover:text-gray-900 dark:hover:text-gray-300">
                <i class="fa-solid fa-phone fa-xl"></i>
            </button>
            <button class="hover:text-gray-900 dark:hover:text-gray-300">
                <i class="fa-solid fa-video fa-xl"></i>
            </button>
            <button class="hover:text-gray-900 dark:hover:text-gray-300">
                <i class="fa-solid fa-book-bookmark fa-xl"></i>
            </button>
            <button class="hover:text-gray-900 dark:hover:text-gray-300">
                <i class="fas fa-info-circle fa-xl"></i>
            </button>
            <button class="hover:text-gray-900 dark:hover:text-gray-300">
                <i class="fas fa-cog fa-xl hover:animate-spin"></i>
            </button>
        </div>
    </header>
</section>
@endsection
