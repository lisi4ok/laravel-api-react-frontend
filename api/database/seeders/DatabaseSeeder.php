<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Interaction;
use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Contact::factory()->count(10)->create()->each(function ($contact) {
            $interactions = Interaction::factory()->count(3)->make();
            $contact->interactions()->saveMany($interactions);
        });
    }
}
