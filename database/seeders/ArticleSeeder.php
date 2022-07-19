<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::insertOrIgnore($this->articles());
    }

    public function articles()
    {
        return [
            [
                'title' => 'Take a quick tour of whitelist registration for x-metaverse $xMeta IGO',
                'slug' => 'take-a-quick-tour-of-whitelist-registration-for-x-metaverse-dollarxmeta-igo',
                'brief' => 'A 3D Metaverse of Everything A 3D Metaverse of Everything',
                'content' => '<p>The CryptoCitizen Metaverse is a next-gen, AAA sandbox experience built by the QORPO dev-house with basic open world game features. You will be navigating the city from a third-person view and testing your skills across the 10 leveling zones (districts).</p><p><br></p><p>The player will progress all the way from poor suburbs to the downtown of metropolit, with each zone having its distinct visuals and is underpinned by the game&rsquo;s refined economic system. The core idea of the gameplay is to become as wealthy as possible and gain supremacy over the city. To do this you have to buy properties, build factories, skyscrapers and pursue many other activities, which can make you a big profit if you are able to manage them well.</p><p><br></p><p>The CryptoCitizen Metaverse is a next-gen, AAA sandbox experience built by the QORPO dev-house with basic open world game features. You will be navigating the city from a third-person view and testing your skills across the 10 leveling zones (districts).</p><p><br></p><p>The player will progress all the way from poor suburbs to the downtown of metropolit, with each zone having its distinct visuals and is underpinned by the game&rsquo;s refined economic system. The core idea of the gameplay is to become as wealthy as possible and gain supremacy over the city. To do this you have to buy properties, build factories, skyscrapers and pursue many other activities, which can make you a big profit if you are able to manage them well.</p>',
                'image' => '',
                'publish_at' => '2021-06-01 13:11:25',
            ],
        ];
    }
}
