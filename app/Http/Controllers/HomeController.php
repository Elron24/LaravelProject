<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('form', ['items' => $items]);
    }

    public function addProduct(Request $request)
    {
        $data = [
            'product_name' => $request->productName,
            'product_brand' => $request->productBrand,
            'quantity' => $request->Quantity,
            'product_price' => $request->productPrice
        ];

        $newItem = Item::create($data);
    }

    public function editProduct(Item $item)
    {
        return view('edit', ['item' => $item]);
    }

    public function updateProduct(Item $item, Request $request)
    {
        $data = [
            'product_name' => $request->productName,
            'product_brand' => $request->productBrand,
            'quantity' => $request->Quantity,
            'product_price' => $request->productPrice
        ];

        $item->update($data);
        return redirect(route('index'));
    }

    public function deleteProduct(Item $item)
    {
        $item->delete();
        return redirect(route('index'));
    }
}
