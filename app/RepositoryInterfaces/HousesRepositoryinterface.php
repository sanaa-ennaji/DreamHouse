<?php



namespace App\RepositoryInterfaces;



interface HousesRepositoryInterface
{
    public function  getAll();
    public function getHouseById($id);
    public function createHouse(array $data);
    public function updateHouse($id, array $data);
    public function deleteHouse($id);
    public function userOwnsHouse($userId, $houseId);
    public function getReservationsForUserHouses($userId);
    public function getHousesCreatedByUser($userId);
}

