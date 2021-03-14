<?php

namespace Database\Factories;

use App\Models\Classe;
use App\Models\Participant;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $classeId      = DB::table('classes')->inRandomOrder()->limit(1)->value('id');
        $participantId = DB::table('participants')->inRandomOrder()->limit(1)->value('id');
        return [
            'name'           => $this->faker->name(),
            'start_date'     => $this->faker->dateTime('now'),
            'end_date'       => $this->faker->dateTime('now', '+5 days'),
            'participant_id' => $participantId,
            'classe_id'      => $classeId
        ];
    }
}
