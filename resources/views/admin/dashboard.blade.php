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
                  <a href="{{route('admin.dashboard')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white
                  {{ Request::is('admin') ? 'bg-[#fd7b1e] text-white' : '' }}
                  ">
                      Inicio
                  </a>
                  <a href="{{route('admin.todosap')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-[#fd7b1e] hover:text-white
                  {{ Request::is('admin/todosap') ? 'bg-[#fd7b1e] text-white' : '' }}
                  ">
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

                  
              </nav>
          </nav>
  
          <!-- Main Content -->
          <div class="flex-1 flex flex-col overflow-hidden">
              <!-- Top bar -->
            @include('layouts.navigation')
           <!-- Main content -->
@if(isset($componente))
@include('components.partials.adminCP.adicionar')
@elseif(isset($apartamentosTodos))
{{-- Exibe o conteúdo da variável $apartamentosTodos --}}
@include('components.partials.adminCP.todosApartamentos', ['dadosImoveis' => $imoveis])
@elseif(isset($imovel))
@include('components.partials.adminCP.editar' , ['imovel' => $imovel])
@else
{{-- Inclui o componente padrão caso $apartamentosTodos não esteja definido --}}
@include('components.partials.adminCP.mainContent')
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