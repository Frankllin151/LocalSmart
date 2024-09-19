 <!-- Tenant List -->


 @if($inquilinos->isEmpty())
 <div class="flex justify-center bg-yellow-400 text-white font-bold p-4 mb-4">
    <p>Você não tem nenhum inquilino</p>
    
</div>
   @else
 <div class="w-full overflow-hidden rounded-lg shadow-md">
    <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
            <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                    <th class="px-4 py-3">Inquilinos</th>
                    <th class="px-4 py-3">Apartamento</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Pagamento Recente</th>
                    <th class="px-4 py-3">Ação</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y">
                @foreach($inquilinos as $inquilino)
                <tr class="text-gray-700">
                    <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                <img class="object-cover w-full h-full rounded-full" 
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&h=100&q=80" 
                                     alt="" 
                                     loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                                <p class="font-semibold">{{ $inquilino->user->name }}</p>
                                <p class="text-xs text-gray-600">{{ $inquilino->user->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-4 py-3 text-sm">{{ $inquilino->imovel->numero_ap }}</td>
                    <td class="px-4 py-3 text-xs">
                        <span class="px-2 py-1 font-semibold leading-tight 
                                     text-green-700 bg-green-100
                                      rounded-full">
                            {{ ucfirst($inquilino->status) }}
                        </span>
                    </td>
                    <td class="px-4 py-3 text-sm">{{ ucfirst($inquilino->pagamento_recente) }}</td>
                    <td class="px-4 py-3 text-sm">
                        <button class="text-[#fd7b1e] hover:underline">Ver Detalhes</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>
  @endif