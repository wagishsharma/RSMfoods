@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Reeceipt Raw Material
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
                               
                                
                                 {{ Form::text('harvestedDate', null, array('class' => 'form-control datepicker','placeholder' => 'harvested Date','id1' => 'datepicker')) }}
                            </div>


                        </div>
                        <div class="form-group">
                            <label for="product-harvestedSeed" class="col-sm-3 control-label">Received Factory on</label>

                            <div class="col-sm-6">
                                {{ Form::text('receivedDate', null, array('class' => 'form-control datepicker','placeholder' => 'received Date','id2' => 'datepicker')) }}
                                
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
            
        </div>
    </div>
@endsection
