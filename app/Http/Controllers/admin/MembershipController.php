<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeMembership;
use App\Models\Membership;

class MembershipController extends Controller
{
    public function index()
    {
        try {
            $memberships = Membership::all();
            return view('pages.membership', compact('memberships'));

        } catch (\Exception $e) {
            flash("Something went wrong")->error();
            return back();
        }
    }

    public function store(storeMembership $request)
    {
        try {
            $validated = $request->validated();
            $membership = Membership::create($validated);
            return view('pages.membership');
        } catch (\Exception $e) {
            flash("Something went wrong")->error();
            return back();
        }

    }
}
