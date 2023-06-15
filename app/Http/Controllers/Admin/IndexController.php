<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $orders = count(Order::where('status_id', 1)->get());

        $users = count(User::where('position_id', 1)->get());

        $startDate = (new \DateTime())->sub(new \DateInterval('P7D'));
        $endDate = new \DateTime();
        $cash = Order::whereBetween('created_at', [$startDate, $endDate])->sum('total_price');

        $products = count(Product::where('count', '<', 1)->get());

        return view('admin.index', compact('user', 'orders', 'users', 'cash', 'products'));
    }
}
