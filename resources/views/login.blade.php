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
    <title>My Brechó</title>
    <link rel="stylesheet" href="./css/navbar.css"/>
    <link rel="stylesheet" href="./css/login.css"/>
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
  <h1 class="title">Login</h1>
  <div class="d-flex align-items-center py-4 bg-body-tertiary" id="principal">
    <main class="form-signin w-100 m-auto">
      <form action="" method="post">
        <div class="form-floating">
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
          <label for="nome">Nome</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email">
          <label for="email">Email</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="date" class="form-control" id="data" name="data" placeholder="Data de Nascimento">
          <label for="data">Data de Nascimento</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
          <label for="senha">Senha</label>
        </div>
        <input class="btn btn-primary w-100 py-2" type="submit" value="Entrar">
      </form>
      <br>
    </main>
  </div>
</body>
<script src="./public/js/index.js"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"
  ></script>
</html>