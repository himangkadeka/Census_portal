<?php

namespace App\Http\Controllers\Menu;
use App\Http\Controllers\Controller;
use App\Models\Mainmenu;
use App\Models\submenu;
use Illuminate\Http\Request;
use function Symfony\Component\Mime\Header\all;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
/** Main menu methods*/
    public function mainmenu()
    {

        return view('menu/mainmenu');
    }
    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return view('mainmenus.create');
    }

    public function store(Request $request)
    {
//        $request->validate([
//            'menuhead' => ['required', 'string'],
//            'priority' => ['required', 'integer'],
//        ]);
        Mainmenu::create([
            'menuhead' => $request->menuhead,
            'priority' => $request->priority,
            'isactive' => 1,
        ]);
//dd('hello');
        return redirect()->route('mainmenu')->with('success', 'Main-Menu added Successfully');
    }
    public function  show()
    {
        $viewmenu = Mainmenu::all();
        return view('/menu/viewmenu',['viewmenu'=>$viewmenu]);
    }

    public function editMainMenu($id)
    {
        $data['editmainmenu'] = Mainmenu:: find($id);
        return view('menu/edit-main-menu',$data);

    }

    /** Sub-menu methods */
    public function submenu(){
        /** Showing data in dropdown */
        $data['mainmenu'] = Mainmenu::all();
        return view('menu/submenu',$data);
    }
    public function createSubmenu(){
        return view('submenus.create');
    }
    public function storeSubmenu(Request $request){
        submenu::create([
            'mainmenuid'=>$request->mainmenuid,
            'submenuhead'=>$request->submenuhead,
            'priority'=>$request->priority,
            'isactive'=>1,
        ]);
        return redirect()->route('submenu')->with('success','Sub-Menu Added Succesfully');
    }
    public function showSubMenu(){
       $viewsubmenu = submenu::all();
        return view('menu/viewsubmenu',['viewsubmenu'=>$viewsubmenu]);
    }
}
