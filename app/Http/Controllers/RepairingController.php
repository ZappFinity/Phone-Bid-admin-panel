<?php

namespace App\Http\Controllers;

use App\Models\MobileRepairing;
use Illuminate\Http\Request;

class RepairingController extends Controller
{
    public function index()
    {
        $reqs = MobileRepairing::with('user')->get();
        return  view('menu.repairing.view', compact('reqs'));
    }

    public function accept($id)
    {
        $req = MobileRepairing::find($id);
        $req->status = 'Accepted, InProgress';
        $req->save();

        return redirect()->back()->with('success', 'Repairing Request Accepted');
    }
}
