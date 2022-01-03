<?php

use App\Hotel;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hotels = [
            [
                'name'          => 'Our Mission',
                'description'   => 'Improving access to primary care services in underserved communities and utilizing a proffessional team approach to health care delivery are the main focuses of EmmanuelHealth Clinic.'

            ],
            [
                'name'          => 'Our Objective',
                'description'   => 'Expand and improve access to preventive services, home and community-based services, social supports, and care management.',

            ],
//            [
//                'name'          => 'Hotel 3',
//                'description'   => '0.6 Mile from the Venue',
//                'rating'        =>  3
//            ],
        ];

        foreach($hotels as $key => $hotel)
        {
            $photo_id = $key+1;
            $hotel = Hotel::create($hotel);
            $hotel->addMedia(storage_path()."/seeders/hotels/$photo_id.jpg")->preservingOriginal()->toMediaCollection('photo');
        }
    }
}
