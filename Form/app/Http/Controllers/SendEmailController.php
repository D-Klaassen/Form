<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    //
    function index()
    {
        return view('send_email');
    }

    public function store(Request $request)
    {
        $order = Order::findOrFail($request->order_id);

        Mail::to(djhon5374@gmail.com)->send(new OrderShipped($order));
    }
}
