<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\RepositoryInterfaces\HousesRepositoryInterface;

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
        return view('houses', compact('house'));
    }


    public function displayhouses()
    {
        $houses = $this->houseRepository->getAll();
        return view('anonces', compact('houses'));
    }

    public function show($id)
    {
        $house = $this->houseRepository->getHouseById($id);
        return view('house', compact('house'));
    }

    public function userHouse()
    {
        $userId = Auth::id();
        $houses = $this->houseRepository->getHousesCreatedByUser($userId);
        return view('houses', compact('houses'));
    }


    public function showReservationsForUserHouses()
    {
        $userId = Auth::id();
        $reservations = $this->houseRepository->getReservationsForUserHouses($userId);

        return view('reservation', compact('reservations'));
    }


    public function destroy($id)
    {
        $house = $this->houseRepository->getHouseById($id);
        if (Auth::id() !== $house->user_id) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }
        $this->houseRepository->deleteHouse($id);
         return view('houses');
    }


    public function edit($id)
    {
       
        $house = $this->houseRepository->getHouseById($id);
        if (Auth::id() !== $house->user_id) {
            return redirect()->route('houses.index')->with('error', 'Unauthorized');
        }

        return view('updateHouse', compact('house'));
    }

    public function update(Request $request, $id)
    {
       
        $this->validateUpdate($request);
        $house = $this->houseRepository->getHouseById($id);
        if (Auth::id() !== $house->user_id) {
            return redirect()->route('houses.index')->with('error', 'Unauthorized');
        }
        $this->houseRepository->updateHouse($id, $request->all());

        return redirect()->route('houses.index')->with('success', 'House updated successfully');
    }

 
    protected function validateUpdate(Request $request)
    {
       
        $request->validate([
            'type' => 'required|string',
            'status' => 'required|in:sale,rent',
            'city' => 'required|string',
            'address' => 'required|string',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'price' => 'required|string',
            'size' => 'nullable|string',
            'description' => 'nullable|string',
           
        ]);
    }
}




