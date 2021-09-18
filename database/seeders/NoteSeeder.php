<?php

namespace Database\Seeders;

use App\Models\Note;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 500) as $i)
        {
            Note::create([
                'title' => 'Note '.\Str::random(10),
            ]);
        }
    }
}
