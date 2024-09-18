<?php

namespace Database\Seeders;

use App\Models\AirPort;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airports = [
            ['name' => 'Anaa', 'code' => 'AAA', 'stateCode' => null, 'countryCode' => 'PF', 'countryName' => 'French Polynesia'],
            ['name' => 'Annaba Les Salines', 'code' => 'AAE', 'stateCode' => null, 'countryCode' => 'DZ', 'countryName' => 'Algeria'],
            ['name' => 'Aalborg', 'code' => 'AAL', 'stateCode' => null, 'countryCode' => 'DK', 'countryName' => 'Denmark'],
            ['name' => 'Mala Mala', 'code' => 'AAM', 'stateCode' => null, 'countryCode' => 'ZA', 'countryName' => 'South Africa'],
            ['name' => 'Al Ain', 'code' => 'AAN', 'stateCode' => null, 'countryCode' => 'AE', 'countryName' => 'United Arab Emirates'],
            ['name' => 'Anapa', 'code' => 'AAQ', 'stateCode' => null, 'countryCode' => 'RU', 'countryName' => 'Russia'],
            ['name' => 'Aarhus Tirstrup', 'code' => 'AAR', 'stateCode' => null, 'countryCode' => 'DK', 'countryName' => 'Denmark'],
            ['name' => 'Altay', 'code' => 'AAT', 'stateCode' => null, 'countryCode' => 'CN', 'countryName' => 'China'],
            ['name' => 'Araxa', 'code' => 'AAX', 'stateCode' => 'MG', 'countryCode' => 'BR', 'countryName' => 'Brazil'],
            ['name' => 'Al Ghaydah', 'code' => 'AAY', 'stateCode' => null, 'countryCode' => 'YE', 'countryName' => 'Yemen'],
            ['name' => 'Abakan', 'code' => 'ABA', 'stateCode' => null, 'countryCode' => 'RU', 'countryName' => 'Russia'],
            ['name' => 'Albacete Los Llanos', 'code' => 'ABC', 'stateCode' => null, 'countryCode' => 'ES', 'countryName' => 'Spain'],
            ['name' => 'Abadan', 'code' => 'ABD', 'stateCode' => null, 'countryCode' => 'IR', 'countryName' => 'Iran'],
            ['name' => 'Allentown Bethlehem Easton Lehigh Valley Intl', 'code' => 'ABE', 'stateCode' => 'PA', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Abilene Regional Airport', 'code' => 'ABI', 'stateCode' => 'TX', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Abidjan Felix Houphouet Boigny', 'code' => 'ABJ', 'stateCode' => null, 'countryCode' => 'CI', 'countryName' => 'Ivory Coast'],
            ['name' => 'Kabri Dar', 'code' => 'ABK', 'stateCode' => null, 'countryCode' => 'ET', 'countryName' => 'Ethiopia'],
            ['name' => 'Ambler', 'code' => 'ABL', 'stateCode' => 'AK', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Bamaga', 'code' => 'ABM', 'stateCode' => 'QL', 'countryCode' => 'AU', 'countryName' => 'Australia'],
            ['name' => 'Albuquerque International', 'code' => 'ABQ', 'stateCode' => 'NM', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Aberdeen Municipal', 'code' => 'ABR', 'stateCode' => 'SD', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Abu Simbel', 'code' => 'ABS', 'stateCode' => null, 'countryCode' => 'EG', 'countryName' => 'Egypt'],
            ['name' => 'Al Baha Al Aqiq', 'code' => 'ABT', 'stateCode' => null, 'countryCode' => 'SA', 'countryName' => 'Saudi Arabia'],
            ['name' => 'Abuja International', 'code' => 'ABV', 'stateCode' => null, 'countryCode' => 'NG', 'countryName' => 'Nigeria'],
            ['name' => 'Albury', 'code' => 'ABX', 'stateCode' => 'NS', 'countryCode' => 'AU', 'countryName' => 'Australia'],
            ['name' => 'Albany Dougherty County', 'code' => 'ABY', 'stateCode' => 'GA', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Aberdeen Dyce', 'code' => 'ABZ', 'stateCode' => null, 'countryCode' => 'GB', 'countryName' => 'United Kingdom'],
            ['name' => 'Acapulco Juan Alvarez International', 'code' => 'ACA', 'stateCode' => null, 'countryCode' => 'MX', 'countryName' => 'Mexico'],
            ['name' => 'Accra Kotoka', 'code' => 'ACC', 'stateCode' => null, 'countryCode' => 'GH', 'countryName' => 'Ghana'],
            ['name' => 'Lanzarote', 'code' => 'ACE', 'stateCode' => null, 'countryCode' => 'ES', 'countryName' => 'Spain'],
            ['name' => 'Altenrhein', 'code' => 'ACH', 'stateCode' => null, 'countryCode' => 'CH', 'countryName' => 'Switzerland'],
            ['name' => 'Alderney The Blaye', 'code' => 'ACI', 'stateCode' => null, 'countryCode' => 'GB', 'countryName' => 'United Kingdom'],
            ['name' => 'Nantucket Memorial', 'code' => 'ACK', 'stateCode' => 'MA', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Achinsk', 'code' => 'ACS', 'stateCode' => null, 'countryCode' => 'RU', 'countryName' => 'Russia'],
            ['name' => 'Waco Metropolitan Area', 'code' => 'ACT', 'stateCode' => 'TX', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Eureka Arcata', 'code' => 'ACV', 'stateCode' => 'CA', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Atlantic City Intl', 'code' => 'ACY', 'stateCode' => 'NJ', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'P Zabol A', 'code' => 'ACZ', 'stateCode' => null, 'countryCode' => 'IR', 'countryName' => 'Iran'],
            ['name' => 'Adana', 'code' => 'ADA', 'stateCode' => null, 'countryCode' => 'TR', 'countryName' => 'Turkey'],
            ['name' => 'Izmir Adnan Menderes Arpt', 'code' => 'ADB', 'stateCode' => null, 'countryCode' => 'TR', 'countryName' => 'Turkey'],
            ['name' => 'Addis Ababa Bole', 'code' => 'ADD', 'stateCode' => null, 'countryCode' => 'ET', 'countryName' => 'Ethiopia'],
            ['name' => 'Aden International', 'code' => 'ADE', 'stateCode' => null, 'countryCode' => 'YE', 'countryName' => 'Yemen'],
            ['name' => 'Adiyaman', 'code' => 'ADF', 'stateCode' => null, 'countryCode' => 'TR', 'countryName' => 'Turkey'],
            ['name' => 'Amman Civil Marka Airport', 'code' => 'ADJ', 'stateCode' => null, 'countryCode' => 'JO', 'countryName' => 'Jordan'],
            ['name' => 'Adak Island NS', 'code' => 'ADK', 'stateCode' => 'AK', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Adelaide', 'code' => 'ADL', 'stateCode' => 'SA', 'countryCode' => 'AU', 'countryName' => 'Australia'],
            ['name' => 'Kodiak Airport', 'code' => 'ADQ', 'stateCode' => 'AK', 'countryCode' => 'US', 'countryName' => 'United States'],
            ['name' => 'Ardabil', 'code' => 'ADU', 'stateCode' => null, 'countryCode' => 'IR', 'countryName' => 'Iran'],
            ['name' => 'Akure', 'code' => 'AKR', 'stateCode' => null, 'countryCode' => 'NG', 'countryName' => 'Nigeria'],
            // Ajoutez plus de données ici si nécessaire
        ];

        foreach ($airports as $airport) {
            AirPort::create($airport);
        }
    }
}
