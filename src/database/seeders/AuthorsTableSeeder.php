<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'last-name' => 'ポッター',
            'first-name' => 'ハリー',
            'gender' => '男',
            'email' => 'example@email.com',
            'tel1' => '090',
            'tel2' => 1234,
            'tel3' => 5678,
            'address' => 'The Cupboard under the Stairs, 4 Privet Drive',
            'building' => 'Little Whinging SURREY',
            'detail' => 'ショップへのお問い合せ',
            'content' => '9の3/4番線ってどこですか'
        ];
        $param = [
            'last-name' => 'ウィーズリー',
            'first-name' => 'ロナルド',
            'gender' => '男',
            'email' => 'example@email.com',
            'tel1' => '090',
            'tel2' => 1234,
            'tel3' => 5678,
            'address' => 'イギリス デヴォン州 オッタリー・セント・キャッチポール村',
            'building' => '隠れ穴',
            'detail' => '商品の交換について',
            'content' => '兄弟のお下がりの杖が言うこと聞きません'
        ];
        $param = [
            'last-name' => 'グレンジャー',
            'first-name' => 'ハーマイオニー',
            'gender' => '女',
            'email' => 'example@email.com',
            'tel1' => '090',
            'tel2' => 1234,
            'tel3' => 5678,
            'address' => 'ロンドンの郊外ハムステッド・ガーデン',
            'building' => '',
            'detail' => 'その他',
            'content' => '魔法全部使えたけど試験は何で決まるのかしら'
        ];
        DB::table('content')->insert($param);
    }
}
