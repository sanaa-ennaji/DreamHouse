<?php


namespace App\Repositories;

use App\Models\House;
use App\RepositoryInterfaces\HousesRepositoryInterface;

class HousesRepository implements HousesRepositoryInterface
{
    // public function getAllHouses()
    // {
    //     return House::all();
    // }

    public function getAllOrderedByCity()
    {
        return House::where('status', true)
            ->orderBy('city')
            ->get();
    }
    public function getHouseById($id)
    {
        return House::findOrFail($id);
    }

    public function createHouse(array $data)
    {
        return House::create($data);
    }

    public function updateHouse($id, array $data)
    {
        $house = House::findOrFail($id);
        $house->update($data);

        return $house;
    }

    public function deleteHouse($id)
    {
        $house = House::findOrFail($id);
        $house->delete();

        return $house;
    }
}