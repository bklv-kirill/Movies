<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\AuthorGanre;
use App\Models\Cinema;
use App\Models\Ganre;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $author_id = Ganre::query()->get()->random()->id;
        $ganre_id = Author::query()->get()->random()->id;

        if (!AuthorGanre::query()->where("author_id", $author_id)->where("ganre_id", $ganre_id)->exists())
            AuthorGanre::query()->create(["author_id" => $author_id, "ganre_id" => $ganre_id]);

        return [
            "title" => ucfirst($this->faker->sentence(2)),
            "description" => ucfirst($this->faker->sentence(20)),
            "image" => $this->faker->imageUrl("780", "180", "movies"),
            "release_date" => $this->faker->date,
            "author_id" => $author_id,
            "ganre_id" => $ganre_id,
        ];
    }
}
