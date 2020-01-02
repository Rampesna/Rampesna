<?php

namespace App\Http\Controllers\SiteControllers;

use App\Http\Controllers\Controller;
use App\Models\BlogCategoriesTableModel;
use App\Models\BlogCommentsTableModel;
use App\Models\BlogTableModel;
use App\Models\GeneralSettingsTableModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BlogController extends Controller
{
    public function index($page = 1)
    {
        $getBlogPosts = BlogTableModel::
        orderBy('created_at', 'DESC')->
        skip(($page - 1) * 10)->
        take(10)->
        get();
        $allPostsCount = BlogTableModel::all()->count();
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.index', compact('generalSettings', 'getBlogPosts', 'allCategories', 'page', 'allPostsCount'));
    }

    public function show($id)
    {
        try {
            $id = Crypt::decrypt($id);
        } catch (\Exception $exception) {
            return abort(404);
        }
        $post = BlogTableModel::find($id);
        $postComments = BlogCommentsTableModel::where('blog_id', $id)->get();
        $postCategories = explode(",", $post->categories);
        $categoryList = [];
        foreach ($postCategories as $category) {
            $categoryList[] = BlogCategoriesTableModel::where('id', $category)->first();
        }
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.show', compact('generalSettings', 'post', 'postComments', 'categoryList'));
    }

    public function search(Request $request, $page = 1)
    {
        $getSearchedBlogPosts = BlogTableModel::
        where('title', 'like', '%' . $request->search_keyword . '%')->
        orWhere('content', 'like', '%' . $request->search_keyword . '%')->
        orderBy('created_at', 'DESC')->
        get();
        $allPostsCount = count($getSearchedBlogPosts);
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.search', compact('generalSettings', 'getSearchedBlogPosts', 'allCategories', 'page', 'allPostsCount'));
    }
}
