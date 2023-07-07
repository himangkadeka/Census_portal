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
    public function updateMainMenu(Request $request )
    {
        Mainmenu::where ('id',$request->id)
        ->update([
            'menuhead'=>$request->menuhead,
            'priority'=>$request->priority,
            'isactive'=>$request->isactive,
            ]);
//        return redirect()->route('route.name', [$param]);
        return redirect()->route('viewmainmenu')->with('success','Main-Menu updated Successfully');

    }
    public function destroy($id){
        Mainmenu::where('id',$id)->delete();
        return redirect()->route('viewmainmenu')->with('success','Main-Menu deleted Successfully');

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
        return redirect()->route('submenu')->with('success','Sub-Menu Added Successfully');
    }
    public function showSubMenu(){
       $viewsubmenu = submenu::all();
        return view('menu/viewsubmenu',['viewsubmenu'=>$viewsubmenu]);
    }
}
