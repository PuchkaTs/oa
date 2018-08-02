<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\User;
use App\Role;
use Request;


class UsersController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->only('show', 'passwordShow');
    }

    public function ncst()
    {
        return view('admin.superAdmin');
    }

    public function ncst_store()
    {
        if ((Request::get('password') == '*newmoon89') and (! User::whereName('Purevdorj')->count()))
        {
            $role = Role::create([
                'name' => 'super_admin'
            ]);


            $user =  new User([
                'email'    => 'ncst.puje@gmail.com',
                'name'     => 'Purevdorj',
                'password' => '*newmoon89*'
            ]);
            $role->users()->save($user);

            return Redirect::to('/admin');
        } else
        {
            return Redirect::to('/');
        }
    }
}
