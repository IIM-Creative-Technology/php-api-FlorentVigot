<?php

namespace Database\Factories;

use App\Models\Mark;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class MarkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mark::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $studentId      = DB::table('students')->inRandomOrder()->limit(1)->value('id');
        $subjectId      = DB::table('subjects')->inRandomOrder()->limit(1)->value('id');

        return [
            'note' => $this->faker->numberBetween(0, 20),
            'student_id' => $studentId,
            'subject_id' => $subjectId
        ];
    }
}
