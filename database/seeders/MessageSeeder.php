<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'sender' => 'Testing Test',
            'email' =>  'test@testing.com',
            'subject' => 'Testing admin page',
            'message' => 'Testing testing...',
            'created_at' => Carbon::yesterday()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::yesterday()->format('Y-m-d H:i:s')
        ]);

        DB::table('messages')->insert([
            'sender' => 'Testing Test',
            'email' =>  'test@testing.com',
            'subject' => 'Testing the ordering of messages',
            'message' => 'It should be at the top since this is the latest message',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
