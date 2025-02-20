<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Mobile;
use Illuminate\Http\Request;

class BiddingController extends Controller
{
    public function index()
    {
        $mobiles = Mobile::with('bids')->where('is_for_bid', true)->get();
        return  view('menu.bidding.view', compact('mobiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destory($id)
    {
        Bid::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Bid deleted successfully');
    }
    public function accept($id)
    {
        $bid = Bid::findOrFail($id);
        $bid->status = 'Accepted';
        $bid->save();
        return redirect()->back()->with('success', 'Bid Accepted successfully');
    }
    public function reject($id)
    {
        $bid = Bid::findOrFail($id);
        $bid->status = 'Rejected';
        $bid->save();
        return redirect()->back()->with('success', 'Bid Rejected successfully');
    }
}
