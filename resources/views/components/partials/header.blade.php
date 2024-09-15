
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<header class="header-main">
  <div class="desktop-header">
   <div class="Logo"><a  href="{{ url('/dashboard') }}"><h1>LocalSmart</h1></a></div>
  <div class="navagation">
   <nav>
     <ul>
       <li><a href="">Inicio</a></li>
       <li><a href="">Contato</a></li>
     </ul>
   </nav>
  </div>
  <div class="links-login-and-register">
   
   @if (Route::has('login'))
   
      @auth
          <a
              href="{{ url('/dashboard') }}"
              class=""
              id="login" 
          >
             Logado
          </a>
      @else
          <a
              href="{{ route('login') }}"
              class=""
              id="login" 
          >
           Fazer Login
          </a>

          @if (Route::has('register'))
              <a
                  href="{{ route('register') }}"
                  class=""
                   id="register"
              >
              Registrar
              </a>
          @endif
      @endauth

@endif
  </div>
  </div>
  <!---Mobile menu-->
  <div class="header-mobile">
 <div class="menu">
   <div class="Logo"><a  href="{{ url('/dashboard') }}"><h1>LocalSmart</h1></a></div>
   <button id="btn-menu"><i class="bi bi-list icone-menu"></i></button>
 </div>
 <div class="navagation-mobile">
   <div class="navagation">
     <nav>
       <ul>
         <li><a href="">Inicio</a></li>
         <li><a href="">Contato</a></li>
       </ul>
     </nav>
    </div>
    <div class="links">
      @if (Route::has('login'))
   
      @auth
          <a
              href="{{ url('/dashboard') }}"
              class=""
          >
             Logado
          </a>
      @else
          <a
              href="{{ route('login') }}"
              class=""
          >
           Fazer Login
          </a>

          @if (Route::has('register'))
              <a
                  href="{{ route('register') }}"
                  class=""
              >
              Registrar
              </a>
          @endif
      @endauth

@endif
    </div>
 </div>
  </div>
 </header>
 <!---Header end-->