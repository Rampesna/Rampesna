<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettingsTableModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('home',compact('generalSettings'));
    }

    public function services()
    {
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('services',compact('generalSettings'));
    }

    public function portfolio()
    {
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('portfolio',compact('generalSettings'));
    }

    public function getInTouch()
    {
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('get-in-touch',compact('generalSettings'));
    }

    public function contact()
    {
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('contact',compact('generalSettings'));
    }
}
