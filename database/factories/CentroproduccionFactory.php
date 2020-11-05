<?php

namespace Database\Factories;

use App\Models\Centroproduccion;
use Illuminate\Database\Eloquent\Factories\Factory;

class CentroproduccionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Centroproduccion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_suc' => $this->faker,
            'detalle'=> $this->faker->sentence(),
            'activo'=> $this->faker->randomElement([0 , 1])
        ];
    }
}
