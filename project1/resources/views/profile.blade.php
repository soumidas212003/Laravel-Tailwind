<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="grid place-items-center h-screen">
    <div class="rounded-3xl p-6 w-full sm:w-[350px] md:w-[950px] text-white bg-black">
        <div class=" grid grid-cols-1 md:grid-row-3 ">
            <div class="grid-cols-1 grid  p-4">
                <img src="{{asset("avatar.jpg")}}" alt="" class="w-28 h-28 rounded-full">
            </div>
            <div class="grid md:grid-cols-2 ">
                <div class=" p-2">
                    <p class=" text-lg md:text-3xl font-bold my-1">Full Name</p>
                    <p class=" text-md md:text-2xl">Ruban</p>
                </div>
                <div class="p-2 ">
                    <p class="text-lg md:text-3xl font-bold my-1">State</p>
                    <p class="text-md md:text-2xl">Pathak</p>
                </div>
            </div>
            <div class=" grid md:grid-cols-2 ">
                <div class="p-2 ">
                    <p class="text-lg md:text-3xl font-bold my-1">Email</p>
                    <p class="text-md md:text-2xl">rubanpathak706@gmail.com</p>
                </div>
                <div class="p-2 ">
                    <p class="text-lg md:text-3xl font-bold my-1">Contact Number</p>
                    <p class="text-md md:text-2xl">6289814242</p>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>