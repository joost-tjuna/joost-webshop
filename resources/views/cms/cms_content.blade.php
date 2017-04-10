@extends('layouts.cms')

@section('cms-content')
<div class="container-fluid">
    <div class="row">
        <main class="col-sm-9 offset-sm-1 col-md-10  pt-3">
            <h2 class="margin-title">Producten</h2>
            <a href="/admin/new-product" class="btn btn-primary cms-button" role="button" aria-disabled="true">Nieuw product</a>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>Foto</th>
                        <th>Naam</th>
                        <th>Beschrijving</th>
                        <th>Prijs</th>
                        <th>Edit</th>
                    </tr>
                    @foreach($products as $product)
                        <tr>
                            <th><img style="height: 80px;width: 86px;" src="{{asset('images/'.$product->picture)}}"></th>
                            <th>{{$product->name }}</th>
                            <th>{{$product->description }}</th>
                            <th>€{{$product->price }}</th>
                            <th>
                                <a style="padding-right: 25px; margin-bottom:6px;" class="btn btn-secondary" href="/admin/update/{{$product->id}}">aanpassen</a>
                                <a class="btn btn-secondary"href="/admin/delete/{{$product->id}}">Verwijderen</a>
                            </th>
                        </tr>
                    @endforeach
                </table>
            </div>
        </main>
    </div>
</div>
@endsection