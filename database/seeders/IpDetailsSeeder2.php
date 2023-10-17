<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ip;
use App\Models\IpDetail;

class IpDetailsSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buscar la IP en la tabla ips
        // $ip = Ip::where('address', '102.130.113.9')->first();
        $ip = Ip::create(['address' => '102.130.113.9']);

        if ($ip) {
            IpDetail::create([
                'ip_id' => $ip->id, // Asumiendo que tienes una columna ip_id como clave foránea en ip_details.
                'fraud_score' => 100,
                'country_code' => 'ZA',
                'region' => 'Western Cape',
                'city' => 'Cape Town',
                'ISP' => 'Host-Africa',
                'ASN' => 328364,
                'organization' => 'Host-Africa',
                'is_crawler' => false,
                'timezone' => 'Africa/Johannesburg',
                'mobile' => false,
                'proxy' => true,
                'vpn' => true,
                'tor' => true,
                'active_vpn' => false,
                'active_tor' => true,
                'recent_abuse' => true,
                'bot_status' => true,
                'latitude' => -33.91400146,
                'longitude' => 18.41290092,
                'request_id' => 'HoLav9URow',
                // ... otras columnas
            ]);
        }
    }
}
