<style>
    table{
        width: 90%;
        margin: auto 0;
    }
    table, th, td{
        border: 1px solid #000;
    }

    table th{
        padding: 11px 0 11px;
        font-weight: bold;
        font-size: 18px;
        text-align: left;
        padding: 8px;
    }

    table tr{
        border: 1px solid #000;
    }

    table td{
        font-size: 18px;
        padding: 8px;
    }
    .container-admin-banner h1{
        margin-top: 40px;
        font-size: 30px;
</style>

<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Classificação</th>
        <th>Preço</th>
        <th>Preço (Novo)</th>
        <th>Tempo de Uso</th>
        <th>Danos</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($itens as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->classificacao }}</td>
            <td>{{ $item->preco }}</td>
            <td>{{ $item->preco_novo }}</td>
            <td>{{ $item->tempo_de_uso }}</td>
            <td>{{ $item->danos }}</td>
        </tr>
    @endforeach

    </tbody>
</table>
