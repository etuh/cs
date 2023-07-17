<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table      = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'img_name','price1','price2'];

    public function getServices($id = null)
    {
        if (!$id){
            return $this->findAll();
        }
        return $this->where('id',$id)->findAll();
    }
	public function addService($data)
	{
		$arr =[
		'name' => $data['name'],
		'description' => $data['description'],
		'price1' => $data['price1'],
		'price2' => $data['price2'],
		];
        return $this->insert($arr);

	}
	
}