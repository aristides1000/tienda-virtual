<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CategoryProduct;

class CategoryProductController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = $request->get('category');
        $categories = CategoryProduct::orderBy('id', 'DESC')->paginate();

        return view('user.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryProduct::orderBy('category_product', 'ASC')->pluck('category_product', 'id');

        return view('user.categories.create',compact('category'));   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = CategoryProduct::create($request->all());
        
        return redirect()->route('categories.create', $category->id)->with('info', 'Categoria creada con éxito');  
          }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = CategoryProduct::find($id);

        return view('user.categories.show', compact('category'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryProduct::find($id);

        return view('user.categories.edit', compact('category'));
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
         $category = CategoryProduct::find($id);

        $category->fill($request->all())->save();

        return redirect()->route('categories.edit', $category->id)->with('info', 'Categoria actualizada con éxito');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category = CategoryProduct::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');    }
}
