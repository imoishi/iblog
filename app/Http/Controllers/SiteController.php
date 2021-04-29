<?php

namespace App\Http\Controllers;

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
        $posts = Post::where('status', 1)->latest()->get();

//        dd($posts);

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
