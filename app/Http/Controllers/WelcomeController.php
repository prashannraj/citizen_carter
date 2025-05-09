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
        $members = Member::all(); // 🔸 Member model बाट सबै data ल्याउने
        $ministers = Member::where('post', 'minister')->get();
        $heads = Member::where('post', 'head')->get();
        $infoofficers = Member::where('post', 'infoofficer')->get();
        $secretaries = Member::where('post', 'secretary')->get();
        $spokespersons = Member::where('post', 'person')->get();

        $turismPlaces = TurismPlace::all(); // 🔸 TurismPlace model बाट सबै data ल्याउने
        return view('welcome', compact('company', 'notices', 'services', 'members', 'ministers',
          'heads', 'infoofficers', 'secretaries', 'spokespersons', 'turismPlaces')); // 🔸 welcome.blade.php मा data पठाउने
    }
}

