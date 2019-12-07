<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nicknameUsers')->insert([
        [
          'name' => 'サトウ',
          'groupName' => 'サイトウ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'スズキ',
          'groupName' => 'ヨシダ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'ミント',
          'groupName' => 'ハマカワ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
                [
          'name' => 'ヤマダ',
          'groupName' => 'サイトウ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'ジャスミン',
          'groupName' => 'ヨシダ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'スペア',
          'groupName' => 'ハマカワ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'ペパー',
          'groupName' => 'サイトウ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'ラズベリー',
          'groupName' => 'ヨシダ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'カモミール',
          'groupName' => 'ハマカワ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
        [
          'name' => 'かるしふぁー',
          'groupName' => 'サイトウ組',
          'stampDay' => date('Y-m-d H:i:s'),
        ],
      ]);
    }
}
