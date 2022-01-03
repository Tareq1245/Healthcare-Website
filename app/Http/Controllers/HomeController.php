<?php

namespace App\Http\Controllers;

use App\Facility;
use App\Service;
use App\Setting;
use App\Speaker;
use App\Schedule;
use App\Venue;
use App\Hotel;
use App\Gallery;
use App\Sponsor;
use App\Faq;
use App\Price;
use App\Amenity;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key');
        $speakers = Speaker::all();
        $schedules = Schedule::with('speaker')
            ->orderBy('start_time', 'asc')
            ->get()
            ->groupBy('day_number');

        $hotels = Hotel::all();
        $galleries = Gallery::all();
        $sponsors = Sponsor::all();
        $faqs = Faq::all();
        $prices = Price::with('amenities')->get();
        $amenities = Amenity::with('prices')->get();
        $services = Service::all();
        $facilities = Facility::all();

        return view('home', compact('settings', 'speakers', 'schedules', 'services', 'hotels', 'galleries', 'sponsors', 'faqs', 'prices', 'amenities', 'facilities'));
    }

    public function view(Speaker $speaker)
    {
        $settings = Setting::pluck('value', 'key');

        return view('speaker', compact('settings', 'speaker'));
    }
}
