@foreach ($products as $product)
    <form action="/api/products/{{$product->id}}" method="post">
    {{csrf_field()}}
    {{method_field('GET')}}
    <div class="form-group">
        <input type="submit" value="{{$product->item_id}}">
    </div>
    </form>
@endforeach