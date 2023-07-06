<?php

use App\Models\User;

/******* Get Main Menu Name *********/
function getMainMenuName($main_menu_id)
{
    $menu_name = DB::table('mainmenus')
        ->where('id', $main_menu_id)
//        ->pluck('menuhead')
        ->first();
    return $menu_name->menuhead;
}
//to get the roles assigned
function getRoleName($id){
    $roles = User::find($id)->roles->toArray();

    return $roles[0]['display_name'];
}
?>
