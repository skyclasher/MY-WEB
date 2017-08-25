<?php

use Illuminate\Database\Seeder;

class SectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('d_section')->insert([
            'order' => 1,
            'title' => 'Home',
            'description' => 'Home',
            'protected' => 1,
            'IsHide' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('d_section')->insert([
            'order' => 2,
            'title' => 'About',
            'description' => 'About',
            'protected' => 1,
            'IsHide' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('d_section')->insert([
            'order' => 3,
            'title' => 'Portfolio',
            'description' => 'Home',
            'protected' => 1,
            'IsHide' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('d_section')->insert([
            'order' => 4,
            'title' => 'WETimeline',
            'description' => 'Home',
            'protected' => 1,
            'IsHide' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('d_section')->insert([
            'order' => 5,
            'title' => 'ContactMe',
            'description' => 'ContactMe',
            'protected' => 1,
            'IsHide' => 0,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
