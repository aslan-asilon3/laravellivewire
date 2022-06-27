<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactTableSeeder extends Seeder
{

    
    public function run()
    {
        //
        // factory(Contact::class, 10)->create();
        Contact::factory()->count(10)->create();
    }
}
