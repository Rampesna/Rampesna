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
        skip(($page - 1) * 5)->
        take(5)->
        get();
        $allPostsCount = BlogTableModel::all()->count();
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.index', compact('generalSettings', 'getBlogPosts', 'allCategories', 'page', 'allPostsCount'));
    }

    public function searchPost(Request $request, $page = 1)
    {
        $getBlogPosts = BlogTableModel::
        where('title', 'like', '%' . $request->keyword . '%')->
        orWhere('content', 'like', '%' . $request->keyword . '%')->
        orderBy('created_at', 'DESC')->
        skip(($page - 1) * 5)->
        take(5)->
        get();
        $allPostsCount = BlogTableModel::
        where('title', 'like', '%' . $request->keyword . '%')->
        orWhere('content', 'like', '%' . $request->keyword . '%')->
        count();
        $keyword = $request->keyword;
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.search', compact('generalSettings', 'keyword', 'getBlogPosts', 'allCategories', 'page', 'allPostsCount'));
    }

    public function searchPage($keyword, $page)
    {
        $getBlogPosts = BlogTableModel::
        where('title', 'like', '%' . $keyword . '%')->
        orWhere('content', 'like', '%' . $keyword . '%')->
        orderBy('created_at', 'DESC')->
        skip(($page - 1) * 5)->
        take(5)->
        get();
        $allPostsCount = BlogTableModel::
        where('title', 'like', '%' . $keyword . '%')->
        orWhere('content', 'like', '%' . $keyword . '%')->
        count();
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.search', compact('generalSettings', 'keyword', 'getBlogPosts', 'allCategories', 'page', 'allPostsCount'));
    }

    public function getLikeCategory($id, $page)
    {
        $getBlogPosts = BlogTableModel::
        where('categories', 'like', '%' . $id . '%')->
        orderBy('created_at', 'DESC')->
        skip(($page - 1) * 5)->
        take(5)->
        get();
        $allPostsCount = BlogTableModel::where('categories', 'like', '%' . $id . '%')->count();
        $allCategories = BlogCategoriesTableModel::all();
        $generalSettings = GeneralSettingsTableModel::find(1);
        return view('Blog.category', compact('generalSettings', 'id', 'getBlogPosts', 'allCategories', 'page', 'allPostsCount'));
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

    public function setNewComment(Request $request)
    {
        $newComment = new BlogCommentsTableModel;
        $newComment->blog_id = $request->post_id;
        $newComment->name = $request->name_surname;
        $newComment->email = $request->email;
        $newComment->message = $request->comment;
        $newComment->save();
        return redirect()->route('blog.show',Crypt::encrypt($request->post_id));
    }
}
