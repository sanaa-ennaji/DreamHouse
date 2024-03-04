<!DOCTYPE html>
 <html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>house</title>
    <meta name="description">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-wq8tkB6q0xl9UgtQccNFFjbQb3fIm1aP7qT7M6dR/ZuxAP0K2L1jvpkHh+LxH5/Z" crossorigin="anonymous">
    <title>Document</title>
    <style>
       #bg{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f3f4f6;
}



    </style>
</head>

<body >
    <header>
    
        <nav class=" border-gray-200 px-4 lg:px-6 py-2.5">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center ">
                    <img src="images/lg.png" class="mr-3 h-12 sm:h-13" alt="Logo" />
                    
                </a>
                <div class="flex items-center lg:order-2">
                    <button type="button" class=" mr-20 flex items-center">
                        <div class="flex-shrink-0 w-10 h-10 relative">
                            <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                                <img class="w-10 h-8 rounded-full" src="images/pexels-binyamin-mellish-186077.jpg"
                                    alt="user photo" />
        
                            </div>
                        </div>
                        <div class="px-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">{{ auth()->user()->name }}</h2>
                            <p class="text-xs text-gray-500">{{ auth()->user()->role }}</p>
                        </div>
                    </button>
                    <button  data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>

                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0" aria-current="page">Home</a>
                        </li>
                      
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">contact</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">drivers</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-4 pl-3 text-white border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 lg:dark:hover:text-white lg:dark:hover:bg-transparent">trajets</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

   
    <div id="bg" class="antialiased bg-gray-200 font-sans">
        <form method="GET" action="{{ route('houses.search') }}"  class="ml-5">
    <div class="max-w-sm mx-auto">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">buy or rent</label>
        <select id="countries" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option value="sale" @if (request('status') == 'sale') selected @endif>Sale</option>
            <option value="rent" @if (request('status') == 'rent') selected @endif>Rent</option>
        </select>
    </div>

      <div class="max-w-sm mx-auto">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
        <select id="countries" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>Choose a country</option>
 
            <option  value="{{ request('type') == 'Villa' }}">Villa</option>
            <option value="Duplex">Duplex</option>
            <option value="{{ request('type') == 'studio' }}">studio</option>
            <option value="Apartment">Apartment</option>
            <option value="Cottage">Cottage</option>
        </select>
    </div>
      {{-- <di class="max-w-sm mx-auto">
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an option</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>Choose a country</option>
          <option value="US">United States</option>
          <option value="CA">Canada</option>
          <option value="FR">France</option>
          <option value="DE">Germany</option>
        </select>
      </form> --}}
      <button type="submit">Search</button>
    </form>
  
        @foreach ($houses as $house)
    <div>
        <div >
            <div class="max-w-sm w-full  py-6 px-3">
                <div class="bg-white shadow-xl rounded-lg overflow-hidden">
                    @foreach (json_decode($house->images) as $imagePath)
                   
               
                    <div class="bg-cover bg-center h-56 p-4" style="background-image: url({{ asset($imagePath) }})">
                        @endforeach
                        <div class="flex justify-end">
                            <h2 class="h-6 w-6 text-white fill-current">{{ $house->status }}</h2>
                           
                        </div>
                    </div>
                    <div class="p-4">
                        
                        <h2 class="uppercase tracking-wide text-xl font-bold text-gray-900">{{ $house->type }} {{ $house->size }}m</h2>
                       
                            <div class="flex-1 flex inline-flex gap-40 justify-between">
                        <p class="uppercase tracking-wide  font-bold text-gray-700">
                            <i class="fas fa-location-dot"></i> {{ $house->city }}</p>
                        <p class="text-gray-700">${{ $house->price }}</p>
                    </div>
                    </div>
                    <div class="flex p-4 border-t border-gray-300 text-gray-700">
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">3</span>{{ $house->Bedrooms }} Bedrooms</p>
                        </div>
                        <div class="flex-1 inline-flex items-center">
                            <svg class="h-6 w-6 text-gray-600 fill-current mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path>
                            </svg>
                            <p><span class="text-gray-900 font-bold">2</span>{{ $house->Bathrooms }} Bathrooms</p>
                        </div>
                    </div>
                    <div class="px-4 pt-3 pb-4 border-t border-gray-300 bg-gray-100">
                        <div class="text-xs uppercase font-bold text-gray-600 tracking-wide">owner</div>
                        <div class="flex items-center pt-2">
                            <div class="bg-cover bg-center w-10 h-10 rounded-full mr-3" style="background-image: url(https://images.unsplash.com/photo-1500522144261-ea64433bbe27?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=751&q=80)">
                            </div>
                            <div>
                                <p class="font-bold text-gray-900">{{ $house->owner->name }}</p>
                                <p class="text-sm text-gray-700">{{ $house->owner->phone }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</body>
</html>