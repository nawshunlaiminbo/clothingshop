<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = Str::uuid()->toString();
        DB::table('admins')->insert([[
            'name'=>'ShunShun',
            'email'=>'shunshun@gmail.com',
            'address'=>'North Dagon',
            'password'=>bcrypt('123456'),
            'phone'=>'09772578155',
            'role_id'=>1,
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
    
        ],
        [
            'name'=>'MinBo',
            'email'=>'minbo@gmail.com',
            'address'=>'North Okkalapa',
            'password'=>bcrypt('123456'),
            'phone'=>'09772578155',
            'role_id'=>2,
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]
    ]);
    }
    
}
