<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\customer;
use Hash;

//now i use faker
Use Faker\Factory as faker;

class customersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder
		/*
		$data=new customer;
		$data->firstname="jagruti";
		$data->lastname="makwana";
		$data->email="jagrutimakwana9@gmail.com";
		$data->password=Hash::make('1234');
		$data->mobile="8200336705";
		$data->address="gkhghj";
		$data->gender="Female";
		$data->languages="Hindi,English,Gujrati";
		$data->cid="1";
		$data->file=time().'_img.jpg';
		$data->save();
		*/
		
		$faker= Faker::create();
		for($i=1; $i<10;$i++)
		{
		$data=new customer;
		$data->firstname=$faker->firstname;
		$data->lastname=$faker->lastname;
		$data->email=$faker->email;
		$data->password=Hash::make($faker->password);
		$data->mobile="5896741232";
		$data->address=$faker->address;
		$data->gender="Female";
		$data->languages="Hindi,English,Gujrati";
		$data->cid="1";
		$data->file=time().'_img.jpg';
		$data->save();
    }
}
