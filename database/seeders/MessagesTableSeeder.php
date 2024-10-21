<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                "text" => "Ya puedes hacer el examen",
            ],
            [
                "text" => "Suerte!",
            ],
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }
    }
}
