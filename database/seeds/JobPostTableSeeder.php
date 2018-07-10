<?php

use Illuminate\Database\Seeder;

class JobPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_post')->insert([
            'payment_id' => 'P-0000001',
            'posted_by_id' => '2',
            'job_type' => 'remotely',
            'job_category' => 'Handyman',
            'status' => 'not assigned',
            'assigned_tasker_id' => '4',
            'due_date' => '02-08-2018',
            'price' => 100000,
            'address' => 'jalan yohanes xiong',
            'job_description' => 'sapuhin rumah 50 lantai saya'
        ]);
    }
}
