<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Notice;
use App\Models\Service;
use App\Models\Member;
use App\Models\TurismPlace;

class FrontendController extends Controller
{
    public function index()
    {
        $company = Company::first(); // Fetch the company data
        $notices = Notice::latest()->get(); // Fetch all notices
        $services = Service::all(); // Fetch all services
        $members = Member::all(); // Fetch all members
        $ministers = Member::where('post', 'minister')->get();
        $heads = Member::where('post', 'head')->get();
        $infoofficers = Member::where('post', 'infoofficer')->get();
        $secretaries = Member::where('post', 'secretary')->get();
        $spokespersons = Member::where('post', 'person')->get();

        $turismPlaces = TurismPlace::all(); // Fetch all tourism places

        return response()->json(compact(
            'company', 
            'notices', 
            'services', 
            'members', 
            'ministers',
            'heads', 
            'infoofficers', 
            'secretaries', 
            'spokespersons', 
            'turismPlaces'
        )); // Return data as JSON response
    }
}
