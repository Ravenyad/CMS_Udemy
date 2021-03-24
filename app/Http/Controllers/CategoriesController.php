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

    public function cat_edit(Categories $cat) {
        return view('categories.cat_edit')->with('category', $cat);
    }

    public function cat_upd(Categories $cat){

        $this->validate(request(), [
            'name'=>'required',
            'description'=>'required'
        ]);

        $data = request()->all();

        $cat->name = $data['name'];
        $cat->description = $data['description'];
        $cat->save();

        session()->flash('success','Category updated successfully');
        return redirect('/categories');
    }

    public function cat_del(Categories $cat) {
        $cat->delete();

        session()->flash('success','Category deleted successfully');
        return redirect('/categories');
    }
}
