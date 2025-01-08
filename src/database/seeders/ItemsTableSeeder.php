<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('items')->insert([
            'name' => '腕時計',
            'brand' => 'ブランド名',
            'price' => '15,000',
            'overview' => 'スタイリッシュなデザインのメンズ腕時計',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Armani+Mens+Clock.jpg',
            'condition_id' => '1'
        ]);

        DB::table('items')->insert([
            'name' => 'HDD',
            'brand' => 'ブランド名',
            'price' => '5,000',
            'overview' => '高速で信頼性の高いハードディスク',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/HDD+Hard+Disk.jpg',
            'condition_id' => '2'
        ]);

        DB::table('items')->insert([
            'name' => '玉ねぎ3束',
            'brand' => 'ブランド名',
            'price' => '300',
            'overview' => '新鮮な玉ねぎ3束のセット',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/iLoveIMG+d.jpg',
            'condition_id' => '3'
        ]);

        DB::table('items')->insert([
            'name' => '革靴',
            'brand' => 'ブランド名',
            'price' => '4,000',
            'overview' => 'クラシックなデザインの革靴',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Leather+Shoes+Product+Photo.jpg',
            'condition_id' => '4'
        ]);

        DB::table('items')->insert([
            'name' => 'ノートPC',
            'brand' => 'ブランド名',
            'price' => '45,000',
            'overview' => '高性能なノートパソコン',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Living+Room+Laptop.jpg',
            'condition_id' => '1'
        ]);

        DB::table('items')->insert([
            'name' => 'マイク',
            'brand' => 'ブランド名',
            'price' => '8,000',
            'overview' => '高音質のレコーディング用マイク',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Music+Mic+4632231.jpg',
            'condition_id' => '2'
        ]);

        DB::table('items')->insert([
            'name' => 'ショルダーバッグ',
            'brand' => 'ブランド名',
            'price' => '3,500',
            'overview' => 'おしゃれなショルダーバッグ',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Purse+fashion+pocket.jpg',
            'condition_id' => '3'
        ]);

        DB::table('items')->insert([
            'name' => 'タンブラー',
            'brand' => 'ブランド名',
            'price' => '500',
            'overview' => '使いやすいタンブラー',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Tumbler+souvenir.jpg',
            'condition_id' => '4'
        ]);

        DB::table('items')->insert([
            'name' => 'コーヒーミル',
            'brand' => 'ブランド名',
            'price' => '4,000',
            'overview' => '手動のコーヒーミル',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/Waitress+with+Coffee+Grinder.jpg',
            'condition_id' => '1'
        ]);

        DB::table('items')->insert([
            'name' => 'メイクセット',
            'brand' => 'ブランド名',
            'price' => '2,500',
            'overview' => '便利なメイクアップセット',
            'image' => 'https://coachtech-matter.s3.ap-northeast-1.amazonaws.com/image/%E5%A4%96%E5%87%BA%E3%83%A1%E3%82%A4%E3%82%AF%E3%82%A2%E3%83%83%E3%83%95%E3%82%9A%E3%82%BB%E3%83%83%E3%83%88.jpg',
            'condition_id' => '2'
        ]);
    }
}
