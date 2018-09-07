<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category)
    {
        return view(
            'products.index',
            ['products' => Product::where('category_id', $category)->paginate(15)]
        );
    }
}
