<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->truncate();
        DB::table('games')->insert([
            [
                'id'=>1,
                'name'=>'Detroit:Become Humand',
                'price'=>60,
                'images'=>'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg',
                'categoryId'=>1,
            ],
            [
                'id'=>2,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
                'categoryId'=>1,
            ],
            [
                'id'=>3,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>1,
            ],
            [
                'id'=>4,
                'name'=>'RedDead Redemtion',
                'price'=>60,
                'images'=>'https://upload.wikimedia.org/wikipedia/vi/thumb/a/a7/Red_Dead_Redemption.jpg/280px-Red_Dead_Redemption.jpg',
                'categoryId'=>1,
            ],
            [
                'id'=>5,
                'name'=>'FiFA 18',
                'price'=>40,
                'images'=>'https://upload.wikimedia.org/wikipedia/en/thumb/d/d4/FIFA18cover.png/220px-FIFA18cover.png',
                'categoryId'=>2,
            ],
            [
                'id'=>6,
                'name'=>'Pes 2018',
                'price'=>40,
                'images'=>'https://www.virginmegastore.ae/medias/sys_master/root/h4a/hcb/9093245272094/PES-2018-Pro-Evolution-Soccer-324844-Detail.jpg',
                'categoryId'=>2,
            ],
            [
                'id'=>7,
                'name'=>'For Honor',
                'price'=>60,
                'images'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKKLpFAKlbmB9DSSR8OsZMCf5kHaRnpnSX09JBkpgF6boaEQdu',
                'categoryId'=>3,
            ],
            [
                'id'=>8,
                'name'=>'Goat Simulator:',
                'price'=>20,
                'images'=>'https://images-na.ssl-images-amazon.com/images/I/71QiqoGNZqL.jpg',
                'categoryId'=>3,
            ],
            [
                'id'=>9,
                'name'=>'Monster Hunter XX',
                'price'=>19,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>3,
            ],
            [
                'id'=>10,
                'name'=>'Doom',
                'price'=>60,
                'images'=>'https://images.g2a.com/newlayout/323x433/1x1x0/40687a4fba21/5912d667ae653a98cb5745ac',
                'categoryId'=>1,
            ],
            [
                'id'=>11,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
                'categoryId'=>1,
            ],
            [
                'id'=>12,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>1,
            ],
            [
                'id'=>13,
                'name'=>'RedDead Redemtion',
                'price'=>60,
                'images'=>'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg',
                'categoryId'=>1,
            ],
            [
                'id'=>14,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
                'categoryId'=>2,
            ],
            [
                'id'=>15,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>2,
            ],
            [
                'id'=>16,
                'name'=>'Detroit:Become Humand',
                'price'=>60,
                'images'=>'https://i.gadgets360cdn.com/large/detroit_become_human_demo_cover_1524576037809.jpg',
                'categoryId'=>3,
            ],
            [
                'id'=>17,
                'name'=>'Gow Of War',
                'price'=>60,
                'images'=>'https://d1pqlgpcx1bu0k.cloudfront.net/static/img/GOW-OG-image.jpg',
                'categoryId'=>3,
            ],
            [
                'id'=>18,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>3,
            ],
            [
                'id'=>19,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>3,
            ],
            [
                'id'=>20,
                'name'=>'Monster Hunter: World',
                'price'=>60,
                'images'=>'https://steamcdn-a.akamaihd.net/steam/apps/582010/header.jpg?t=1533890901',
                'categoryId'=>3,
            ],
        ]);
    }
}
