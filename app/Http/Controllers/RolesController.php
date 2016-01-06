<?php namespace App\Http\Controllers;

use Bican\Roles\Models\Role;
use App\User;

class RolesController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Roles Controller
	|--------------------------------------------------------------------------
	|
	| This controller atach roles to user in database.
	|
	*/
	
	public function __construct()
	{
		$this->middleware('guest');
	}
		
	public function create_role()
	{
	 $adminRole = Role::create([
        'description' => 'adminrole',
        'level' => 1,
        'name' => 'Admin',
        'slug' => 'admin',
        ]);
	}
	public function attach_role()
	{
	  $id=1;
	  $user = User::find($id);
      $user->attachRole($id);
	}
}