<form action="/api/products" method="post"> 
    {{csrf_field()}}
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="description" placeholder="Description">
    <select name="item_id" id="Item Id">
        @foreach
            <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
    </select>
    <input type="date" name="end_date" placeholder="End_date">
    <select name="status" placeholder="status">
        <option value="1">Open</option>
        <option value="0">Closed</option>
    </select>
    <input type="submit" value="Ok">
</form>