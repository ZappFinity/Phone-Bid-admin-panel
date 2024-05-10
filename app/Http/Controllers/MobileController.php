<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;

class MobileController extends Controller
{
    public function index()
    {
        $mobiles = Mobile::all();
        
        return view('menu.mobile.view', compact('mobiles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $mobile = new Mobile();
        $mobile->image = $request->image;
        $mobile->name = $request->name;
        $mobile->price = $request->price;
        $mobile->release_date = $request->release_date;
        $mobile->sim_support = $request->sim_support;
        $mobile->operating_system = $request->operating_system;
        $mobile->phone_weight = $request->phone_weight;
        $mobile->phone_dimensions = $request->phone_dimensions;
        $mobile->screen_size = $request->screen_size;
        $mobile->screen_resolution = $request->screen_resolution;
        $mobile->screen_type = $request->screen_type;
        $mobile->screen_protection = $request->screen_protection;
        $mobile->internal_memory = $request->internal_memory;
        $mobile->ram = $request->ram;
        $mobile->card_slot = $request->card_slot;
        $mobile->processor = $request->processor;
        $mobile->gpu = $request->gpu;
        $mobile->battery = $request->battery;
        $mobile->front_camera = $request->front_camera;
        $mobile->front_flash = $request->front_flash;
        $mobile->front_video_recording = $request->front_video_recording;
        $mobile->back_camera = $request->back_camera;
        $mobile->back_flash = $request->back_flash;
        $mobile->back_video_recording = $request->back_video_recording;
        $mobile->bluetooth = $request->bluetooth;
        $mobile->{'3G'} = $request->{'3G'};
        $mobile->{'4G/LTE'} = $request->{'4G/LTE'};
        $mobile->{'5G'} = $request->{'5G'};
        $mobile->radio = $request->radio;
        $mobile->wifi = $request->wifi;
        $mobile->nfc = $request->nfc;
        $mobile->is_new = $request->is_new;
        $mobile->save();

        return redirect()->route('mobile');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $mobile = Mobile::find($id);
        $mobile->image = $request->image;
        $mobile->name = $request->name;
        $mobile->price = $request->price;
        $mobile->release_date = $request->release_date;
        $mobile->sim_support = $request->sim_support;
        $mobile->operating_system = $request->operating_system;
        $mobile->phone_weight = $request->phone_weight;
        $mobile->phone_dimensions = $request->phone_dimensions;
        $mobile->screen_size = $request->screen_size;
        $mobile->screen_resolution = $request->screen_resolution;
        $mobile->screen_type = $request->screen_type;
        $mobile->screen_protection = $request->screen_protection;
        $mobile->internal_memory = $request->internal_memory;
        $mobile->ram = $request->ram;
        $mobile->card_slot = $request->card_slot;
        $mobile->processor = $request->processor;
        $mobile->gpu = $request->gpu;
        $mobile->battery = $request->battery;
        $mobile->front_camera = $request->front_camera;
        $mobile->front_flash = $request->front_flash;
        $mobile->front_video_recording = $request->front_video_recording;
        $mobile->back_camera = $request->back_camera;
        $mobile->back_flash = $request->back_flash;
        $mobile->back_video_recording = $request->back_video_recording;
        $mobile->bluetooth = $request->bluetooth;
        $mobile->{'3G'} = $request->{'3G'};
        $mobile->{'4G/LTE'} = $request->{'4G/LTE'};
        $mobile->{'5G'} = $request->{'5G'};
        $mobile->radio = $request->radio;
        $mobile->wifi = $request->wifi;
        $mobile->nfc = $request->nfc;
        $mobile->is_new = $request->is_new;
        $mobile->save();

        return redirect()->route('mobile');
    }

    public function destroy($id)
    {
        //
    }
}
