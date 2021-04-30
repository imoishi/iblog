<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Show frontend home page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $posts = Post::where('status', 1)->latest()->paginate(12);

//        dd($posts);

        return view('frontend.home.index', compact('posts'));
    }


//    public function showSinglePost($id)
//    {
//        $post = Post::find($id);
//
////        dd($post);
//        return view('frontend.post.single', compact('post'));
//    }

    /**
     * Show single post page.
     *
     * @param Post $post
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showSinglePost(Post $post)
    {
//        dd($post);
        return view('frontend.post.single', compact('post'));
    }


    public function showCategoryPost(Category $category)
    {
        $category->load('posts');

        $posts = $category->posts()->where('status', 1)->paginate(12);

//        $posts = Post::where('status', 1)->where('category_id', $category->id)->get();

return view('frontend.home.index', compact('posts'));
    }


    /**
     * Show frontend home page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showContactPage()
    {
        return view('frontend.contact.index');
    }

    /**
     * Show frontend home page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showAboutPage()
    {
        return view('frontend.about.index');
    }

    /**
     * Show frontend home page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showServicesPage()
    {
        return view('frontend.services.index');
    }
}
