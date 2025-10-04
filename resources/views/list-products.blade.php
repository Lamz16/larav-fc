@foreach ($products as $product)
    Name : {{ $product->name }} <br>
    Description : {{ $product->descripton }} <br>
    Price : {{ $product->price_formatted }} <br>
    Seller : {{ $product->user->formatted_name }} <br>
    <br>
@endforeach
