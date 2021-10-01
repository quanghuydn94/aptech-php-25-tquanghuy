<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->rolename == 'admin' || Auth::user()->rolename == 'employee') {
            $products = Products::all();
            return response()->view('Product.index', ['products' => $products]);

        } else {
            Auth::logout();
            return view('admin');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->rolename == 'admin') {
            $users = User::all();
            $categories = Categories::all();
            return response()->view('Product.add',
                [
                    'users' => $users,
                    'categories' => $categories,
                ]);

        } else {
            Auth::logout();
            return response()->view('admin');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->rolename == 'admin') {
            $validate = Validator::make(
                $request->all(),
                [
                    'name' => 'required|max:25',
                    'description' => 'required|max:255',
                    'image' => 'required',
                    'price' => 'required|numeric',
                ],
                [
                    'required' => ':attribute do not leave Blank!',
                    'max' => ':attribute do not more than :max ',
                    'mimes' => 'have to be jpeg,png,jpg,gif,svg',
                    'numeric' => 'only numeric ',
                ]);

            if ($validate->fails()) {
                return redirect()->route('product.create')->withErrors($validate);
            }

            $product = new Products;
            $product->name = $request->input('name');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/product/', $filename);
                $product->image = $filename;

            }

            $product->userid = $request->input('userid');
            $product->categoryid = $request->input('categoryid');

            $product->save();
            return redirect()->route('product')->with('success', 'Your product created successfully');

        } else {
            Auth::logout();
            return response()->view('admin');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->rolename == 'admin' || Auth::user()->rolename == 'employee') {
            $users = User::all();
            $categories = Categories::all();
            $product = Products::find($id);
            return response()->view('Product.edit',
                [
                    'category' => $categories,
                    'users' => $users,
                    'product' => $product,
                ]);

        } else {
            Auth::logout();
            return response()->view('admin');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->rolename == 'admin' || Auth::user()->rolename == 'employee') {
            $product = Products::where('Id', '=', (int) $id)->get()->first();

            $validate = Validator::make(
                $request->all(),
                [
                    'name' => 'max:25',
                    'description' => 'max:255',
                    'image' => 'required',
                    'price' => 'numeric',
                ], [
                    'max' => ':attribute do not more than :max ',
                    'required' => 'do not leave blank',
                    'numeric' => 'only numeric ',
                ]
            );

            if ($validate->fails()) {
                return redirect()->route('product.edit', $product->id)->withErrors($validate);
            } else {
                $product = Products::where('Id', '=', (int) $id);

                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/product/', $filename);

                $product->update([

                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'image' => $filename,
                    'price' => $request->input('price'),

                ]);
                return redirect()->route('product')->with('updated', 'Your info product updated ');
            }

        } else {
            Auth::logout();
            return response()->view('admin');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->rolename == 'admin') {
            Products::where('Id', '=', (int) $id)->delete();
            return redirect()->action([ProductController::class, 'index']);

        } else {
            Auth::logout();
            return response()->view('admin');
        }

    }
}
