<?php

namespace App\Http\Controllers\Goods;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;

class GoodsController extends Controller
{
    //
    public function index()
    {
        $res = GoodsModel::where(['shop_price' => 5])->first();
//        dd($res);
        return view('goods.index',['goods'=>$res]);
    }
}
