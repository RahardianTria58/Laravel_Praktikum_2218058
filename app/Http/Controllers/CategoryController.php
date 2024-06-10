<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.categories-entry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk_jam' => 'required',
            'jumlah_barang' => 'required',
            'harga_total' => 'required',
            'tipe_pembayaran' => 'required',
        ]);

        Category::create([
            'merk_jam' => $request->merk_jam,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_total' => $request->harga_total,
            'tipe_pembayaran' => $tipe_pembayaran,
        ]);

        return redirect('/category');
    }

    public function edit($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-edit', compact('category'));
    }

    public function update(Request $request, $id_categories)
    {
        $request->validate([
            'merk_jam' => 'required',
            'jumlah_barang' => 'required',
            'harga_total' => 'required',
            'tipe_pembayaran' => 'required',
        ]);

        $category = Category::find($id_categories);

        if ($request->hasFile('tipe_pembayaran')) {
            File::delete('img_categories/' . $category->tipe_pembayaran);
            $gambar = $request->file('tipe_pembayaran');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $tujuan_upload = 'img_categories';
            $gambar->move($tujuan_upload, $nama_gambar);
            $category->tipe_pembayaran = $nama_gambar;
        }

        $category->update([
            'merk_jam' => $request->merk_jam,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_total' => $request->harga_total,
        ]);

        return redirect('/category');
    }

    public function delete($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-hapus', compact('category'));
    }

    public function destroy($id_categories)
    {
        $category = Category::find($id_categories);
        File::delete('img_categories/' . $category->tipe_pembayaran);
        $category->delete();
        return redirect('/category');
    }
}
