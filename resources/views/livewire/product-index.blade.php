<div class="row">
    <div class="col-md-12 mx-auto mb-3">
        <input type="text" wire:model="search" class="form-control" placeholder="Type name product in here">
    </div>

    @foreach ($products as $prd)
        <div class="col-md-3 mt-2 mb-4">
            <div class="card shadow">
                <div class="card-body">
                  <h5 class="card-title">{{ $prd->name }}</h5>
                  <p class="card-text">{{ $prd->description }}</p>
                  <button wire:click="addToCart({{ $prd->id }})" type="button" class="btn btn-dark">add to cart</button>
                </div>
            </div>
        </div>
    @endforeach

    <div class="col-md-12">
        {{ $products->links() }}
    </div>
</div>
