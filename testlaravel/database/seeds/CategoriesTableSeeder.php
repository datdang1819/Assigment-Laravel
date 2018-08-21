<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Game bán Chạy',
                'description'=>'Hot game hot price',
                'images'=>'https://homer.dl.playstation.net/pr/bam-art/707/854/79cd3648-5648-4186-a9b4-cc70a7e67319.jpg'
            ],
            [
                'id'=>2,
                'name'=>'Game Sale Sập Sàn',
                'description'=>'40%-50%',
                'images'=>'https://homer.dl.playstation.net/pr/bam-art/709/116/dfa74166-a16c-4545-a4d4-22102e32f767.jpg'
            ],
            [
                'id'=>3,
                'name'=>'Game sắp ra mắt',
                'description'=>'Có thể đặt hàng trước',
                'images'=>'https://homer.dl.playstation.net/pr/bam-art/676/633/e2872136-3628-41b8-9985-2f8b5f0fbba0.jpg'
            ],
            [
                'id'=>4,
                'name'=>'Độc quyền PS4',
                'description'=>'Không thể bỏ qua',
                'images'=>'https://homer.dl.playstation.net/pr/bam-art/693/526/e14b780d-7e40-44d7-ae59-637c096f5a85.jpg'
            ],
            [
                'id'=>5,
                'name'=>'FIFA 19 Bundle',
                'description'=>'Pre-order now',
                'images'=>'https://homer.dl.playstation.net/pr/bam-art/693/583/e00b8353-a3e8-492c-8371-8e00ae3851eb.jpg'
            ]

        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');

    }
}
