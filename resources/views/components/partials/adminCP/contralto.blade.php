<!-- Contract Component -->
<br>
<div class="w-full overflow-hidden rounded-lg shadow-md mb-6 ml-2 mr-2">
  <div class="w-full overflow-x-auto  bg-white rounded-lg shadow-md">
      <table class="w-full whitespace-no-wrap">
          <thead>
              <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                <th class="px-4 py-3">Usuário</th>  
                <th class="px-4 py-3">Numero AP</th>
                  <th class="px-4 py-3">Contrato</th>
                  <th class="px-4 py-3">Data vencimento</th>
                  <th class="px-4 py-3">Ações</th>
              </tr>
          </thead>
          <tbody class="bg-white divide-y">
              <!-- Repetir esta linha para cada contrato -->
              <tr class="text-gray-700">
                 <!-- Coluna com imagem e nome do usuário -->
                 <td class="px-4 py-3 text-sm">
                  <div class="flex items-center">
                      <div class="w-8 h-8 rounded-full mr-3">
                          <img class="object-cover w-full h-full rounded-full" 
                               src="https://via.placeholder.com/150" 
                               alt="Usuário João Silva" />
                      </div>
                      <span>João Silva</span>
                  </div>
              </td>
                  <td class="px-4 py-3 text-sm">Apt 305</td>
                  <td class="px-4 py-3 text-sm">Contrato Padrão</td>
                  <td class="px-4 py-3 text-sm">19/09/2025</td>
                  <td class="px-4 py-3 text-sm">
                   <button onclick="openModal('305', 'João Silva', 'Contrato Padrão')" class="text-[#fd7b1e] hover:underline">Ver detalhes</button>
                  </td>
              </tr>
              <!-- Fim da repetição -->
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
