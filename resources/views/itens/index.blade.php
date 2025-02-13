@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

<x-layout titulo="My Brechó - Admin">
    <main>
        <h1 class="title">Administrador</h1>
        <div class="container">

            <div class="container mt-4">
          
            <a href="/itens/novo" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">+ Novo Item</a>
            <br>
            <br>
            <form action="/relatorio">
                <input type="submit" class="btn btn-success" role="button" value="Gerar Relatório">
            </form>
            <br>
            <table class="table">
            <thead>
                <tr class="table-info">
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Classificação</th>
                <th scope="col">Preço</th>        
                <th scope="col">Preço (Novo)</th>
                <th scope="col">Tempo de Uso</th>
                <th scope="col">Danos</th>
                <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($itens as $item)
                <tr>
                    <th scope="row">{{ $item->id }}</th>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->classificacao }}</td>
                    <td>{{ $item->preco }}</td>
                    <td>{{ $item->preco_novo }}</td>
                    <td>{{ $item->tempo_de_uso }}</td>
                    <td>{{ $item->danos }}</td>
                    <td>
                    <a href="/itens/editar/id={{ $item->id }}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Alterar</a>
                    <form action="/itens/excluir" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" id="id" value="{{ $item->id }}">
                    <input type="submit" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true" value="Excluir">
                    </form>
                    </td>
                </tr>
                @endforeach       
            </tbody>
            </table>
            </div>
    </main>
</x-layout>