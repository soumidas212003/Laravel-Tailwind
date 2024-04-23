<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="bg-purple-800 text-white flex justify-between">
    <div class="px-2 flex">
        <div><img src="{{asset("butterfly.png")}}" alt="butterfly" class="w-14"></div>
        <div><p class="font-normal italic pt-4">Butterfly</p></div>
    </div>
    <div>
        <ul class="flex px-2 py-2 space-x-8 font-semibold">
            <li class="cursor-pointer hover:text-rose-400">Home</li>
            <li class="cursor-pointer hover:text-rose-400">About Us</li>
            <li class="cursor-pointer hover:text-rose-400">Contact</li>
            <li class="cursor-pointer hover:text-rose-400">Help</li>
        </ul>
    </div>   
  </nav>
  <div class="bg-purple-400 h-96 flex items-center">
        <div class="text-white font-serif ">
            <p class="text-6xl italic">We will be</p> 
            <p class="text-4xl italic">Together Forever</p>
        </div>
  </div>
</body>
</html>