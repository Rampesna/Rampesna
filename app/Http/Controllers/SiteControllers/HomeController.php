<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettingsTableModel;
use App\Models\IncomingMessagesTableModel;
use App\Models\ServicesTableModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $services = ServicesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('home',compact('generalSettings','services'));
    }

    public function services()
    {
        $services = ServicesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('services',compact('generalSettings','services'));
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

    public function contactPost(Request $request)
    {
        $postedContactForm = true;
        $newIncomingMessage = new IncomingMessagesTableModel;
        $newIncomingMessage->name = $request->name_surname;
        $newIncomingMessage->email = $request->email;
        $newIncomingMessage->phone = $request->phone;
        $newIncomingMessage->message = $request->message;
        $newIncomingMessage->save();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('contact',compact('generalSettings','postedContactForm'));
    }
}
