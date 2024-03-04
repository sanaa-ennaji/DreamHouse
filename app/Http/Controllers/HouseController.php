<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\RepositoryInterfaces\HousesRepositoryInterface;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class HouseController extends Controller
{
    private $houseRepository;

    public function __construct(HousesRepositoryInterface $houseRepository)
    {
        $this->houseRepository = $houseRepository;
    }
   
public function createHouse(Request $request)
{
    $rules = [
        'type' => 'required|string',
        'status' => ['required', Rule::in(['sale', 'rent'])],
        'city' => 'required',
        'address' => 'required|string',
        'bedrooms' => 'required|integer',
        'bathrooms' => 'required|integer',
        'price' => 'required|string',
        'size' => 'nullable|string',
        'description' => 'nullable|string',
        'images' => 'nullable|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif', 
    ];

    $validatedData = $request->validate($rules);

    
    $imagePaths = [];
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('public/images');

         
            $imagePaths[] = Storage::url($path);
        }
    }

    $validatedData['images'] = json_encode($imagePaths);

   
    $validatedData['user_id'] = Auth::id();
    
    $house = $this->houseRepository->createHouse($validatedData);

    // return response()->json(['message' => 'House created successfully', 'house' => $house], 201);
    return view('houses');
}
  
public function display()
{
  
    $houses = $this->houseRepository->getAllOrderedByCity();

    return view('anonces', compact('houses'));
}

}

