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
}
