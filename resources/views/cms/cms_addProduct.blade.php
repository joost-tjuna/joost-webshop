@extends('layouts.cms')

@section('cms-content')
<div class="container">
    <div class="row col-md-12">
        <div class="col-md-8 new-product">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>New product</h1>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/admin/new-product')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="name" class="col-md-3 control-label">Naam</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
                            </div>
                        </div>

                        <!-- - - - - - - - - - - - - - - - - - - - - - - Stock (Voorraad) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="stock-price" >
                            <div class="form-group cms_stock">
                                <label for="stock" class="col-md-3 control-label">Stock</label>

                                <div class="col-md-6">
                                    <input style="width:70px;" id="stock" type="number" class="form-control" name="stock" required >
                                </div>
                            </div>

                            <!-- - - - - - - - - - - - - - - - - - - - - - - Price (Prijs) - - -  - - - - - - - - - - - - - - - - - - - -->
                            <div class="form-group">
                                <label for="price" class="col-md-3 control-label">Prijs</label>

                                <div class="col-md-6">
                                    <input style="width:70px;" id="price" type="number" class="form-control" name="price" required >
                                </div>
                            </div>
                        </div>

                        <!-- - - - - - - - - - - - - - - - - - - - - - - picture (Foto) - - -  - - - - - - - - - - - - - - - - - - - -->
                        <div class="form-group">
                            <label for="Picture" class="col-md-3 control-label">Picture</label>

                            <div class="col-md-6">
                                <input type="file" name="picture" id="picture"/>
                            </div>
                        </div>

                        <!-- - - - - - - - - - - - - - - - - - - - - - - Description (Beschrijving) - - - - - - - - - - - - - - - - - - - - - - -->
                        <div class="form-group">
                            <label for="description" class="col-md-3 control-label">Beschrijving</label>
                            <div class="col-md-6">
                                <textarea rows="4" cols="50" id="description" type="number" step="0.01" class="form-control" name="description" required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-5 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Voeg toe
                                </button>
                            </div>

                            <div class="col-md-5 back-button">
                                <a class="btn btn-secondary" href="/admin">
                                    Back
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection