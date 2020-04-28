<div class="row">   
    <div class="col-md-12">
        <h4>
            Shopping Cart :
            @if ($cart['products'])
            <div class="float-right">
                <button wire:click="checkout" class="btn btn-outline-dark">Checkout</button>
            </div>
            @endif
        </h4>
        <div class="table-responsive mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="text-left">Product</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cart['products'] as $prd)
                    <tr>
                        <td class="text-left">{{ $prd->name }}</td>
                        <td class="text-center">{{ $prd->price }}</td>
                        <td class="text-center">
                        <button wire:click="removeItem({{ $prd->id }})" class="btn btn-sm btn-outline-danger">Remove</button>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="4">
                            Shopping cart has empty 
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
