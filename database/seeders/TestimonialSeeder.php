<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use App\Models\User;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $users = User::take(5)->get();

        foreach ($users as $user) {
            Testimonial::create([
                'user_id' => $user->id,
                'content' => fake()->sentence(10),
            ]);
        }
    }
}
