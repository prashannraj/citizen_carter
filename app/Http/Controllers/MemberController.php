<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
        {
            $leftPosts = ['minister', 'head', 'secretary']; // बाँया स्तम्भमा देखाउने पदहरू
            $rightPosts = ['person', 'infoofficer']; // दायाँ स्तम्भमा देखाउने पदहरू

            $leftMembers = Member::whereIn('post', $leftPosts)->get();
            $rightMembers = Member::whereIn('post', $rightPosts)->get();

            return view('members.index', compact('leftMembers', 'rightMembers'));
        }
}
