 <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <div class="flex flex-col space-y-4">
                        <div>
                            <select wire:model="paginate" wire:change="hook" name="paginate" id="paginate">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                            </select>
                        </div>
                    </div>

                    <p>Current Paginate: {{ $paginate }}</p>
                    
                    <table class="table-auto w-full mb-6">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Gambar</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $product->product_image }}</td>
                                <td><h1 class="font-bold text-red-600">{{ $product->product_name }}</h1>
                                <p>{{ $product->description }}</p></td>
                                <td>Rp. {{ number_format($product->price,0,",",".") }}</td>
                                <td>{{ $product->stock }}</td>
                                <td><span class="d-flex ">
                                    <button class="px-4 py-1 text-sm text-white rounded-md  font-semibold dark:bg-blue-600 hover:bg-blue-200">Edit</button>
                                    <button class="px-4 py-1 text-sm text-white rounded-md  font-semibold dark:bg-red-600 hover:bg-red-200">Hapus</button>
                                </span>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
                
            </div>
        </div>
</div>

