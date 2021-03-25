<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function cat_index() {

        $cats = Categories::all();
        return view('categories.cat_index')->with('categories', $cats);
    }

    public function cat_new() {
        return view('categories.cat_new');
    }

    public function cat_create() {
        
        $this->validate(request(),[
            'name'=>'required'
        ]);

        $data = request()->all();

        $cat = new Categories();
        $cat->name = $data['name'];
        $cat->description = '';
        $cat->save();

        session()->flash('success','Category created successfully');
        return redirect('/categories');
    }

    public function cat_edit(Categories $category) {
        return view('categories.cat_edit')->with('cat', $category);
    }

    public function cat_upd(Categories $category){

        $this->validate(request(), [
            'Name'=>'required',
            'Description'=>'required'
        ]);

        $data = request()->all();

        $category->Name = $data['Name'];
        $category->Description = $data['Description'];
        $category->save();

        session()->flash('success','Category updated successfully');
        return redirect('/categories');
    }

    public function cat_del(Categories $category) {
        $category->delete();

        session()->flash('success','Category deleted successfully');
        return redirect('/categories');
    }
}
