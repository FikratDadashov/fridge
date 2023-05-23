<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $data = ['products'=>$products];
        return view('index')->with($data);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // validate form inputs with some rules
        $request->validate([
            'name' => ['required'],
            'dom' => ['required'],
            'pd' => ['required'],
            'domd' => ['required'],
            'ed' => ['required'],
            'image' => ['required'],
        ]);
        $request->file('image')->store('/assets/uploads');

        try {
            $product = new Product();
            $product->image = $request->file('image')->hashName();
            $product->name = $request->name;
            $product->dom = $request->dom;
            $product->pd = $request->pd;
            $product->domd = $request->domd;
            $product->ed = $request->ed;
            $product->save();

            return redirect('/')->with('success', 'Product added successfully!');
        } catch (Exception $e) {
            return back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $data = ['product'=>$product];
        return view('edit')->with($data);
    }

    public function update(Request $request, $id)
    {

        // validate form inputs with some rules
        $request->validate([
            'name' => ['required'],
            'dom' => ['required'],
            'pd' => ['required'],
            'domd' => ['required'],
            'ed' => ['required'],
        ]);

        $product = Product::query()->findOrFail($id);
        $file_path = public_path() . ('/assets/uploads/' . $product->image);

        try {
            $product->name = $request->name;
            $product->dom = $request->dom;
            $product->pd = $request->pd;
            $product->domd = $request->domd;
            $product->ed = $request->ed;

            if ($request->file('image')) {
                $request->file('image')->store('/assets/uploads');
                $product->image = $request->file('image')->hashName();

                if (File::exists($file_path)) {
                    File::delete($file_path);
                }
            }

            $product->save();

            return redirect('/')->with('success', 'Product updated successfully');
        }
        catch (Exception $e) {
            return back()->with('error',"Product wasn't updated. It can be duplicate entry");
        }

    }

    public function destroy($id)
    {
        $product = Product::query()->findOrFail($id);
        $file_path = public_path() . ('/assets/uploads/' . $product->image);
        if (File::exists($file_path)) {
            File::delete($file_path);
        }
        try {
            Product::destroy($id);
            return redirect('/')->with('success', 'Product deleted successfully');
        }
        catch (Exception $e){
            return back()->with('error',"Product wasn't deleted");
        }

    }
}
