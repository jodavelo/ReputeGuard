<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ip;
use App\Models\IpDetail;

class IpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Crear un registro para la IP
        $ip = Ip::create(['address' => '13.34.37.64']);

        // Crear un registro para los detalles de esa IP
        $ip->details()->create([
            'fraud_score' => 75,
            'ip_id' => 2,
            'country_code' => 'AU',
            'region' => 'Victoria',
            'city' => 'Melbourne',
            'ISP' => 'Amazon Technologies',
            'ASN' => 16509,
            'organization' => 'Amazon Technologies',
            'is_crawler' => false,
            'timezone' => 'Australia/Melbourne',
            'mobile' => false,
            'host' => '13.34.37.64',
            'proxy' => true,
            'vpn' => true,
            'tor' => false,
            'active_vpn' => false,
            'active_tor' => false,
            'recent_abuse' => false,
            'bot_status' => false,
            'connection_type' => 'Premium required.',
            'abuse_velocity' => 'Premium required.',
            'zip_code' => 'N/A',
            'latitude' => -37.81400681,
            'longitude' => 144.96316528,
            'request_id' => 'Hl2kilXVhr'
        ]);
    }
}
