<!-- Contract Component -->
<br>
<div class="w-full overflow-hidden rounded-lg shadow-md mb-6 ml-2 mr-2">
    <a href="{{ route('admin.addcontralto') }}"
    class="inline-block px-4 py-2 mb-4 text-white bg-[#fd7b1e] rounded-lg hover:bg-[#e06c1f] focus:outline-none focus:ring-2 focus:ring-[#fd7b1e] focus:ring-opacity-50 mr-2 float-end">
    Adicionar
 </a>

 <div class="w-full overflow-x-auto bg-white rounded-lg shadow-md">
    <table class="w-full whitespace-no-wrap">
        <thead>
            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                <th class="px-4 py-3">Inquilinos</th>
                <th class="px-4 py-3">Número AP</th>
                <th class="px-4 py-3">Data Vencimento</th>
                <th class="px-4 py-3">Ações</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y">
            @foreach ($PegarTodosinqui as $inquilino)
                <tr class="text-gray-700">
                    <td class="px-4 py-3 text-sm">
                        <div class="flex items-center">
                            <div class="w-8 h-8 rounded-full mr-3">
                                <img class="object-cover w-full h-full rounded-full" 
                                     src="https://via.placeholder.com/150" 
                                     alt="Usuário {{ $inquilino['name'] }}" />
                            </div>
                            <span>{{ $inquilino['name'] }}</span>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ $inquilino['numero_ap'] }} <!-- Acessando o número do apartamento -->
                    </td>
                    <td class="px-4 py-3 text-sm">
                        {{ \Carbon\Carbon::parse($inquilino['data_fim_contrato'])->format('d/m/Y') }} <!-- Formato da data -->
                    </td>
                    <td class="px-4 py-3 text-sm">
                        <button onclick="openModal('{{ $inquilino['numero_ap'] }}', '{{ $inquilino['name'] }}', 'Contrato Padrão')" 
                                class="text-[#fd7b1e] hover:underline">
                            Ver detalhes
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>

<!----Modal---->
<!-- Modal Dinâmico -->
<div id="actionModal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
  <div class="bg-white p-6 w-full max-w-md rounded-lg shadow-lg relative">
      <!-- Botão para fechar o modal -->
      <button class="absolute top-2 right-2 text-[#fd7b1e] hover:text-[#e06c1f] font-bold text-xl" onclick="closeModal()">×</button>
      
      <!-- Conteúdo do modal -->
      <h2 id="modalTitle" class="text-xl font-bold text-gray-800 mb-4">Ações</h2>
      <p id="modalText" class="text-gray-600 mb-4">Ações disponíveis para o contrato do apartamento <span id="modalApartment"></span> e usuário <span id="modalUser"></span>.</p>

      <!-- Botões de Ações -->
      <div class="flex justify-between">
          <a id="viewLink" href="#" class="px-4 py-2 bg-[#fd7b1e] text-white rounded hover:bg-[#e06c1f]">
              Visualizar PDF
          </a>
          <a id="renewLink" href="#" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
              Renovar
          </a>
          <a id="deleteLink" href="#" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
              Deletar
          </a>
      </div>
  </div>
</div>
<script>
  function openModal(apartment, user, contract) {
    document.getElementById('modalApartment').textContent = apartment;
    document.getElementById('modalUser').textContent = user;

    // Definir os links para cada ação
    document.getElementById('viewLink').href = `/contrato/${apartment}/visualizar`;
    document.getElementById('renewLink').href = `/contrato/${apartment}/renovar`;
    document.getElementById('deleteLink').href = `/contrato/${apartment}/deletar`;

    // Mostrar o modal
    document.getElementById('actionModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('actionModal').classList.add('hidden');
}

</script>
