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
                <x-itens.form action="/itens/salvar" submit="Cadastrar Item"/>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

</x-layout>
