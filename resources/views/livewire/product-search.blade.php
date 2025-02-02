<div>
    <input wire:model.debounce.500ms="search" type="text" placeholder="Buscar..." class="form-control">

    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->descricao }}</td>
                    <td>{{ $product->preco }}</td>
                    <td>{{ $product->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>