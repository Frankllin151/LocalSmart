<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\User;
use App\Models\Inquilinos;
class AdminController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }
    public function todosAp()
    {
        $imoveis = Imovel::all();
        return view('admin.dashboard' , [
       'apartamentosTodos' => 'todosapp', 
       'imoveis' => $imoveis
        ]);
    }


    public function adicionarApartamento()
    {
     
       return view('admin.dashboard' , ['componente' => 'adicionar']);
    }
    public function adicionarImoveis(Request $request)
{
    // Validação dos campos
    $validatedData = $request->validate([
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
         'status' => 'required|string|in:disponivel,alugado,vendido,indisponivel,em_manutencao',
         'numeroap' => 'required|string'
    ]);

    // Verifica se a pasta 'public/images' existe, senão cria a pasta
    if (!file_exists(public_path('images'))) {
        mkdir(public_path('images'), 0755, true);
    }

    // Armazena o arquivo 'foto1', que é obrigatório
    $foto1Name = time() . '_' . $request->file('foto1')->getClientOriginalName();
    $foto1Path = $request->file('foto1')->move(public_path('images'), $foto1Name);

    // Armazena 'foto2' e 'foto3' se estiverem presentes
    $foto2Path = null;
    $foto3Path = null;

    if ($request->hasFile('foto2')) {
        $foto2Name = time() . '_' . $request->file('foto2')->getClientOriginalName();
        $foto2Path = $request->file('foto2')->move(public_path('images'), $foto2Name);
    }

    if ($request->hasFile('foto3')) {
        $foto3Name = time() . '_' . $request->file('foto3')->getClientOriginalName();
        $foto3Path = $request->file('foto3')->move(public_path('images'), $foto3Name);
    }

    // Define um título padrão caso não seja fornecido
    $validatedData['titulo'] = $validatedData['titulo'] ?? 'Apartamento';

    // Inserir os dados no banco de dados
    $imovel = Imovel::create([
        'titulo' => $validatedData['titulo'],
        'descricao' => $request->descricao,
        'localizacao' => $request->localizacao,
        'proximidade' => $request->proximidade,
        'transporte_publico' => $request->transporte_publico,
        'price' => $request->preco,
        'quartos' => $request->quartos,
        'banheiros' => $request->banheiros,
        'foto1' => 'images/' . $foto1Name,
        'foto2' => $foto2Path ? 'images/' . $foto2Name : null,
        'foto3' => $foto3Path ? 'images/' . $foto3Name : null,
        'status' => $request->status, 
        'numero_ap' => $request->numeroap
    ]);

    // Retornar o imóvel criado
    return redirect('/admin/todosap')->with('adicionado' , 'Imóvel Adicionado!');
}


public function editarAp(Request $request , $id){
 $imovel = Imovel::find($id);

 if(!$imovel){
   return response()->json([
   'Failed' => true, 
   'message' => 'Imovel não encontrado',
   'data' => $imovel
   ]);
 }


 return view('admin.dashboard', ['imovel' => $imovel]);
}

public function Atualizar(Request $request , $id)
{
    
  
   // Captura os dados enviados do formulário
   $dados = $request->input();
   // Encontra o imóvel pelo ID
   $imovel = Imovel::findOrFail($id);
   
   // Atualiza os dados do imóvel com os novos valores do request
   $imovel->update([
       'descricao' => $dados['descricao'],
       'localizacao' => $dados['localizacao'],
       'proximidade' => $dados['proximidade'],
       'transporte_publico' => $dados['transporte_publico'],
       'price' => $dados['preco'],
       'quartos' => $dados['quartos'],
       'banheiros' => $dados['banheiros'],
       'status' => $dados['status'],
       'numero_ap' => $dados['numeroap']
   ]);

  
 return redirect('/admin/todosap')->with('status' , 'Imóvel Atualizado!');
}

public function excluirAp($id)
{
    // Encontrar o imóvel pelo ID
    $imovel = Imovel::find($id);

    // Verificar se o imóvel foi encontrado
    if ($imovel) {
        // Excluir o imóvel
        $imovel->delete();

        // Redirecionar ou retornar uma resposta de sucesso
        return redirect()->route('admin.todosap')->with('success', 'Imóvel excluído com sucesso.');
    } else {
        // Redirecionar ou retornar uma resposta de erro se o imóvel não for encontrado
        return redirect()->route('admin.todosap')->with('error', 'Imóvel não encontrado.');
    }
}

// parte inquilinos 
public function inquIlinos()
{


    // Buscar todos os inquilinos com os usuários e imóveis relacionados, selecionando apenas os campos necessários
    $inquilinos = Inquilinos::with(['user:id,name,email', 'imovel:id,numero_ap'])
        ->select('id', 'user_id', 'imovel_id', 'pagamento_recente', 'status')
        ->get();

    return view('admin.dashboard', [
        'inquilinos' => $inquilinos,
    ]);
}
 



/// contralto inquilino
 public function contraltoInquilino()
 {
    return view('admin.dashboard', [
        'contralto' => 'contralto',
    ]);
 }
}