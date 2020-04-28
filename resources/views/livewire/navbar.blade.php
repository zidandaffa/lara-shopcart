<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white border-bottom shadow">
    <div class="container">
       <a class="navbar-brand" href="#">Laravel Livewire</a>    
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>     
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item {{ (request()->segment(1) == '') ? 'active font-weight-bold' : '' }}">
                <a class="nav-link" data-turbolinks-action="replace" href="{{ route('home') }}">Home</a>
             </li>
             <li class="nav-item {{ (request()->segment(1) == 'products') ? 'active font-weight-bold' : '' }}">
                <a class="nav-link" data-turbolinks-action="replace" href="{{ route('product.index') }}">Product</a>
             </li>
          </ul>
          <div class="my-2 my-lg-0">
                <a class="btn btn-dark my-2 my-sm-0 text-white" data-turbolinks-action="replace" href="{{ route('cart.index') }}">
                Cart : {{ $cartTotal }}
                </a>
          </div>
       </div>
    </div>
</nav>
