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

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = $this->sale->all();
        
        return view('sales', ['sales' => $sales]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sale_create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return view('sale_show', ['sale'=> $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        return view('sale_edit', ['sale'=> $sale]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->sale->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('messagem', 'Atualização realizada com sucesso');
        }
        return redirect()->back()->with('messagemErro', 'Erro na atualização');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->sale->where('id', $id)->delete();

        return redirect()->route('sales.index');
    }
}
