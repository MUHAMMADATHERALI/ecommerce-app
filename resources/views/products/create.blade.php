@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg" style="border: 2px solid #6C757D;">
                    <div class="card-header" style="background-color: #28a745; color: white; text-align: center;">
                        <h2>Create a New Product</h2>
                    </div>

                    <div class="card-body" style="background-color: #f7f7f7;">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf

                            <div class="form-group mb-4">
                                <label for="name" class="form-label" style="color: #17a2b8;">Product Name</label>
                                <input type="text" class="form-control border border-info" id="name" name="name" value="{{ old('name') }}" required style="box-shadow: 0px 0px 10px rgba(0,123,255,0.5);">
                            </div>

                            <div class="form-group mb-4">
                                <label for="description" class="form-label" style="color: #17a2b8;">Description</label>
                                <textarea class="form-control border border-info" id="description" name="description" rows="4" required style="box-shadow: 0px 0px 10px rgba(0,123,255,0.5);">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="price" class="form-label" style="color: #17a2b8;">Price ($)</label>
                                <input type="number" step="0.01" class="form-control border border-info" id="price" name="price" value="{{ old('price') }}" required style="box-shadow: 0px 0px 10px rgba(0,123,255,0.5);">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn" style="background-color: #007bff; color: white; font-size: 18px; box-shadow: 0px 0px 12px rgba(40,167,69,0.6);">Create Product</button>
                                <style>.card-header {
                                    background-color: #28a745;
                                    color: white;
                                    text-align: center;
                                }
                                
                                .card {
                                    border: 2px solid #6C757D;
                                    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
                                }
                                
                                .card-body {
                                    background-color: #f7f7f7;
                                }
                                
                                .form-label {
                                    color: #17a2b8;
                                }
                                
                                .form-control {
                                    border: 2px solid #17a2b8;
                                    box-shadow: 0px 0px 10px rgba(0,123,255,0.5);
                                }
                                
                                .btn {
                                    background-color: #007bff;
                                    color: white;
                                    font-size: 18px;
                                    box-shadow: 0px 0px 12px rgba(40,167,69,0.6);
                                }
                                </style>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
