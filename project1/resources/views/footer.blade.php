<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div>
    <div class=" grid grid-cols-3 py-8 bg-blue-950 text-white font-semibold">
      <div class=" grid-rows-5 grid justify-items-center gap-3">
        <div class=" text-center">Furever Family Finder</div>
        <div>Adopt Pet</div>
        <div>Donate Pet</div>
        <div>About Us</div>
        <div>Login</div>
      </div>
      <div class=" grid-rows-4 grid justify-items-center gap-3">
        <div>Policy</div>
        <div class="text-center">Privacy Policy</div>
        <div class="text-center">Cancellation Policy</div>
        <div class="text-center">Terms & Conditions</div>
      </div>
      <div class=" grid-rows-3 grid justify-items-center gap-3">
        <div class="text-center">Social Media</div>
        <div><img src="{{ asset("facebook.png")}}" alt="" class="w-8 h-8"></div>
        <div><img src="{{ asset("linkedin.webp")}}" alt="" class="w-14 h-14"></div>
      </div>
    </div>
    <div class="h-12 md:flex justify-between bg-blue-900 text-white hidden pt-2">
      <div>© Kolkata, India</div>
      <div>Furever Family Finder Online Pvt Ltd © 2024, All Rights Reserved</div>
    </div>
  </div>
</body>
</html>