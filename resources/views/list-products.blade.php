@foreach ($products as $product)
Name : {{ $product -> name }} <br>
Description : {{ $product -> descripton }} <br>
Price : {{ formatRupiah($product -> price) }} <br>
Seller : {{ $product->user->name }} <br>
<br>
@endforeach