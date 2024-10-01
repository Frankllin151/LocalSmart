<div class="w-full overflow-hidden rounded-lg shadow-md">
    @if (session('contralto-sucess'))
    <div class="flex justify-center bg-green-100 text-green-700 font-bold p-4 mb-4">
        <p>{{ session('contralto-sucess') }}</p>
    </div>
@endif
</div>
<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
  <div class="container mx-auto px-6 py-8">
      <div class="bg-white p-8 rounded-lg shadow-md">
          <h2 class="text-2xl font-semibold mb-6">Cadastro de Contrato</h2>
          <form action="{{ route('admin.postcontralto') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                  <!-- Selecionar Usuário -->
                  <div>
                      <label for="user_id" class="block text-sm font-medium text-gray-700">Selecionar Usuário</label>
                      <select name="user_id" id="user_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                          <option value="" disabled selected>Selecione um usuário</option>
                          @foreach ($usuarios as $usuario)
                              <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                          @endforeach
                      </select>
                  </div>
                    <!-- Selecionar Imóvel -->
                    <div>
                        <label for="imovel_id" class="block text-sm font-medium text-gray-700">Selecionar Apartamento</label>
                        <select name="imovel_id" id="imovel_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                            <option value="" disabled selected>Selecionar um apartamento</option>
                            @foreach ($imoveis as $imovel)
                                <option value="{{ $imovel->id }}">{{ $imovel->numero_ap }}
                                   
                                </option>
                            @endforeach
                        </select>
                    </div>

                  <!-- Data de Início -->
                  <div>
                      <label for="data_inicio_contrato" class="block text-sm font-medium text-gray-700">Data de Início do Contrato</label>
                      <input type="date" id="data_inicio_contrato" name="data_inicio_contrato" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                  </div>

                  <!-- Data de Fim -->
                  <div>
                      <label for="data_fim_contrato" class="block text-sm font-medium text-gray-700">Data de Fim do Contrato</label>
                      <input type="date" id="data_fim_contrato" name="data_fim_contrato" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                  </div>

                  <!-- Upload de Contrato em PDF -->
                  <div class="md:col-span-2">
                      <label for="contrato_pdf" class="block text-sm font-medium text-gray-700">Enviar Contrato (PDF)</label>
                      <input type="file" id="contrato_pdf" name="contrato_pdf" accept="application/pdf" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                  </div>

                  <!-- Status -->
                  <div>
                      <label for="status" class="block text-sm font-medium text-gray-700">Status do Contrato</label>
                      <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                          <option value="ativo">Ativo</option>
                          <option value="encerrado">Encerrado</option>
                          <option value="pendente">Pendente</option>
                      </select>
                  </div>


                  <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status do Apartamento</label>
                    <select name="st-apartamento" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>
                        <option value="disponivel">Disponivel</option>
                        <option value="indisponivel">Indisponivel</option>
                        <option value="vendido">Vendido</option>
                        <option value="alugado">Alugado</option>
                    </select>
                </div>
              </div>

              <!-- Botão de Enviar -->
              <div class="flex justify-end">
                  <button type="submit" class="px-4 py-2 bg-[#fd7b1e] text-white rounded-md shadow-sm hover:bg-[#e06b18] focus:outline-none focus:border-[#fd7b1e] focus:ring-[#fd7b1e]">
                      Enviar Contrato
                  </button>
              </div>
          </form>
      </div>
  </div>
</main>
