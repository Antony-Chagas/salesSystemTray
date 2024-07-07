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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seller = $this->seller->all();
        return view('sellers', ['sellers' => $seller]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller_create');
    }

    /**
     * Store a newly created resource in storage.
     */
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

    /**
     * Display the specified resource.
     */
    public function show(seller $seller)
    {
        return view('seller_show', ['seller' => $seller]);
        return view('sales', ['seller' => $seller]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller)
    {
        return view('seller_edit', ['seller' => $seller]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->seller->where('id', $id)->update($request->except(['_token', '_method']));

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
        $this->seller->where('id', $id)->delete();
        return redirect()->route('sellers.index');
    }
}
