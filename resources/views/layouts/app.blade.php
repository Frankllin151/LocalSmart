<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'LocalSmart') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <style>
            .background{
              background: #001933;
            }
          </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
        <body class="bg-gray-100 font-sans">
            <div class="min-h-screen flex">
                <!-- Sidebar -->
                <nav class="background text-white w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
                    <div class="flex items-center space-x-2 px-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span class="text-2xl font-bold">LocalSmart</span>
                    </div>
                    <nav>
                      <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">Visão Geral</a>
                      <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">Histórico de Pagamentos</a>
                      <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">Pedir Manutenção</a>
                      <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">Notificações</a>
                      <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">Perfil do Usuário</a>
                      <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">Contratos e Documentos</a>
                    </nav>
                </nav>
        
                <!-- Main Content -->
                <div class="flex-1 flex flex-col overflow-hidden">
                    <!-- Top bar -->
                    @include('layouts.navigation')
        
                    <!-- Main content -->
                   <!-- Main content -->
        <main id="main-painel" class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
          <div class="container mx-auto px-6 py-8">
              <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                  <!-- Card 1 -->
                  <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                      <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                          </svg>
                      </div>
                      <div>
                          <p class="mb-2 text-sm font-medium text-gray-600">Pagamentos Atrasados</p>
                          <p class="text-lg font-semibold text-gray-700">R$1,230</p>
                      </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                      <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                      </div>
                      <div>
                          <p class="mb-2 text-sm font-medium text-gray-600">Pagamentos Totais</p>
                          <p class="text-lg font-semibold text-gray-700">R$3,456</p>
                      </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                      <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                          </svg>
                      </div>
                      <div>
                          <p class="mb-2 text-sm font-medium text-gray-600">Mensagens</p>
                          <p class="text-lg font-semibold text-gray-700">15 Novas</p>
                      </div>
                  </div>
                  <!-- Card 4 -->
                  <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                      <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-3-3v6" />
                          </svg>
                      </div>
                      <div>
                          <p class="mb-2 text-sm font-medium text-gray-600">Tarefas Pendentes</p>
                          <p class="text-lg font-semibold text-gray-700">8</p>
                      </div>
                  </div>
              </div>
              <!--historico de pagamento-->
              <div class="bg-white rounded-lg shadow-md p-6 mb-8">
                <h3 class="text-lg font-semibold mb-4">Histórico de Pagamentos</h3>
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                            <th class="px-4 py-2">Data</th>
                            <th class="px-4 py-2">Valor</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Descrição</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        <tr>
                            <td class="px-4 py-2">01/09/2024</td>
                            <td class="px-4 py-2">R$ 1.200</td>
                            <td class="px-4 py-2 text-green-600">Pago</td>
                            <td class="px-4 py-2">Aluguel de Setembro</td>
                        </tr>
                        <tr>
                            <td class="px-4 py-2">15/08/2024</td>
                            <td class="px-4 py-2">R$ 1.200</td>
                            <td class="px-4 py-2 text-red-600">Atrasado</td>
                            <td class="px-4 py-2">Aluguel de Agosto</td>
                        </tr>
                        <!-- Add more payment history rows here -->
                    </tbody>
                </table>
            </div>
        <!---historico de pagamento end-->
        
         <!----Notificação-->
         <div class="bg-white rounded-lg shadow-md p-6 mb-8">
          <h3 class="text-lg font-semibold mb-4">Notificações</h3>
          <div class="space-y-4">
              <!-- Notification 1 -->
              <div class="flex items-center p-4 bg-blue-50 border border-blue-200 rounded-lg">
                  <div class="p-3 mr-4 bg-blue-500 text-white rounded-full">
                      <!-- Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h16v16H4V4z" />
                      </svg>
                  </div>
                  <div>
                      <p class="text-sm font-medium text-gray-800">Novo Aluguel</p>
                      <p class="text-sm text-gray-600">Você tem um novo contrato de aluguel.</p>
                      <p class="text-xs text-gray-400">02/09/2024</p>
                  </div>
              </div>
              <!-- Notification 2 -->
              <div class="flex items-center p-4 bg-yellow-50 border border-yellow-200 rounded-lg">
                  <div class="p-3 mr-4 bg-yellow-500 text-white rounded-full">
                      <!-- Icon -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m0-3h-3" />
                      </svg>
                  </div>
                  <div>
                      <p class="text-sm font-medium text-gray-800">Pagamento Pendente</p>
                      <p class="text-sm text-gray-600">Você tem um pagamento pendente.</p>
                      <p class="text-xs text-gray-400">01/09/2024</p>
                  </div>
              </div>
              <!-- Add more notifications here -->
          </div>
        </div>
        
          <!----Notificação end-->

          
          </div>
        </main>
        <main id="profile">
            {{$slot}}
        </main>
                </div>
            </div>
       
           
    </body>
    <script>
// Função para verificar a URL atual e alterar o display dos elementos
function updateDisplayBasedOnURL() {
    // Obtém a URL atual
    const currentURL = window.location.href;

    // Obtém os elementos pelo ID
    const profileElement = document.getElementById('profile');
    const dashboardElement = document.getElementById('dashboard');
    const mainPainelElement = document.getElementById('main-painel');

    // Verifica se a URL contém '/profile'
    if (currentURL.includes('/profile')) {
        if (profileElement) {
            profileElement.style.display = 'block';
        }
        if (mainPainelElement) {
            mainPainelElement.style.display = 'none';
        }
    }
    // Verifica se a URL contém '/dashboard'
    else if (currentURL.includes('/dashboard')) {
        if (dashboardElement) {
            dashboardElement.style.display = 'block';
        }
        if (profileElement) {
            profileElement.style.display = 'none';
        }
    }
    // Caso não corresponda a nenhuma URL específica
    else {
        if (profileElement) {
            profileElement.style.display = 'none';
        }
        if (dashboardElement) {
            dashboardElement.style.display = 'none';
        }
        if (mainPainelElement) {
            mainPainelElement.style.display = 'block';
        }
    }
}

// Chama a função para atualizar o display com base na URL atual
updateDisplayBasedOnURL();

    </script>
</html>
