<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Subscriber;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create()
        ->each(function($user){
            Event::factory()->count(5)->create([
                'user_id' => $user->id,
            ]);
        });

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ])->each(function($user){
            Event::factory()->count(5)->create([
                'user_id' => $user->id,
            ])->each(function($event){
                Subscriber::factory()->count(rand(5, 25))->create([
                    'event_id' => $event->id,
                ]);
            });
        });
    }
}
