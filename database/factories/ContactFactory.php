<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
// use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ContactFactory extends Factory
{
    protected $model = Contact::class;
    
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'phone' => $this->faker->e164PhoneNumber
        ];
    }
}
