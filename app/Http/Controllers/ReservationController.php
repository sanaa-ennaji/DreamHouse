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
        $rules = [
            'house_id' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $validatedData['status'] = 'pending';

        $validatedData['user_id'] = Auth::id();

         $this->reservationRepository->create($validatedData);


        return redirect('/clientReservations');
    }

    public function index()
    {
        $userId = Auth::id();
        $reservations = $this->reservationRepository->getReservationsByUserId($userId);
        return view('clientReservations', compact('reservations'));
    }
   

    public function updateStatus(Request $request, $id)
    {
        
        $request->validate([
            'status' => 'required|in:pending,doing,done',
            
        ]);
        $reservation = $this->reservationRepository->getById($id);
        if (Auth::id() !== $reservation->user_id) {
            return redirect()->route('reservations.index')->with('error', 'Unauthorized');
        }
        $this->reservationRepository->updateStatus($id, $request->input('status'));

        return redirect()->route('reservations.index')->with('success', 'Reservation status updated successfully');
    }



}

