<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public readonly Sale $sale;
    public function __construct()
    {
        $this->sale = new Sale();
        
    }

    // Exiba uma listagem de vendas 
    public function index()
    {
        $sales = $this->sale->all();
        
        return view('sales', ['sales' => $sales]);
    }

    // Tela de criação de vendas
    public function create()
    {
        return view('sale_create');
    }

    // Criar venda
    public function store(Request $request)
    {
      
        $created = $this->sale->create([
            'sale_value' => $request->input('sale_value'),
            'sale_date' => $request->input('sale_date'),
            'seller_id' => $request->input('seller_id'),
             $commission = $request->input('sale_value'),
            'commission' => ($commission * 0.085),

        ]);


        if ($created) {
            return redirect()->back()->with('messagem', 'Venda cadastrada com sucesso');
        }
        return redirect()->back()->with('messagemErro', 'Erro ao cadastrar venda');

    }

    // Exibir uma vendeda
    public function show(Sale $sale)
    {
        return view('sale_show', ['sale'=> $sale]);
    }

    // Criar formuralario de edição
    public function edit(Sale $sale)
    {
        return view('sale_edit', ['sale'=> $sale]);
    }

    // Editar venda
    public function update(Request $request, string $id)
    {
        $updated = $this->sale->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('messagem', 'Atualização realizada com sucesso');
        }
        return redirect()->back()->with('messagemErro', 'Erro na atualização');
    }

    //Deletar venda
    public function destroy(string $id)
    {
        $this->sale->where('id', $id)->delete();

        return redirect()->route('sales.index');
    }
}
