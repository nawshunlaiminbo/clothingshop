<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $uuid = Str::uuid()->toString();
        DB::table('sizes')->insert([[
            'name'=>'XS',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'S',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'M',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'L',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'XL',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'2XL',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'3XL',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
        [
            'name'=>'4XL',
            'uuid'=>$uuid,
            'status'=>'Active',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ],
    ]);
    }
}
