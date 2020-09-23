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
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Restaurant name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="restaurant" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="button" class="btn btn-success btn" id="button">Find restaurant</button>
                                </div>
                            </div>
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