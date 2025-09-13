<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ServiceController extends Controller
{
    //
    public function index()
    {

        
        // Service start date (Saturday)
       // Start date (Saturday)
        // $startDate = Carbon::create(2025, 9, 13);

        // ✅ Apni marzi ke weekdays allow karlo
        // 1 = Monday, 2 = Tuesday, 3 = Wednesday, 4 = Thursday, 5 = Friday
        // Agar Friday nahi chahiye to bas 5 hata do
        // $allowedDays = [1, 2, 3, 4]; // Monday to Thursday only

        // $days = [];
        // $count = 0;
        // $date = $startDate->copy();

        // while ($count < 25) {
        //     $date->addDay();

        //     if (in_array($date->dayOfWeekIso, $allowedDays)) {
        //         $days[] = $date->toDateString();
        //         $count++;
        //     }
        // }

        // return $days;
    }
}
