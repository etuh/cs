<?php namespace App\Controllers;

use App\Models\ServiceModel;


class Service extends BaseController
{
    public function index()
    {
        $model = new ServiceModel();
        $data['service'] = $model->getServices();

        return view('home/index',$data);
    }
    public function detail($id)
    {
        $model = new ServiceModel();
        $data['service'] = $model->getServices($id);
    }
}

