<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      type="imagex/png"
      href="./img/icons/.ico"
    />
    <title>{{ $titulo }}</title>
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}"/>
    @yield('css')
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous"
    />
    <style>

      #navtitle {
        color: #353535;
      }

      .title {
        font-family: "Permanent Marker", cursive;
        text-align: center;
        color: white;
      }

      body {
        --bs-bg-opacity: 1;
        background-color: #353535 !important;
      }

      #principal {
        margin-top: 60px !important;
      }

      .form-signin {
        max-width: 330px;
        padding: 1rem;
      }

      .form-signin .form-floating:focus-within {
        z-index: 2;
      }

      .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
      }

      .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }


      .btn-primary {
            --bd-violet-bg: #FEEAFA;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-black);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-black);
            --bs-btn-hover-bg: #E0A6C7;
            --bs-btn-hover-border-color: #E0A6C7;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #D187A9;
            --bs-btn-active-border-color: #D187A9;
        }

        .btn-secondary {
            --bd-violet-bg: #8E9AAF;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-black);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-black);
            --bs-btn-hover-bg: #7A8296;
            --bs-btn-hover-border-color: #7A8296;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #6B7284;
            --bs-btn-active-border-color: #6B7284;
        }

        .btn-success {
            --bd-violet-bg: #DEE2FF;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-black);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-black);
            --bs-btn-hover-bg: #BCC7F5;
            --bs-btn-hover-border-color: #BCC7F5;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #A3B3E8;
            --bs-btn-active-border-color: #A3B3E8;
        }

        .btn-danger {
            --bd-violet-bg: #EFD3D7;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-black);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-black);
            --bs-btn-hover-bg: #D4A8A2;
            --bs-btn-hover-border-color: #D4A8A2;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #C07F7B;
            --bs-btn-active-border-color: #C07F7B;
        }

        .btn-warning {
            --bd-violet-bg: #CBC0D3;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-black);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-black);
            --bs-btn-hover-bg: #A79FB7;
            --bs-btn-hover-border-color: #A79FB7;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #8C7E9E;
            --bs-btn-active-border-color: #8C7E9E;
        }

        .btn-info {
            --bd-violet-bg: #FAC9F0;
            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-black);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-black);
            --bs-btn-hover-bg: #F0A1D5;
            --bs-btn-hover-border-color: #F0A1D5;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #E881C0;
            --bs-btn-active-border-color: #E881C0;
        }

        .table-info {
            --bs-table-color: #000;
            --bs-table-bg: #FAC9F0;
            color: var(--bs-table-color);
            border-color: var(--bs-table-border-color);
        }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #FEEAFA !important;">
      <div class="container-fluid">
        <img
              class="imgnav"
              src="./public/img/icons/tanjiro-profile-removebg.png"
              alt=""
            />
        <a class="navbar-brand" id="navtitle" href="">My Brechó</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" id="navitem" href="./vitrine.html">Vitrine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="navitem" href="./cadastrarItens.html">Cadastrar Itens</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" id="navitem" href="./admin.html">Administrador</a>
            </li>
              <a class="btn btn-outline-dark" href="./login.html">Login</a>
            </ul>
        </div>
      </div>
    </nav>
    
    {{ $slot }}    

    <script src="./public/js/index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>