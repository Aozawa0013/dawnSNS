<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'test_1',
                'mail' => 'test1@test.com',
                'password' => Hash::make('test1'),
                'bio' => 'テストテストテストテスト',
            ],
            [
                'username' => 'test_2',
                'mail' => 'test2@test.com',
                'password' => Hash::make('test2'),
                'bio' => 'テスト2テスト2テスト2テスト2',
            ],
            [
                'username' => 'test_3',
                'mail' => 'test3@test.com',
                'password' => Hash::make('test3'),
                'bio' => 'テスト3テスト3テスト3テスト3',
            ],
        ]);
    }
}
