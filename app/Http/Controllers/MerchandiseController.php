<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MerchandiseController extends Controllers {
    public function merchandiseItemPage($merchandise_id){
        echo "菜色編號:" . $merchandise_id;
    }
}