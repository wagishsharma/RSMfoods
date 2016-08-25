@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Product
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Product Form -->
                    <form action="{{ url('product') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="product-item" class="col-sm-3 control-label">Item</label>

                            <div class="col-sm-6">
                                <input type="text" name="item" id="product-item" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product-variety" class="col-sm-3 control-label">Variety/Seed</label>

                            <div class="col-sm-6">
                                <input type="text" name="varietySeed" id="product-variety" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product-harvestedDate" class="col-sm-3 control-label">When Harvested</label>

                            <div class="col-sm-6">
                                <input type="date" name="harvestedDate" id="product-harvestedDate" class="form-control" value="{{ old('receipt') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="product-harvestedSeed" class="col-sm-3 control-label">Received Factory on</label>

                            <div class="col-sm-6">
                                <input type="date" name="receivedDate" id="product-harvestedSeed" class="form-control" value="{{ old('receipt') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="product-receivedFrom" class="col-sm-3 control-label">Received from(farm/organization)</label>

                            <div class="col-sm-6">
                                <input type="text" name="receivedFrom" id="product-receivedFrom" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="product-lotNo" class="col-sm-3 control-label">Lot No.</label>

                            <div class="col-sm-6">
                                <input type="text" name="lotNo" id="product-lotNo" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="product-certification" class="col-sm-3 control-label">Certification of Farm/Raw Material (third party),if any</label>

                            <div class="col-sm-6">
                                <input type="text" name="certification" id="product-certification" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>



                        <!-- Add Product Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Product
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
<!--{{count($products)}}-->
            <!-- Current Products -->
            @if (count($products) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Products
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped Product-table">
                            <thead>
                                <th>Item</th>
                                <th>Variety/Seed</th>
                                <th>when Harvested</th>
                                <th>Received Factory on(Date)</th>
                                <th>Received from(farm/Organization)</th>
                                <th>Lot No.</th>
                                <th>Certification of Farm/Raw Material(third party),if any</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="table-text"><div><a href="{{ url('product/create/'.$product->id) }}">{{ $product->item }}</a></div></td> 
                                        <td class="table-text"><div>{{ $product->varietySeed }}</div></td>
                                        <td class="table-date"><div>{{ $product->harvestedDate }}</div></td>
                                        <td class="table-date"><div>{{ $product->receivedDate}}</div></td>
                                        <td class="table-text"><div>{{ $product->receivedFrom }}</div></td>
                                        <td class="table-text"><div>{{ $product->lotNo }}</div></td>
                                        <td class="table-text"><div>{{ $product->certification}}</div></td>
                                       
                                        
                                        
                                        <!-- Product Delete Button -->
                                        <td>
                                            <form action="{{url('product/' . $product->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-product-{{ $product->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
