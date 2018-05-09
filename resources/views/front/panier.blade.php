<div id ="tablePanier">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Code</th>
            <th scope="col">Prix</th>
            <th scope="col">Qte</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($content as $c)
            <tr>
                <td>{{$c->name}}</td>
                <td>{{$c->price}}</td>
                <td>{{$c->qty}}</td>
                <td>{{$c->qty * $c->price}} </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>