<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     *
     */
    protected $model = Contact::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->safeEmail,
            'postcode' =>$this->faker->regexify('[0-9]{3}-[0-9]{4}'),
            'address' =>$this->faker->prefecture,
            'building_name' =>$this->faker->randomletter,
            'opinion' => $this->faker->realtext(50)
        ];
    }
}
