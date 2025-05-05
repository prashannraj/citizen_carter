<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Member;
use App\Models\TurismPlace;

class WelcomeController extends Controller
{
    public function index()
    {
        $company = Company::first(); // Fetch the company data
        $notices = Notice::latest()->get(); // 🔸 Notice model बाट सबै data ल्याउने
        $services = Service::all(); // ✅ सेवा डाटा ल्याउने // 🔸 Service model बाट सबै data ल्याउने
        $members = Member::latest()->get(); // 🔸 Member model बाट सबै data ल्याउने
        $turismPlaces = TurismPlace::all(); // 🔸 TurismPlace model बाट सबै data ल्याउने
        return view('welcome', compact('company', 'notices', 'services',  'turismPlaces')); // 🔸 welcome.blade.php मा data पठाउने
    }
}

