<?php

namespace App\Http\Controllers\Page;
use App\Http\Controllers\Controller;
use App\Models\Mainmenu;
use App\Models\submenu;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        $data['mainmenu'] = $this->getMenu();
//        $data['submenu'] = $this->submenu();
//        $data['mainmenu'] = Mainmenu::all();
        return view('Page.addpage',$data);
//        return view('Page.addpage');
    }

    //get data from main menu
    public function getMenu(){

        return Mainmenu::all();
    }

    //get submenu data
    public function submenu( Request $request)
    {
       return submenu::all();
//        return view('Page/addpage');


    }
    public function savePage()
    {

    }
    public function store()
    {

    }
    public function show()
    {

    }
}
