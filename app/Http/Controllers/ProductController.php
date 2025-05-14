<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
        return view('products.index', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'meeting_location' => 'required|string|max:255',
            'meeting_title'    => 'required|string|max:255',
            'meeting_time'     => 'required|date',
            'organized_by'     => 'required|string|max:255',
        ]);

        Product::create([
            'meeting_location' => $request->meeting_location,
            'meeting_title'    => $request->meeting_title,
            'meeting_time'     => $request->meeting_time,
            'organized_by'     => $request->organized_by,
        ]);

        return redirect()->route('products')->with('success', 'Meeting created successfully.');
    }

    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'meeting_location' => 'required|string|max:255',
            'meeting_title'    => 'required|string|max:255',
            'meeting_time'     => 'required|date',
            'organized_by'     => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            'meeting_location' => $request->meeting_location,
            'meeting_title'    => $request->meeting_title,
            'meeting_time'     => $request->meeting_time,
            'organized_by'     => $request->organized_by,
        ]);

        return redirect()->route('products')->with('success', 'Meeting updated successfully.');
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products')->with('success', 'Meeting deleted successfully.');
    }
}
