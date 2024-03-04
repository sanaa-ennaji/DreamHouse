<?php


namespace App\RepositoryInterfaces;

interface ReservationsRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $data);
    public function getReservationsByUserId($userId);
    public function updateStatus($id, $status);
}
