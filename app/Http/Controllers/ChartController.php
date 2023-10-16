<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ip;
use App\Http\Resources\IpAllResource;

class ChartController extends Controller
{
    public function findAllIps(){
        $ips = Ip::all();
        return IpAllResource::collection(collect($ips));
    }
}
