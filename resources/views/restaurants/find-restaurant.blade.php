@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Find restaurant</div>

                <div class="card-body">
                    <div id="form">
                        <form action="">
                            <label for="find">Restaurant name</label>
                            <input type="text" name="" id="restaurant">
                            <button type="button" class="btn btn-light btn-sm" id="button">Find</button>
                        </form>
                    </div>
                    <div id="div"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/find-restaurant.js"></script>
@endsection