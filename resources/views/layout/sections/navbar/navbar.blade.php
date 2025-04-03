<nav class="bg-blue-500 h-screen w-28 text-white p-5 align-content-center hidden lg:block">
    <div id="logo" class="mb-5 mt-3 flex justify-center">
        <img src="{{ asset('storage/images/logo/ChatApp.png') }}" class="w-22 h-22 object-cover mx-auto">
    </div>
    <ul class="space-y-5 flex-1">
        <li class="p-2">
            <a href="#" class="p-3 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fas fa-user fa-xl"></i>
            </a>
        </li>
        <li class="p-2">
            <a href="#" class="p-3 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fa-solid fa-address-book fa-xl"></i>
            </a>
        </li>
        <li class="p-2">
            <a href="#" class="p-3 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fa-solid fa-book-bookmark fa-xl "></i>
            </a>
        </li>
        <li class="p-2">
            <a href="#" class="p-3 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fa-solid fa-gear fa-xl hover:animate-spin"></i>
            </a>
        </li>
    </ul>
    <div class="absolute bottom-0 mb-1">
        {{-- <div class="p-2">
            <a href="#" class="p-3 rounded-full">
                <i class="fa-solid fa-moon fa-xl"></i>
            </a>
        </div> --}}
        <div class="mt-4">
            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="absolute inset-1.5"></span>
                <img class="size-16 rounded-full" src="{{ asset('storage/images/profile/gojo.jpeg') }}" alt="">
            </button>
        </div>

        {{-- <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
            <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
        </div> --}}
    </div>
</nav>
<nav class="block lg:hidden bg-blue-500 h-24 w-full text-white p-5 align-content-center fixed bottom-0 left-0 z-10 rounded-xl">
    <ul class="space-y-5 flex-1 flex justify-between">
        <li class="p-1">
            <a href="#" class="p-2 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fas fa-user fa-xl"></i>
            </a>
        </li>
        <li class="p-1">
            <a href="#" class="p-2 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fa-solid fa-address-book fa-xl"></i>
            </a>
        </li>
        <li class="p-1">
            <a href="#" class="p-2 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fa-solid fa-book-bookmark fa-xl "></i>
            </a>
        </li>
        <li class="p-1">
            <a href="#" class="p-2 rounded-full hover:bg-gray-200 hover:scale-110 transition-all duration-300 flex justify-center items-center w-14 h-14 hover:text-blue-500">
                <i class="fa-solid fa-bars fa-xl"></i>
            </a>
        </li>
    </ul>
</nav>
