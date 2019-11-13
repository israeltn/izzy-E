<?php

use App\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => '1',
                'name'       => 'Lead',
                'created_at' => '2019-11-13 12:47:24',
                'updated_at' => '2019-11-13 12:47:24',
            ],
            [
                'id'         => '2',
                'name'       => 'Customer',
                'created_at' => '2019-11-13 12:47:24',
                'updated_at' => '2019-11-13 12:47:24',
            ],
            [
                'id'         => '3',
                'name'       => 'Partner',
                'created_at' => '2019-11-13 12:47:24',
                'updated_at' => '2019-11-13 12:47:24',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
