<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lawyer;

class LawyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lawyer::create([
            'name' => 'Rani',
            'specialization' => 'Corporate Law',
            'rating' => 4.9,
            'image_path' => 'public\assets\images\Rani.png',
        ]);

        Lawyer::create([
            'name' => 'Budi',
            'specialization' => 'Criminal Law',
            'rating' => 4.6,
            'image_path' => 'public\assets\images\Budi.png',
        ]);

        Lawyer::create([
            'name' => 'Andi',
            'specialization' => 'Family Law',
            'rating' => 4.1,
            'image_path' => 'public\assets\images\Andi.png',
        ]);

        Lawyer::create([
            'name' => 'Maryo',
            'specialization' => 'Intellectual Property',
            'rating' => 4.8,
            'image_path' => 'public\assets\images\Maryo.png',
        ]);

        Lawyer::create([
            'name' => 'Dewi (No Image)',
            'specialization' => 'Immigration Law',
            'rating' => 4.3,
            'image_path' => null,
        ]);
    }
}