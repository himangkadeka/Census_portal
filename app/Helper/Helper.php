<?php

/******* Get Main Menu Name *********/
function getMainMenuName($main_menu_id)
{
    $menu_name = DB::table('mainmenus')
        ->where('id', $main_menu_id)
//        ->pluck('menuhead')
        ->first();
    return $menu_name->menuhead;
}

?>
