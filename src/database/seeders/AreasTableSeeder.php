<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Area; 

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $areas = ['北海道', '青森県', '秋田県', '岩手県', '山形県', '宮城県', '福島県', '茨城県','栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県', '新潟県', '富山県', '石川県','福井県', '長野県', '山梨県', '静岡県', '愛知県', '岐阜県', '三重県', '滋賀県','京都府', '大阪府', '奈良県', '和歌山県', '兵庫県', '鳥取道', '島根県', '岡山県', '広島県', '山口県','香川県', '徳島県', '高知県', '愛媛県', '福岡県', '佐賀県', '大分県', '宮崎県', '熊本県', '鹿児島県', '長崎県','沖縄県'];

        Area::insert(array_map(function ($area) {
            return ['shop_area' => $area];
        }, $areas));
    }
}
