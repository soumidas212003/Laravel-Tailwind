<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    {{-- navbar --}}
    <div class="navbar flex justify-between items-center p-2 border">
        <div class="logo">
          <img src="{{asset('Images/FureverFamilyFinder.png')}}" class="h-10 w-40" alt="">
        </div>
        <div class="Account-Info md:order-3">
          <a href=""><svg class="h-10 w-10 text-red-500 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg></a>
    
          <button
            class="h-10 w-40 border rounded-full hidden md:block bg-orange-500 text-white text-white-500 font-bold hover:bg-orange-600 focus:bg-orange-600 transition-colors duration-300"><a href="">Login</a></button>
    
        </div>
        <div class="hamburger flex items-center md:order-2 " id="hamburger-menu">
          <svg class="h-8 w-8 text-black-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="21" y1="10" x2="3" y2="10" />
            <line x1="21" y1="6" x2="3" y2="6" />
            <line x1="21" y1="14" x2="3" y2="14" />
            <line x1="21" y1="18" x2="3" y2="18" />
          </svg>
          <p class="ml-2 hidden sm:block font-bold">Menu</p>
        </div>
      </div>
      <div id="menu-overlay" class="hidden fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-75 z-50">
        <div class="absolute top-0 right-0 p-4">
          <button id="close-menu" class="text-white text-2xl">&times;</button>
        </div>
        <div class="flex flex-col justify-center items-center h-full">
          <!-- Your menu items here -->
          <a href="" class="text-white text-xl my-4">Home</a>
          <a href="" class="text-white text-xl my-4">About Us</a>
          <a href="#" class="text-white text-xl my-4">Login</a>
          <a href="#" class="text-white text-xl my-4">Feedback</a>
          <a href="" class="text-white text-xl my-4">Admin Login</a>
        </div>
      </div>
    {{-- second --}}
    <div class="flex justify-center ">
        <div class="flex py-20 ">
            <div>
                <img src="{{asset("cat.jpg")}}" alt="cat" class="hidden md:block">
            </div>
            <div>
                <form action="" class="flex flex-col border-2 px-16 py-[3.1rem] justify-center shadow-md">
                    <p class="my-2 font-bold text-2xl mx-auto text-orange-600">Login As Pet Adopter</p>
                    <lable class="my-4 font-bold">Email Address:</lable>
                    <input type="email" class="shadow-md border-2 my-2 outline-orange-500 rounded-md px-4 h-12" placeholder="Email Address">
                    <lable class="my-2 font-bold">Password:</lable>
                    <input type="password"  class="shadow-md border-2 my-2 outline-orange-500 rounded-md px-4 h-12" placeholder="Password">
                    <button class="text-white bg-orange-600 hover:bg-orange-500 w-16 py-1 font-bold rounded-lg my-2 mx-auto">Verify</button>
                    <p class="font-bold text-sm my-8">DON'T HAVE AN ACCOUNT? <span class="text-blue-500 cursor-pointer hover:text-blue-400">SIGN UP</span></p>
                </form>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div class="footer flex flex-col justify-between items-center px-20 space-y-14 bg-[#18273c] lg:flex-row lg:space-y-0 lg:px-64">
        <div class="one flex flex-col justify-between items-center space-y-5 py-6">
          <img src="{{asset('Images/FureverFamilyFinder.png')}}" alt="" class="h-10 w-80 mt-10 ">
          <a href="#" class="text-sm font-bold text-white">Adopt Pet</a>
          <a href="#" class="text-sm font-bold text-white">About Us</a>
          <a href="#" class="text-sm font-bold text-white">Login</a>
        </div>
        <div class="three flex flex-col justify-between items-center space-y-5">
          <h1 class="text-3xl font-extrabold text-white">Social</h1>
          <a href="#"><img src="{{asset('Images/facebook.png')}}" alt="" class="h-5 w-5"></a>
          <a href="#"><img src="{{asset('Images/linkedin.png')}}" alt="" class="h-5 w-5"></a>
        </div>
      </div>
    
      <div class="last flex flex-col justify-between items-center py-5 bg-[#242d62] space-y-6 lg:flex-row lg:space-y-0 lg:px-8">
        <p class="text-white">© Kolkata, India</p>
        <p class="text-center text-white">Furever Family Finder Online Pvt Ltd © 2024, All Rights Reserved</p>
      </div>
</body>
</html>