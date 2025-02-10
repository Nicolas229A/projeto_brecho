<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Iten;

class ItensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Iten::insert([
            [
                'classificacao' => 'Aparelho Eletrônico',
                'foto' => 'fotos_livros/notebook.jpg',
                'nome' => 'Notebook',
                'especificacoes' => 'Dell Inspiron 15 Intel Core i3 8GB RAM',
                'preco' => '5000.00',
                'preco_novo' => '7000.00',
                'tempo_de_uso' => '7 meses',
                'danos' => 'Carcaça rachada na lateral direita',
                'link' => ''
            ],
            [
               'classificacao' => 'Brinquedo',
                'foto' => 'fotos_livros/carrinho.jpg',
                'nome' => 'Carrinho',
                'especificacoes' => 'Ferrari Hot Wheels',
                'preco' => '10.00',
                'preco_novo' => '20.00',
                'tempo_de_uso' => '3 anos',
                'danos' => 'Sujeira',
                'link' => '' 
            ],
            [
                'classificacao' => 'Para Cozinha',
                'foto' => 'fotos_livros/garrafa.jpg',
                'nome' => 'Garrafa',
                'especificacoes' => 'Tupperware roxa',
                'preco' => '50.00',
                'preco_novo' => '80.00',
                'tempo_de_uso' => '10 anos',
                'danos' => 'Nenhum',
                'link' => ''
            ]
        ]);
    }
}
