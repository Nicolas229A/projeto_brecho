<form action="{{ $action }}" method="post" enctype="multipart/form-data">
                  @csrf
                  @isset($item->id)
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $item->id }}"
                  @endisset 
                  <br />
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text" 
                        @isset($item->nome) value="{{ $item->nome }}" @endisset 
                        class="form-control" name="nome" id="nome" placeholder=" " required />
                        <label for="nome">Nome</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text"
                        @isset($item->especificacoes) value="{{ $item->especificacoes }}" @endisset 
                        class="form-control" name="especificacoes" id="especificacoes" placeholder=" " required />
                        <label for="especificacoes">Especificações</label>
                      </div>
                    </div>
                  </div>

                  <div class="floating-select mb-4">
                    <select class="form-select" name="classificacao" id="classificacao" required>
                        <option disabled>--Selecione a Classificação--</option>
                        <option value="Aparelho Eletrônico" @isset($item->classificacao) @selected($item->classificacao == "Aparelho Eletrônico") @endisset>Aparelho Eletrônico</option>
                        <option value="Brinquedo" @isset($item->classificacao) @selected($item->classificacao == "Brinquedo") @endisset>Brinquedo</option>
                        <option value="Para Cozinha" @isset($item->classificacao) @selected($item->classificacao == "Para Cozinha") @endisset>Para Cozinha</option>
                        <option value="Móvel" @isset($item->classificacao) @selected($item->classificacao == "Móvel") @endisset>Móvel</option>
                        <option value="Roupa" @isset($item->classificacao) @selected($item->classificacao == "Roupa") @endisset>Roupa</option>
                        <option value="Miscelânea" @isset($item->classificacao) @selected($item->classificacao == "Miscelânea") @endisset>Miscelânea</option>
                    </select>
                        <label for="classificacao">Classificação</label>
                    </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="number" 
                        @isset($item->preco) value="{{ $item->preco }}" @endisset
                        name="preco" id="preco" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="preco">Preço</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="number"
                        @isset($item->preco_novo) value="{{ $item->preco_novo }}" @endisset 
                        name="preco_novo" id="preco_novo" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="preco_novo">Preço (Novo)</label>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text"
                        @isset($item->tempo_de_uso) value="{{ $item->tempo_de_uso }}" @endisset
                         name="tempo_de_uso" id="tempo_de_uso" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="tempo_de_uso">Tempo de Uso</label>
                      </div>
                    </div>

                    <div class="col-md-6 mb-4">
                      <div data-mdb-input-init class="form-floating-custom">
                        <input type="text"
                        @isset($item->danos) value="{{ $item->danos }}" @endisset 
                        name="danos" id="danos" step="0.01" min="0" class="form-control" placeholder=" " required />
                        <label for="danos">Danos</label>
                      </div>
                    </div>
                  </div>
                
                  <div class="row">
                    <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-floating-custom">
                          <input type="text"
                          @isset($item->link) value="{{ $item->link }}" @endisset 
                          name="link" id="link" step="0.01" min="0" class="form-control" placeholder=" " required />
                          <label for="link">Link</label>
                        </div>
                      </div>

                      <div class="col-md-6 mb-4">
                        <div data-mdb-input-init class="form-floating-custom">
                        <input type="file" class="form-control" name="foto" id="foto" accept="image/*" @isset($item->foto) @endisset / required>
                        <label for="foto">Foto do Produto</label>
                    </div>

                        @isset($item->foto)
                        <div class="card mt-3 text-center shadow-sm p-3 bg-white rounded">
                            <p class="fw-bold mb-2">Foto Atual</p>
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto do Produto" class="img-fluid rounded" style="max-width: 200px;">
                        </div>
                        @endisset
                    </div>
                </div>

                  <button type="submit" class="btn btn-success">{{ $submit }}</button>
                  <a href="/itens" class="btn btn-secondary" tabindex="-1" role="button" aria-disabled="true">Voltar para o Administrador</a>
                </form>