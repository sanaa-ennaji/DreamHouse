 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
   <style>
    
   </style>

    <title>Document</title>
 </head>
 <body>
    
<div class="min-h-screen  text-gray-900 flex justify-center">
    <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
        <div class="w-full bg-contain  bg-no-repeat"
            style="background-image: url('images/pexels-terry-magallanes-2635038.jpg'); ">
        </div>
    </div>
    <div class="flex items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <div class="text-slate-100 items-center">
                <img src="images/lg.png" alt="" class="h-15 w-16 mx-auto pb-3">
               <div class="text-center pb-3 text-black text-2xl font-bold ">DreamHouse</div>
            </div>
            <form method="POST" action="/OwnersRegister">
              @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>

                <div class="-mx-3 flex flex-wrap">
                   
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                                email
                            </label>
                            <input type="email" name="email" id="email" placeholder="name00@gmail.com"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                              password
                            </label>
                            <input type="text" name="password" id="password" placeholder="********"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                               phone number
                            </label>
                            <input type="text" name="phone" id="phone" placeholder="+212 18264783"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="address" class="mb-3 block text-base font-medium text-[#07074D]">
                                adress
                            </label>
                            <input type="text" name="address" id="address" placeholder="your adress"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
        
                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-black py-3 px-8 text-center text-base font-semibold text-white outline-none">
                       Resgister
                    </button>
                </div>
            </form>
            <div class="mt-6 text-blue-500 text-center">
                <a href="/login" class="hover:underline">log in here</a>
              </div>
        </div>
    </div>
      
    </div>



</body>
</html>