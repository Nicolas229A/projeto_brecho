<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iten;
use PDF;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    public function gerarRelatorio() {
        $itens = DB::table('itens')
        ->get();

        $pdf = PDF::loadView('relatorios.itens-pdf', ['itens' => $itens]);

        return $pdf->stream('itens.pdf');

        //->where('', 'LIKE', '')
    }
}
