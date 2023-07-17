<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'orderid:int';
    protected $debug = true;
    protected $allowedFields = ['fly_code','customerid', 'orderstart','orderend','qty','size','orderno'];

    public function getOrders($orderids = null)
    {
        if (!$orderids) {
            return $this->findAll();
        }
    
        if (is_array($orderids)) {
            $orders = $this->whereIn('orderid', $orderids)->findAll();
            if (count($orders) !== count($orderids)) {
                return ['error' => 'One or more order IDs do not exist.']; 
            }
            return $orders;
        }
    
        $order = $this->where('orderid', $orderids)->first();
        if (!$order) {
            return ['error' => 'Order ID does not exist.'];
        }
        return [$order];
    }
}