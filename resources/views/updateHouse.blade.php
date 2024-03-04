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
    <style>
        #btn {
            margin: 2rem 2rem 2rem 20rem;
        }
    </style>
</head>

<body class="bg-gray-200">

<div class="m-10" >
    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
        add new house
    </h3>
        <form method="POST" action="{{ route('houses.update', ['id' => $house->id]) }}">
            @csrf
            @method('PUT')
    
            <div class="grid gap-4 mb-4 grid-cols-2">
                <div class="col-span-2 sm:col-span-1">
                    <label for="type"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">type</label>
                    <select id="type" name="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="">Select type</option>
                        <option value="Villa">Villa</option>
                        <option value="Duplex">Duplex</option>
                        <option value="studio">studio</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Cottage">Cottage</option>
                    </select>
                </div>


                <div class="col-span-2 sm:col-span-1">
                    <label for="status"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">for what</label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected="sale">sale</option>
                        <option value="rent">rent</option>

                    </select>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="city"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">city</label>
                    <select id="city" name="city"
                        class="citySelect bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option selected value="">city</option>
                        <option value="paris">paris</option>
                    </select>
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="address"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">address</label>
                    <input type="text" id="address" name="address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">

                </div>

                <div class="col-span-2 sm:col-span-1">
                    <label for="bedrooms"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bedrooms</label>
                    <input type="number" name="bedrooms" id="bedrooms"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="0" required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="bathrooms"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">bathrooms</label>
                    <input type="bathrooms" name="bathrooms" id="bathrooms"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="0" required="">
                </div>



                <div class="col-span-2 sm:col-span-1">
                    <label for="size"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">size</label>
                    <input type="number" name="size" id="size"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="0" required="">
                </div>
                <div class="col-span-2 sm:col-span-1">
                    <label for="price"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" name="price" id="price"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="$2999" required="">
                </div>
                <div class="col-span-2">
                    <label for="description"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product
                        Description</label>
                    <textarea id="description" name="description" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Write description here"></textarea>
                </div>
               
            </div>
            <button type="submit"
                class="text-white inline-flex items-center bg-black  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>
                confirm
            </button>
        </form>
    </div>
</div>
</div>
<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>


<script src="js/cities.js"></script>
</body>

</html>