<div class="card rounded-0 border-0">
    <div>
        <img class="img-fluid" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="front-image">
        <p class="m-0">{{ $product['brand'] }}</p>
        <p class="fw-bold">{{ $product['name'] }}</p>  
    </div>   
</div>