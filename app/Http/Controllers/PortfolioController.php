<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    

public function index() {
    $items = Portfolio::latest()->get();
    return view('dashboard.index', compact('items'));
}

public function create() {
    return view('dashboard.create');
}

public function store(Request $request) {
    $data = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
        'link' => 'nullable|url',
    ]);
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('portfolio', 'public');
    }
    Portfolio::create($data);
    return redirect()->route('portfolios.index')->with('success', 'Portfolio added!');
}

public function edit($id) {
    $item = Portfolio::findOrFail($id);
    return view('dashboard.edit', compact('item'));
}

public function update(Request $request, $id) {
    $item = Portfolio::findOrFail($id);
    $data = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'nullable|image',
        'link' => 'nullable|url',
    ]);
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('portfolio', 'public');
    }
    $item->update($data);
    return redirect()->route('portfolios.index')->with('success', 'Portfolio updated!');
}

public function destroy($id) {
    $item = Portfolio::findOrFail($id);
    $item->delete();
    return redirect()->route('portfolios.index')->with('success', 'Portfolio deleted!');
}

}
