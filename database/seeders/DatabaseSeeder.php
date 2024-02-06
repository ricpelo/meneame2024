<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comentario;
use App\Models\Etiqueta;
use App\Models\Noticia;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Noticia::factory(3)
            ->for(User::first())
            ->has(Etiqueta::factory(2))
            ->has(Comentario::factory(3)->for(User::find(1)))
            ->create();

        Comentario::factory(3)
            ->for(Comentario::find(1), 'comentable')
            ->for(User::find(1))
            ->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
