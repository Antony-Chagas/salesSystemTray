<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;

class SellerController extends Controller
{
    public readonly Seller $seller;

    public function __construct()
    {
        $this->seller = new Seller();
    }
    // Exiba uma listagem de vendedores 
    public function index()
    {
        $seller = $this->seller->all();
        return view('sellers', ['sellers' => $seller]);
    
    }

    // Tela de criação de vendedor
    public function create()
    {
        return view('seller_create');
    }

    // Criar vendedor 
    public function store(Request $request)
    {
        $created = $this->seller->create([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);

        if ($created) {
            return redirect()->back()->with('messagem', 'Vendedor cadastrado com sucesso');
        }
        return redirect()->back()->with('messagemErro', 'Erro na cadastrado');
    }

    // Exibir um vendedor
    public function show(seller $seller)
    {
        return view('seller_show', ['seller' => $seller]);
        
    }

    // Criar formuralario de edição
    public function edit(Seller $seller)
    {
        return view('seller_edit', ['seller' => $seller]);
    }

    // Editar vendedor
    public function update(Request $request, string $id)
    {
        $updated = $this->seller->where('id', $id)->update($request->except(['_token', '_method']));

        if ($updated) {
            return redirect()->back()->with('messagem', 'Atualização realizada com sucesso');
        }
        return redirect()->back()->with('messagemErro', 'Erro na atualização');
    }

    //Deletar vendedor
    public function destroy(string $id)
    {
        $this->seller->where('id', $id)->delete();
        return redirect()->route('sellers.index');
    }

}
