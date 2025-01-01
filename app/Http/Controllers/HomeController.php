<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $alamPosts = Cache::remember('alamPosts', Carbon::now()->addDay(), function () {
            return Post::published()
                ->featured()
                ->whereHas('categories', function ($query) {
                    $query->where('title', 'alam');
                })
                ->with('categories')
                ->latest('published_at')
                ->take(3)
                ->get();
        });
        $buatanPosts = Cache::remember('buatanPosts', Carbon::now()->addDay(), function () {
            return Post::published()
                ->featured()
                ->whereHas('categories', function ($query) {
                    $query->where('title', 'buatan');
                })
                ->with('categories')
                ->latest('published_at')
                ->take(3)
                ->get();
        });
        $budayaPosts = Cache::remember('budayaPosts', Carbon::now()->addDay(), function () {
            return Post::published()
                ->featured()
                ->whereHas('categories', function ($query) {
                    $query->where('title', 'budaya');
                })
                ->with('categories')
                ->latest('published_at')
                ->take(3)
                ->get();
        });

        return view('home', [
            'alamPosts' => $alamPosts,
            'buatanPosts' => $buatanPosts,
            'budayaPosts' => $budayaPosts
        ]);
    }
}
