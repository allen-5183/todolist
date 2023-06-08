<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    //使用 $model 來指定使用的 Todo Model
    protected $model = Todo::class;

    public function definition()
    {
        return [
            //只回傳一個 body=Hello 的資料
            // 'body' => 'Hello',
            //使用 faker 來產生 text (文字資料)
            'body' => $this->faker->text,
        ];
    }
}
