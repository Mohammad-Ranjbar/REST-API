<?php

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Thread::class, 50)->create()->each(function ($thread) {
//            Activity::create([
//
//                'user_id'    => $thread->user_id,
//                'subject_id' => $thread->id,
//                'subject_type' => 'App\Models\Thread',
//                'type' => 'created_thread'
//
//            ]);
		});
    }
}
