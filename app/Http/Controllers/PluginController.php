<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Plugin;
use Illuminate\Http\Request;

class PluginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_info = Page::where('name', 'products')->first();

        $plugins = Plugin::paginate(6);

        return view('products', compact('page_info', 'plugins'));
    }
}
