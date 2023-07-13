<?php

namespace App\Controllers;
use App\Models\UserModel;

class UserController extends BaseController
{
  
    public function index(){
        $data = [
           'pageTitle'=>'Dashboard | Home',
           'userInfo'=> session()->get('LoggedUser')
        ];
        $data = [
            'pageTitle'=>'Dashboard | Home',
            'userInfo'=> session()->get('LoggedUser')
         ];

        $model = model(UserModel::class);
        $data['users'] = $model->getUsers();
         return view('admindash/index', $data);
    }
    public function users($userid = null){
        $data = [
            'pageTitle'=>'Dashboard | Home',
            'userInfo'=> session()->get('LoggedUser')
         ];

        $model = model(UserModel::class);
        $data['users'] = $model->getUsers($userid);

        return view('lists/users',$data);

    }

}