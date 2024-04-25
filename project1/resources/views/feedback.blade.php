<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="flex justify-center ">
        <div class="flex py-20 ">
            <div class="border">
                <img src="{{asset("catfeedback.jpeg")}}" alt="cat" class="hidden md:block h-[33rem] w-80 shadow-lg">
            </div>
            <div class="border">
                <form action="" class="flex flex-col border-2 px-7 justify-center shadow-lg h-[33rem]">
                    <p class="my-2 font-bold text-2xl mx-auto text-orange-600 " >Submit Your Feedback</p>
                    <lable class="mt-3 font-bold">Full Name: <span class="text-red-600">*</span></lable>
                    <input type="text" class="shadow-md border-2  outline-orange-500 rounded-md px-4 h-10 w-60 " placeholder="Full Name">
                    <lable class="mt-3 font-bold">Email Address: <span class="text-red-600">*</span></lable>
                    <input type="email" class="shadow-md border-2  outline-orange-500 rounded-md px-4 h-10 w-60" placeholder="Email Address">
                    <lable class="mt-3 font-bold">Image</lable>
                    <input type="file" class="shadow-md border-2 pt-1 outline-orange-500 rounded-md px-4 h-10 w-60 ">
                    <lable class="mt-3 font-bold">Feedback <span class="text-red-600">*</span></lable>
                    <textarea name="feedback"cols="30" rows="10" class="shadow-md border-2  outline-orange-500 rounded-md px-4 h-10 w-60"></textarea> 
                    <button class="text-white bg-orange-600 hover:bg-orange-500 w-20 py-1 font-bold rounded-lg my-2 mx-auto mt-6">Submit</button>
                </form>
            </div>    
        </div>
    </div>
</body>
</html>