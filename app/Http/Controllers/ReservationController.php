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
       
        $reservation = $this->reservationRepository->create($validatedData);


        return redirect('/anonces');
    }


}

