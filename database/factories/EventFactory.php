<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    protected $model = Event::class;

    public function definition()
    {
        // $title = $this->faker->sentence();
        return [
            'title' => 'Migrating to Linear 101',
            'description' => $this->faker->paragraph(),
            'place' => $this->faker->text(),
            'date' =>'2024-05-19',
            'capacity' => 50,
            'organizer' => '10Code',
            'image_url' => $this->faker->text(),
        ];
    }
}


