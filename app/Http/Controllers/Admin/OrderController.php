<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Order\UpdateRequest;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('statuses')->orderBy('status_id')->orderByDesc('id')->get();

        return view('admin.order.index', compact('orders'));
    }

/*     public function new()
    {
        $orders = Order::with('statuses')->where('statuses.id', 1)->get();

        return view('admin.order.index', compact('orders'));
    }

    public function search()
    {

    } */

    public function edit(Order $order)
    {
        $order = Order::where('id', $order->id)->with('statuses')->with('payment')->with('user')->with('orders_products')->first();
        $statuses = Status::all();
        return view('admin.order.edit', compact('order', 'statuses'));
    }

    public function show(Order $order)
    {
        $order = Order::where('id', $order->id)->with('statuses')->with('payment')->with('user')->with('orders_products')->first();
        return view('admin.order.show', compact('order'));
    }

    public function update(UpdateRequest $request, Order $order)
    {
        $data = $request->validated();
        $order->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'address' => $data['address'],
            'description' => $data['description'],
            'status_id' => $data['status'],
            'datetime_delivery' => $data['datetime_delivery'],
        ]);

        return view('admin.order.show', compact('order'));
    }
}
