<?php



namespace App\RepositoryInterfaces;

interface HousesRepositoryInterface
{
    public function getAllOrderedByCity();
    public function getHouseById($id);
    public function createHouse(array $data);
    public function updateHouse($id, array $data);
    public function deleteHouse($id);
}
