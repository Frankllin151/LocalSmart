<main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
  <div class="container mx-auto px-6 py-8">
      <div class="bg-white p-8 rounded-lg shadow-md">
          <h2 class="text-2xl font-semibold mb-6">Cadastro de Imóvel</h2>
          <form action="{{ route('admin.atualizar' ,  $imovel->id) ,  }}" method="POST" enctype="multipart/form-data">
             
              @csrf
                @method('PUT')
              <div class="grid gap-6 mb-6 md:grid-cols-2">
                  <!-- Título -->
                  <div>
                      <label for="titulo" class="block text-sm font-medium text-gray-700">Título</label>
                      <input type="text" id="titulo" value="{{ old('titulo', $imovel->titulo ?? '') }}" name="titulo" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required disabled>
                  </div>
                  
                  <!-- Foto 1 -->
                  <div>
                      <label for="foto1" class="block text-sm font-medium text-gray-700">Foto 1</label>
                      <input type="file" id="foto1" name="foto1" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <!-- Foto 2 -->
                  <div>
                      <label for="foto2" class="block text-sm font-medium text-gray-700">Foto 2</label>
                      <input type="file" id="foto2" name="foto2" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>

                  <!-- Foto 3 -->
                  <div>
                      <label for="foto3" class="block text-sm font-medium text-gray-700">Foto 3</label>
                      <input type="file" id="foto3" name="foto3" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                  </div>
                  
                  <!-- Preview das Imagens -->
                  <div id="image-preview" class="mt-4 flex flex-wrap gap-4">
                      <!-- As imagens serão exibidas aqui -->
                  </div>
              </div>

              <!-- Descrição -->
              <div class="md:col-span-2">
                  <label for="descricao" class="block text-sm font-medium text-gray-700">Descrição</label>
                  <textarea id="descricao" name="descricao" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required>{{ old('descricao', $imovel->descricao ?? '') }}</textarea>
              </div>

              <!-- Localização -->
              <div>
                  <label for="localizacao" class="block text-sm font-medium text-gray-700">Localização</label>
                  <input type="text" id="localizacao" name="localizacao" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('localizacao', $imovel->localizacao ?? '') }}">
              </div>

              <!-- Proximidade -->
              <div>
                  <label for="proximidade" class="block text-sm font-medium text-gray-700">Proximidade</label>
                  <input type="text" id="proximidade" name="proximidade" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('proximidade', $imovel->proximidade ?? '') }}">
              </div>

              <!-- Transporte Público -->
              <div>
                  <label for="transporte_publico" class="block text-sm font-medium text-gray-700">Transporte Público</label>
                  <input type="text" id="transporte_publico" name="transporte_publico" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('transporte_publico', $imovel->transporte_publico ?? '') }}">
              </div>

              <!-- Preço -->
              <div>
                  <label for="preco" class="block text-sm font-medium text-gray-700">Preço</label>
                  <input type="number" id="preco" name="preco" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('preco', $imovel->price ?? '') }}">
              </div>

              <!-- Quartos -->
              <div>
                  <label for="quartos" class="block text-sm font-medium text-gray-700">Quartos</label>
                  <input type="number" id="quartos" name="quartos" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('quartos', $imovel->quartos ?? '') }}">
              </div>

              <!---Numero do apartamento-->
              <div>
                <label for="numeroapt" class="block text-sm font-medium text-gray-700">Numero do Apartamento</label>
                <input type="number" id="numeroapt" name="numeroap" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('quartos', $imovel->numero_ap ?? '') }}">
            </div>

              <!-- Banheiros -->
              <div>
                  <label for="banheiros" class="block text-sm font-medium text-gray-700">Banheiros</label>
                  <input type="number" id="banheiros" name="banheiros" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" required value="{{ old('banheiros', $imovel->banheiros ?? '') }}">
              </div>

              <div>
                  <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                  <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-[#fd7b1e] focus:ring-[#fd7b1e] sm:text-sm" name="status" id="status" required>
                      <option value="disponivel" {{ old('status', $imovel->status ?? '') == 'disponivel' ? 'selected' : '' }}>Disponível</option>
                      <option value="alugado" {{ old('status', $imovel->status ?? '') == 'alugado' ? 'selected' : '' }}>Alugado</option>
                      <option value="vendido" {{ old('status', $imovel->status ?? '') == 'vendido' ? 'selected' : '' }}>Vendido</option>
                      <option value="indisponivel" {{ old('status', $imovel->status ?? '') == 'indisponivel' ? 'selected' : '' }}>Indisponível</option>
                      <option value="em_manutencao" {{ old('status', $imovel->status ?? '') == 'em_manutencao' ? 'selected' : '' }}>Em Manutenção</option>
                  </select>
              </div>
              <br>

              <div class="flex justify-end">
                  <button type="submit" class="px-4 py-2 bg-[#fd7b1e] text-white rounded-md shadow-sm  focus:outline-none focus:border-[#fd7b1e] focus:ring-[#fd7b1e]">
                     Atualizar
                  </button>
              </div>
          </form>
      </div>
  </div>
</main>
