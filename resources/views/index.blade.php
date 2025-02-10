@section('css')
    <link rel="stylesheet" href="{{ asset('css/vitrine.css') }}">
@endsection

<x-layout titulo="My Brechó - Vitrine">
    <main>
      <h1 class="title">Vitrine</h1>

      <div id="rapaz" class="album py-5">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($vitrine as $item)
            <div class="col">
              <div class="card shadow-sm">
                <div class="card-header" id="cardCabecalho">
                {{ $item->classificacao }}
                </div>
                <img class="charactersprofile" src="{{ asset('storage/'.$item['foto']) }}">
                <div class="card-body">
                  <a class="name">{{ $item->nome }}</a>
                  <p class="card-text" id="cardDescricao">Especificações: {{ $item->especificacoes }}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" id="cardItens">Preço: R$ {{ $item->preco }}</li>
                  <li class="list-group-item" id="cardItens">Preço (Novo): R$ {{ $item->preco_novo }}</li>
                  <li class="list-group-item" id="cardItens">Tempo de Uso: {{ $item->tempo_de_uso }}</li>
                  <li class="list-group-item" id="cardItens">Danos: {{ $item->danos }}</li>
                </ul>
                <div class="card-body">
                  <a href="{{ $item->link }}" class="card-link" id="cardLink">Link para comprar um novo</a>
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
        </div>

    </main>

</x-layout>