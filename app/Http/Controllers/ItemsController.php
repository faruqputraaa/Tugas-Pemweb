<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class ItemsController extends Controller
{
    
    public function product($id)
    {
        // Mencari item berdasarkan ID
        $product = Items::findOrFail($id); // Menggunakan Eloquent findOrFail untuk mendapatkan item

        // Mendapatkan semua item
        $items = Items::all();
        
        // Mengembalikan view dengan data produk dan semua items
        return view('product', compact('product', 'items'));
    }

    public function type(Request $request)
    {
        $type = $request->input('type');
        if ($type) {
            $items = Items::where('type', $type)->get();
        } else {
            $items = Items::all();
        }
        
        return view('beli', compact('items'));
    }

    public function userItems()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = Auth::id();

        // Mengambil semua items milik pengguna yang sedang login
        $items = Items::where('user_id', $userId)->get();

        // Mengembalikan view dengan data items pengguna
        return view('barangsaya', compact('items'));
    }

    public function destroy($id)
    {
        $item = Items::findOrFail($id);

        // Pastikan hanya pengguna yang memiliki item yang dapat menghapusnya
        if ($item->user_id == Auth::id()) {
            $item->delete();
            return redirect()->route('barangsaya')->with('success', 'Item has been deleted successfully.');
        }

        return redirect()->route('barangsaya')->with('error', 'You are not authorized to delete this item.');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'weight' => 'nullable|numeric',
            'price' => 'required|numeric',
            'phone_number' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'full_address' => 'required|string|max:255',
        ]);
        
        $item = new Items();
        $item->user_id = Auth::id();
        $item->title = $validated['title'];
        $item->type = $validated['type'];
        $item->description = $validated['description'];
        $item->weight = $validated['weight'];
        $item->price = $validated['price'];
        $item->phone_number = $validated['phone_number'];
        $item->city = $validated['city'];
        $item->district = $validated['district'];
        $item->full_address = $validated['full_address'];
        
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('items', 'public');
            $item->image_path = $imagePath;
        }
        
        $item->save();
        
        return redirect()->route('beli')->with('success', 'Product has been created successfully.');        
    }

}
