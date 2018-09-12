<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Popup;

use App\Models\Campaign;

class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thePopup = Popup::where('publish_until', '>=', todayWithFormat('Y-m-d'))
            ->where('publish', true)->orWhere('publish_until', null)
            ->where('publish_at', '<=', todayWithFormat('Y-m-d'))
            ->where('publish', true)
            ->orderBy('position', 'ASC')
            ->first();
        return view('index',compact('thePopup'));
    }

    public function rooms()
    {
        return view('rooms.index');
    }

    public function cornerSuite()
    {
        return view('rooms.corner-suite');
    }

    public function deluxeRoom()
    {
        return view('rooms.deluxe-room');
    }

    public function executiveSuite()
    {
        return view('rooms.executive-suite');
    }

    public function superiorRoom()
    {
        return view('rooms.superior-room');
    }

    public function restaurants()
    {
        return view('restaurants.index');
    }

    public function garden()
    {
        return view('restaurants.garden');
    }

    public function lobby()
    {
        return view('restaurants.lobby');
    }

    public function health()
    {
        return view('health.index');
    }

    public function fitness()
    {
        return view('health.fitness');
    }

    public function spa()
    {
        return view('health.spa');
    }

    public function organizations()
    {
        return view('organizations.index');
    }

    public function meetings()
    {
        return view('organizations.meetings');
    }

    public function weddings()
    {
        return view('organizations.weddings');
    }

    public function campaigns()
    {
        $campaigns=Campaign::where('publish',true)->orderBy('position')->get();
        return view('campaigns',compact('campaigns'));
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function about()
    {
        return view('about');
    }

    public function location()
    {
        return view('location');
    }

    public function news()
    {
        return view('news.index');
    }

    public function greenStar()
    {
        return view('news.static.green-star-award');
    }

    public function peacePatch()
    {
        return view('news.static.peace-patch-festival');
    }

    public function susanKardes()
    {
        return view('news.static.susan-kardes');
    }

    public function weddingNews()
    {
        return view('news.static.wedding-news');
    }
}
