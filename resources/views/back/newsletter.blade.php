@extends('back.template')

@section('content')

<div class="container">
    <div class=" col-md-12 col-md-offset-2 custyle">
        <table class="table table-striped custab">
            <thead>
            <a href="#" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new categories</a>
            <tr>
                <th>ID</th>
                <th>Mail</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->mail}}</td>
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="#">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </a>
                        <a href="#" class="btn btn-danger btn-xs">
                            <span class="glyphicon glyphicon-remove"></span> Del
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection