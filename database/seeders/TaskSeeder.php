<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $taken = [
            ['taak' => 'Dance The Night'],
            ['taak' => 'It Goes Like'],
            ['taak' => 'Chemical'],
            ['taak' => 'Careless Whispers'],
            ['taak' => 'There is a light that never goes out']
            ];
            DB::table('taken')->insert($taken);
    }
    }

