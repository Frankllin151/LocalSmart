<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }
    public function adicionarApartamento()
    {
       return view('admin.dashboard' , ['componente' => 'adicionar']);
    }
    public function adicionarImoveis(Request $request)
    {
        // Validação dos campos
        $validatedData =  $request->validate([
            'titulo' => 'nullable|string',
            'descricao' => 'required|string',
            'localizacao' => 'required|string',
            'proximidade' => 'required|string',
            'transporte_publico' => 'required|string',
            'preco' => 'required|numeric',
            'quartos' => 'required|integer',
            'banheiros' => 'required|integer',
            'foto1' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
            'foto3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        // Armazena o arquivo 'foto1', que é obrigatório
    $foto1Path = $request->file('foto1')->store('public/images');

    // Armazena 'foto2' e 'foto3' se estiverem presentes
    $foto2Path = $request->hasFile('foto2') ? $request->file('foto2')->store('public/images') : null;
    $foto3Path = $request->hasFile('foto3') ? $request->file('foto3')->store('public/images') : null;
     
        $validatedData['titulo'] = $validatedData['titulo'] ?? 'Apartamento';
       
         // Inserir os dados no banco de dados, incluindo o 'titulo'
         $imovel = Imovel::create([
            'titulo' => $validatedData['titulo'],
            'descricao' => $request->descricao,
            'localizacao' => $request->localizacao,
            'proximidade' => $request->proximidade,
            'transporte_publico' => $request->transporte_publico,
            'price' => $request->preco,
            'quartos' => $request->quartos,
            'banheiros' => $request->banheiros,
            'foto1' => $foto1Path,
            'foto2' => $foto2Path,
            'foto3' => $foto3Path,
        ]);
    // Retornar o imóvel criado ou qualquer outro dado necessário
    return response()->json([
        'success' => true,
        'message' => 'Imóvel criado com sucesso!',
        'data' => $imovel
    ], 201); // Status code 201 Created
        
    }
}