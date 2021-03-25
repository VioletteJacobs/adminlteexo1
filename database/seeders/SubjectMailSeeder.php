<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectMailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("subject_mails")->insert([
            [
                "subject"=> " demande de devis"
            ],
            [
                "subject"=> " demande d'informations'"
            ],
            [
                "subject"=> " achat"
            ],
            [
                "subject"=> " SAV"
            ],
        ]);
    }
}
