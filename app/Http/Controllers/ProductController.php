<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index')->with([
            "products" => Product::withAvg('productReviews', 'rate')
                ->orderBy('product_reviews_avg_rate', 'desc')
                ->latest()
                ->paginate(6),
            "total" => Product::count(),
        ]);
    }
}
