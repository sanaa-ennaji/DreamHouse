<?php

namespace App\Repositories;
use App\Models\Reservation;
use App\RepositoryInterfaces\ReservationsRepositoryInterface;


class ReservationsRepository implements ReservationsRepositoryInterface
{
    public function getAll()
    {
        return Reservation::all();
    }

    public function getById($id)
    {
        return Reservation::findOrFail($id);
    }

     public function getReservationsByUserId($userId)
    {
        return Reservation::where('user_id', $userId)->get();
    }
    public function create(array $data)
    {
        return Reservation::create($data);
    }

    public function update($id, array $data)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->update($data);

        return $reservation;
    }

    public function delete($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return $reservation;
    }
}
