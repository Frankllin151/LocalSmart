<!-- Apartment List -->
<br>
<div class="w-full overflow-hidden rounded-lg shadow-md">
    <div class="w-full overflow-x-auto">
        <!-- Adicionar link estilizado -->
        <a href="{{ route('admin.adicionar') }}"
           class="inline-block px-4 py-2 mb-4 text-white bg-[#fd7b1e] rounded-lg hover:bg-[#e06c1f] focus:outline-none focus:ring-2 focus:ring-[#fd7b1e] focus:ring-opacity-50 mr-2 float-end">
           Adicionar
        </a>

        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                    <th class="px-4 py-3">Imagem</th>
                    <th class="px-4 py-3">Título</th>
                    <th class="px-4 py-3">Preço</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Data de Adição</th>
                    <th class="px-4 py-3">Ação</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                @foreach($dadosImoveis as $imovel)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3">
                            <img class="object-cover w-20 h-20 rounded-md" 
                            src="{{ asset('/images/' . basename($imovel->foto1)) }}" 
                                 alt="Imagem do apartamento" 
                                 loading="lazy" />
                               
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $imovel->titulo }}</td>
                        <td class="px-4 py-3 text-sm">R$ {{ number_format($imovel->price, 2, ',', '.') }}</td>
                        <td class="px-4 py-3 text-xs">
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Disponível</span>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $imovel->created_at->format('d/m/Y') }}</td>
                        <td class="px-4 py-3 text-sm">
                            <button class="text-[#fd7b1e] hover:underline" onclick="openModal({{ $imovel->id }})">Ver Detalhes</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal para Ver Detalhes -->
<div id="modal" class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-6 w-full max-w-md rounded-lg shadow-lg relative">
        <!-- Botão para fechar o modal -->
        <button class="absolute top-2 right-2 text-[#fd7b1e] hover:text-[#e06c1f] font-bold text-xl" onclick="closeModal()">×</button>
        
        <!-- Conteúdo do modal -->
        <h2 class="text-xl font-bold text-gray-800 mb-4">Tem certeza disso?</h2>
        <p id="modalText" class="text-gray-600 mb-4">Deseja realizar alguma ação?</p>

        <!-- Botões de ação -->
        <div class="flex justify-end space-x-4">
            <!-- Botão Cancelar -->
            <button class="px-4 py-2 bg-gray-200 text-gray-800 rounded hover:bg-gray-300" onclick="closeModal()">Cancelar</button>

            <!-- Botão Editar -->
            <form id="editForm" method="GET" class="inline">
                @csrf
                
                <button type="submit" class="px-4 py-2 bg-[#fd7b1e] text-white rounded hover:bg-[#e06c1f]">
                    Editar
                </button>
            </form>

            <!-- Botão Excluir -->
            <form id="deleteForm" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                    Excluir
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    // Função para abrir o modal
    function openModal(id) {
        const modal = document.getElementById('modal');
        const modalText = document.getElementById('modalText');
        modalText.textContent = `Você está prestes a editar ou excluir o imóvel de ID ${id}.`;
        modal.classList.remove('hidden');
        modal.classList.add('flex');

        // Atualiza a rota do formulário de edição com o ID
        const editForm = document.getElementById('editForm');
        editForm.action = `/admin/${id}/editar`;

        // Atualiza a rota do formulário de exclusão com o ID
        const deleteForm = document.getElementById('deleteForm');
        deleteForm.action = `/admin/${id}/excluir`;

        // Animação de entrada
        setTimeout(() => {
            modal.querySelector('.bg-white').style.transform = 'translateY(0)';
            modal.querySelector('.bg-white').style.opacity = '1';
        }, 10);
    }

    // Função para fechar o modal
    function closeModal() {
        const modal = document.getElementById('modal');
        
        // Animação de saída
        modal.querySelector('.bg-white').style.transform = 'translateY(-20px)';
        modal.querySelector('.bg-white').style.opacity = '0';

        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300); // Tempo para a animação de saída
    }
</script>
