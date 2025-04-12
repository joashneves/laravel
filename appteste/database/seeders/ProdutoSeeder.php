<?php

namespace Database\Seeders;

use App\Models\Produto;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Produto::factory(10)->create();

        DB::table('produtos')->insert([
            'nome'=> Str::random(10),
            'descricao' => Str::random(10),
            'preco'=> 4,
            'quantidade' => 1
        ]);
    }
}
