<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    /**
     * nombre del modelo
     *
     * @var string
     */
    protected $model = Articulo::class;

    /**
     * define el estado predeterminado
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->paragraph,
            'stock' => $this->faker->numberBetween(1,999),
        ];
    }
}
