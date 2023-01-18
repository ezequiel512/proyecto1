<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        self::seedUser();
        $this->command->alert('¡Tabla users inicializada con datos!');
    }

    private function seedUser(){
            DB::table('users')->truncate();
            DB::table('users')->insert([
                'name'=>env('DATABASE_ADMIN'),
                'email'=>env('DATABASE_EMAIL'),
                'password'=>bcrypt(env('DATABASE_PASS'))
            ]);
        }
    }
