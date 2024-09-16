<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('', ' Painel Gerente ') }}</title>
 <style>
  .background{
    background: #001933;
  }
 </style>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    

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
                  <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">
                      Inicio
                  </a>
                  <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">
                      Apartamentos
                  </a>
                  <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">
                     Inquilinos
                  </a>
                  <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">
                      Pagamentos
                  </a>
                  <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">
                      Manutenção
                  </a>
                  <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white">
                      Relatórios
                  </a>

                  <a href="{{route('admin.adicionar')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white
                  {{ Request::is('admin/adicionar') ? 'bg-[#fd7b1e] text-white' : '' }}
                  ">
                  Adicionar Ap
                </a>
              </nav>
          </nav>
  
          <!-- Main Content -->
          <div class="flex-1 flex flex-col overflow-hidden">
              <!-- Top bar -->
            @include('layouts.navigation')
              <!-- Main content -->
              @if(isset($componente))
              @include('components.partials.adminCP.adicionar')
          @else
          <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
            <div class="container mx-auto px-6 py-8">
                <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
                    <!-- Card 1 -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">
                                Total de inquilinos
                            </p>
                            <p class="text-lg font-semibold text-gray-700">64</p>
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
                            <p class="mb-2 text-sm font-medium text-gray-600">Receita mensal</p>
                            <p class="text-lg font-semibold text-gray-700">R$54,230</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">Solicitações de manutenção abertas</p>
                            <p class="text-lg font-semibold text-gray-700">15</p>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="flex items-center p-4 bg-white rounded-lg shadow-md">
                        <div class="p-3 mr-4 bg-[#fd7b1e] text-white rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <p class="mb-2 text-sm font-medium text-gray-600">Próximas renovações de arrendamento</p>
                            <p class="text-lg font-semibold text-gray-700">8</p>
                        </div>
                    </div>
                </div>

                <!-- Charts -->
                <div class="grid gap-6 mb-8 md:grid-cols-2">
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-md">
                        <h4 class="mb-4 font-semibold text-gray-800">Visão geral do evento</h4>
                        <canvas id="revenueChart"></canvas>
                    </div>
                    <div class="min-w-0 p-4 bg-white rounded-lg shadow-md">
                        <h4 class="mb-4 font-semibold text-gray-800">Taxa de ocupação</h4>
                        <canvas id="occupancyChart"></canvas>
                    </div>
                </div>

                <!-- Tenant List -->
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
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3">
                                        <div class="flex items-center text-sm">
                                            <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                                <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=100&h=100&q=80" alt="" loading="lazy" />
                                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                            </div>
                                            <div>
                                                <p class="font-semibold">Sarah Johnson</p>
                                                <p class="text-xs text-gray-600">sarah@example.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-3 text-sm">Apt 301</td>
                                    <td class="px-4 py-3 text-xs">
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">Active</span>
                                    </td>
                                    <td class="px-4 py-3 text-sm">01/02/2024</td>
                                    <td class="px-4 py-3 text-sm">
                                        <button class="text-[#fd7b1e] hover:underline">Ver Detalhes</button>
                                    </td>
                                </tr>
                                <!-- Add more tenant rows here -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
          @endif
             
             
          </div>
      </div>
  
      <!-- Include Chart.js -->
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
          // Revenue Chart
          var revenueCtx = document.getElementById('revenueChart').getContext('2d');
          var revenueChart = new Chart(revenueCtx, {
              type: 'line',
              data: {
                  labels: ['Jan', 'Fev', 'Mar', 'Abril', 'Mai', 'Jun'],
                  datasets: [{
                      label: 'Revenue',
                      data: [50000, 55000, 60000, 58000, 62000, 65000],
                      borderColor: '#fd7b1e',
                      tension: 0.1
                  }]
              },
              options: {
                  responsive: true,
                  scales: {
                      y: {
                          beginAtZero: true
                      }
                  }
              }
          });
  
          // Occupancy Chart
          var occupancyCtx = document.getElementById('occupancyChart').getContext('2d');
          var occupancyChart = new Chart(occupancyCtx, {
              type: 'doughnut',
              data: {
                  labels: ['Ocupação', 'Vazio'],
                  datasets: [{
                      data: [85, 15],
                      backgroundColor: ['#fd7b1e', '#e2e8f0']
                  }]
              },
              options: {
                  responsive: true,
                  plugins: {
                      legend: {
                          position: 'bottom',
                      },
                      title: {
                          display: true,
                          text: 'Taxa de ocupação'
                      }
                  }
              }
          });
      </script>
      
  </body>

</html>