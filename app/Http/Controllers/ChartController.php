<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ip;
use App\Models\IpDetail;
use App\Http\Resources\IpAllResource;
use App\Http\Resources\IpsSmallDetails;
use DB;

class ChartController extends Controller
{
    public function findAllIps(){
        $ips = Ip::all();
        return IpAllResource::collection(collect($ips));
    }

    public function findAllIpsDetail(){
        $rows = DB::select("SELECT * 
                    FROM reputeguard.ip_details d
                        INNER JOIN ips i on i.id = d.ip_id");
        return IpsSmallDetails::collection(collect($rows));
    }
}
