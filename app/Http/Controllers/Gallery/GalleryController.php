<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('Gallery/add-images');
    }
    public function category(Request $request)
    {
//   dd($request->all());
        $data['page_no'] = $request->page- 1;
        $data['showCategory'] = CategoryModel::orderBy('id', 'desc')->Paginate(10);

        return view('Gallery/view-category',$data);

    }

    public function createCategory(Request $request)
    {
        $validate = $request->validate([
            'name'=> 'required',
            'status'=>'required',
            'priority'=>'required',
        ]);
        CategoryModel::create([
            'name'=>$request->name,
            'status'=>$request->status,
            'priority'=>$request->priority,
        ]);
        return redirect()->route('view-category')->with('success','Category Added Successfully!');

    }


    public function saveImage(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|',
            'category_id' => 'required',
            'status' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

    }
}
