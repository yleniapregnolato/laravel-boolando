<div class="card rounded-0 border-0 ms_product">
    <div>
         @foreach ($product['badges'] as $badge)
            <span class="{{ stripos($badge['value'], 'Sostenibilità') !== false ? 'ms_green' : 'ms_red' }}">{{ $badge['value'] }}</span>
        @endforeach
    </div>
    <div>
        <img class="img-fluid" src="{{ Vite::asset('resources/img/' . $product['frontImage']) }}" alt="front-image">
        <p class="m-0">{{ $product['brand'] }}</p>
        <p class="fw-bold">{{ $product['name'] }}</p>
    </div>
</div>
