<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategoriesTableModel;
use App\Models\BlogTableModel;
use App\Models\GeneralSettingsTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    public function index()
    {
        $allPosts = BlogTableModel::orderBy('created_at','DESC')->get();
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.index',compact('generalSettings','allPosts','allCategories'));
    }

    public function show($id)
    {
        try {
            $id = Crypt::decrypt($id);
        }catch (\Exception $exception){
            return abort(404);
        }
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.show',compact('generalSettings'));
    }
}
