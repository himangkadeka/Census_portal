<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class GalleryController extends Controller
{
    /******** show data in add image ********/
    /****** Pass the data in index page $result category *******/
    public function index()
    {
        $result['category'] = CategoryModel::all();
        return view('Gallery/add-images',$result);

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
        $request->validate([
            'title' => 'required|',
            'category_id' => 'required',
//            'status' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,svg|max:10',
        ]);

        $uuid = (string) Str::orderedUuid();
        $file_name = $uuid .'.'.$request->image->extension();

        $image_path = 'uploads/gallery/'.$request->category_id.'/'.$file_name;

        Storage::disk('public_path')->put('uploads/gallery/'.$request->category_id.'/'.$file_name,file_get_contents($request->image));

//        dd($image_path);

    }
}
