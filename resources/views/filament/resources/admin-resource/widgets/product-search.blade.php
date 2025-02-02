<div>
    <input wire:model="search" type="text" placeholder="Buscar produtos..." 
        class="block w-full flex-1 py-2 px-3 mt-2 outline-none border-none rounded-md bg-slate-100" />
   
    <div class="absoulute mt-2 w-full overflow-hidden rounded-md bg-white">
        @foreach ($products as $product)
            <p class="py-2 px-3 border-b border-gray-100">{{ $product->nome }}</p>
        @endforeach
    </div>
        
</div>