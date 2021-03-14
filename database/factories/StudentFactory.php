<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $classeId = DB::table('classes')->inRandomOrder()->limit(1)->value('id');
        return [
            'name' => $this->faker->name(),
            'firstname' => $this->faker->firstName(),
            'age' => $this->faker->numberBetween(17, 27),
            'year' => $this->faker->year(4),
            'classe_id' => $classeId,
        ];
    }
}
