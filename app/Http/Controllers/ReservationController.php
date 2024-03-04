<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\RepositoryInterfaces\ReservationsRepositoryInterface;

class ReservationController extends Controller
{
    private $reservationRepository;

    public function __construct(ReservationsRepositoryInterface $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function create(Request $request)
    {
        // Validation rules for creating a reservation
        $rules = [
            'status' => ['required', Rule::in(['pending', 'doing', 'done'])],
            'house_id' => 'required|exists:houses,id',
            'user_id' => 'required|exists:users,id',
          
        ];

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = Auth::id();
        $reservation = $this->reservationRepository->create($validatedData);

     
        return response()->json(['message' => 'Reservation created successfully', 'reservation' => $reservation], 201);
    }


}

