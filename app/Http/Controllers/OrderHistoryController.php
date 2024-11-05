<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class OrderHistoryController extends Controller
{
    public function index()
    {
        // $orders = Order::delivered()->get(); // Fetch only delivered orders
        $orders = Order::whereIn('order_status', ['Delivered', 'Cancelled'])->get();
        return view('customer.history', compact('orders'));
    }

    public function showOrderDetails($id)
    {
        // Fetch the order details by ID
        $order = Order::with('orderDetails')->findOrFail($id);

        // Update order status to 'Delivered' if it isn't already
        if ($order->order_status !== 'Delivered') {
            $order->order_status = 'Delivered';
            $order->save();
        }

        // Pass the order and its details to the view
        return view('customer.customer-order-history-details', compact('order'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('customer.history.index')->with('success', 'Order removed successfully.');
    }

    public function history()
    {
        $orders = Order::where('order_status', 'Cancelled')->get();
        return view('customer.history', compact('orders'));
    }

    public function downloadInvoice(Order $order)
    {
        $pdf = Pdf::loadView('invoices.order_invoice', compact('order'));
        return $pdf->download('invoice_' . $order->id . '.pdf');
    }


}
