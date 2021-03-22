<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("articles")->insert([
            [
                "title" => "le soir",
                "content" => "le soir se leva sur l'aube, la plaine était encore humide des fortes pluies de la  vieille. Jeanne s'etait levée tôt pour profiter de la lumière quand elle réalisa",  
                "user_id" => 2,
            ],
            [
                "title" => "le midi",
                "content" => "James avait une faim de loup. Il entra dans le restaurant en abs de la ruelle où il avait fait la connaissance de Fred. En passant la porte, ",  
                "user_id" => 1,
            ],
            [
                "title" => "le soir",
                "content" => "Chaque matin, Pauline partait de bonne heure pour être au bureau avant ses collégues",  
                "user_id" => 2,
            ],
            
        ]);
    }
}
