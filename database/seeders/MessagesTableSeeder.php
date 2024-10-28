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
                "subrayado"=>true,
                "negrita"=>true,
            ],
            [
                "text" => "Suerte!",
                "subrayado"=>false,
                "negrita"=>false,
            ],
            [
                "text" => "Prueba con solo negrita!",
                "subrayado"=>false,
                "negrita"=>true,
            ],
            [
                "text" => "Prueba con solo subrayado!",
                "subrayado"=>true,
                "negrita"=>false,
            ],
        ];

        foreach ($messages as $message) {
            Message::create($message);
        }
    }
}
