<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = new Setting();
        $settings->logo = "logo/logo.svg";
        $settings->icon = "icon/icon.svg";
        $settings->site_name= "উপবৃত্তি";
        $settings->footer_name = "উপবৃত্তি.কম";
        $settings->save();
    }
}