<?php namespace App\Controllers;

use App\Models\ServiceModel;


class Orders extends BaseController
{
    public function index()
    {
        $model = new ServiceModel();
        $data['service'] = $model->getServices();

        return view('home/index',$data);
    }

}