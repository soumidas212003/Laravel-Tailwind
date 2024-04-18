<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <nav class="bg-purple-900 text-white flex justify-between italic text-2xl">
    <div class="flex flex-col items-center pl-4">
      <img src="{{asset("butterfly.png")}}" alt="bird" class="w-14 rounded-3xl p-0">
      <h6 class="italic text-white text-sm">Butterfly</h6>
    </div>
    
    <ul class="px-28 space-x-11 flex justify-end">
      <li class="p-2 cursor-pointer hover:text-red-600">Home <i class="fa-solid fa-caret-down dropdown-icon"></i>
      <ul class="hidden absolute bg-white rounded-md shadow-lg mt-2 w-40 py-4 px-12 space-y-2">
        <li class="text-black">Item1</li>
        <li class="text-black">Item2</li>
        <li class="text-black">Item3</li>
      </ul>
      </li>
      <li class="p-2 cursor-pointer hover:text-red-600">About</li>
      <li class="p-2 cursor-pointer hover:text-red-600">Contact Us</li>
      <li class="p-2 cursor-pointer hover:text-red-600">Help</li>
    </ul>
  </nav>
  <script>
    document.querySelectorAll(".dropdown-icon").forEach(item =>{
      item.addEventListener('click',event =>{
        const dropdownMenu=item.nextElementSibling
        dropdownMenu.classList.toggle('hidden')
      });
    });
      
  </script>
</body>
</html>