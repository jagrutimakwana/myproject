<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\contact;

// now i use faker
Use Faker\Factory as faker;

class contactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // seeder
		/*
		$data=new contact;
		$data->contact_name="jagruti makwana";
		$data->mobile_no="8200336705";
		$data->email="jagrutimakwana9@gmail.com";
		$data->message="gugljh";
		$data->save();
		*/
		
		$faker= Faker::create();
		for($i=1; $i<10;$i++)
		{
	    $data=new contact;
		$data->contact_name=$faker->contact_name;
		$data->mobile_no=$faker->mobile_no;
		$data->email=$faker->email;
		$data->message="hello jagruti";
		$data->save();
		}
    }
}
