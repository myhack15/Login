<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use App\Models\Role;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoleController extends Controller
{
  public function showRoleNewForm()
  {
    return View::make('role.showRoleNewForm');
  }

  public function storeNewRole()
  {
    Role::create(Input::all());

    return Redirect::to(URL::previous())
      ->withSuccess('You have successfully created new role!');
  }

  public function searchRoleName($role_name)
  {
    try {
      $role = Role::where('name', '=', $role_name)
        ->firstOrFail(); 
    } catch (ModelNotFoundException $e) {
      return View::make('errors.404')
        ->withMessage('Role not found for: ' . $role_name);
    }

    return View::make('role.searchRoleName')
      ->withRole($role);
  }

  public function deleteRole($role_id)
  {
    
  }

  public function changeRoleName($role_id)
  {
    
  }
}