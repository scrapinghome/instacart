<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function topRated()
    {
        return response()->json([
            "products" => Product::withAvg('productReviews', 'rate')
                ->orderBy('product_reviews_avg_rate', 'desc')
                ->take(6)
                ->get()
                ->map
                ->format()
        ]);
    }
}
