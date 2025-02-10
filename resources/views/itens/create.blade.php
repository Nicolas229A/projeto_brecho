@section('css')
    <link rel="stylesheet" href="{{ asset('css/cadastrar.css') }}">
@endsection

<x-layout titulo="My Brechó - Cadastrar Item">
    <main>
        <h1 class="title">Cadastrar</h1>
      <section class="text-center">
        <div class="bg-image" style="height: 300px; background-repeat: no-repeat; background-position: center; background-size: cover;"></div>

        <div class="card mx-4 mx-md-5 shadow-5-strong bg-body-tertiary" style="margin-top: -250px; backdrop-filter: blur(30px);">
          <div class="card-body py-5 px-md-5 color-form">
            <div class="row d-flex justify-content-center">
              <div class="col-lg-8">
                <h2>Novo Item</h2>
                <form action="/itens/salvar" method="post" enctype="multipart/form-data">
                  @csrf 
                  <br />
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder=" " required />
                        <label for="nome">Nome</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text" class="form-control" name="especificacoes" id="especificacoes" placeholder=" " required />
                        <label for="especificacoes">Especificações</label>
                      </div>
                    </div>
                  </div>

                  <div class="floating-select mb-4">
                    <select class="form-select" name="classificacao" id="classificacao" required>
                      <option selected>--Selecione a Classificação--</option>
                      <option value="Aparelho Eletrônico">Aparelho Eletrônico</option>
                      <option value="Brinquedo">Brinquedo</option>
                      <option value="Para Cozinha">Para Cozinha</option>
                      <option value="Móvel">Móvel</option>
                      <option value="Roupa">Roupa</option>
                      <option value="Miscelânea">Miscelânea</option>
                    </select>
                    <label for="classificacao">Classificação</label>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="number" name="preco" id="preco" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="preco">Preço</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="number" name="preco_novo" id="preco_novo" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="preco_novo">Preço (Novo)</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text" name="tempo_de_uso" id="tempo_de_uso" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="tempo_de_uso">Tempo de Uso</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text" name="danos" id="danos" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="danos">Danos</label>
                      </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-floating-custom">
                          <input type="text" name="link" id="link" step="0.01" min="0" class="form-control" placeholder=" " required />
                          <label for="link">Link</label>
                        </div>
                      </div>

                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-floating-custom">
                      <input type="file" class="form-control" name="foto" id="foto" accept="image/*" required />
                      <label for="foto">Foto do Produto</label>
                    </div>
                  </div>
                  </div>

                  <button type="submit" class="btn btn-success">Cadastrar Item</button>
                  <a href="../index.php" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Voltar para o Administrador</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

</x-layout>
