<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Create new role using Spatie Role
        // Role::Create(["name"=>"student"]);
        // Role::Create(["name"=>"educator"]);
        // Role::Create(["name"=>"company"]);


        //Create new Permission using Spatie Permission
        // Permission::Create(['name' => 'edit articles']);

      
        $permission = Permission::findById(1);


        $role = Role::findById(1);

        //give permission to role    
        // $role->givePermissionTo($permission);


        //remove permission 
        // $permission->removeRole($role);

        //give permission to user 
        // auth()->user()->givePermissionTo( $permission);

        //give role to user
        // auth()->user()->assignRole($role);

        //check the permission of user
        return auth()->user()->permissions;


       

        return view('home');
    }
}
