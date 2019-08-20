<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provider;
use App\Category;
use Carbon\Carbon;

class StatController extends Controller
{
    public function show($id)
    {
        $p = Provider::find($id);
        $fs = $p->favorites->where('created_at',Carbon::now()->startOfMonth());
        // dd($fs);
        
        return view('backend.estadisticas.show',['provider' => Provider::find($id)]);
    }
    public function index()
    {
        return view('backend.estadisticas.index',['providers' => Provider::all(), 'categories' => Category::all()]);
    }
    public function dashboard()
    {
        $providers = Provider::all();
        $top_providers = $providers->sortByDesc(function($provider) {
            return $provider->clicks;
        });
        $categories = Category::all();
        $top_categories = $categories->sortByDesc(function($category) {
            return $category->clicks;
        });

        return view('backend.estadisticas.dashboardstat',['providers' => $providers, 'top_providers' => $top_providers, 'categories' => $categories, 'top_categories' => $top_categories]);
    }
}
