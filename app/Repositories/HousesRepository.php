<?php


namespace App\Repositories;

use App\Models\House;
use App\RepositoryInterfaces\HousesRepositoryInterface;

class HousesRepository implements HousesRepositoryInterface
{
    // public function getAllOrderedByCity()
    // {
    //     return House::where('status', true)
    //         ->orderBy('city')
    //         ->get();
    // }

    public function getAll()
    {
        return House::all();
             
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

    public function getHousesCreatedByUser($userId)
    {
    
        return House::where('user_id', $userId)->get();
    }
    public function userOwnsHouse($userId, $houseId)
    {
       
        $house = House::where('id', $houseId)->where('user_id', $userId)->first();

        return $house !== null;
    }

    public function getReservationsForUserHouses($userId)
    {
        
        return House::where('user_id', $userId)->with('reservations')->get()->pluck('reservations')->flatten();
    }


    public function searchHouses($type, $status, $city)
    {
        $query = House::query();

        if ($type) {
            $query->where('type', $type);
        }

        if ($status) {
            $query->where('status', $status);
        }

        if ($city) {
            $query->where('city', $city);
        }

        return $query->get();
    }
}
