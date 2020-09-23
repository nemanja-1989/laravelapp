@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Restaurants</div>

                <div class="card-body">
                    <button type="button" class="btn btn-light btn" id="button">Get All Restaurants</button>        
                    <div id="div"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/restaurants.js"></script>
@endsection