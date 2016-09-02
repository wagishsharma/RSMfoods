@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Details of test reports for the raw material
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Product Form -->
                    {!! Form::open(array('url' => 'product/'.$product->id.'/test', 'class' => 'form-horizontal')) !!}
                    
                        {{ csrf_field() }}
                            
                        
                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="Test-name" class="col-sm-3 control-label">Test name</label>

                            <div class="col-sm-6">
                                
                                {{Form::select('test_id', $tests, null, ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Test-method" class="col-sm-3 control-label"> Method of testing</label>

                            <div class="col-sm-6">
                                <input type="text" name="method" id="Test-method" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Test-wherePrescrbed" class="col-sm-3 control-label">Where prescribed</label>

                            <div class="col-sm-6">
                                <input type="text" name="wherePrescribed" id="Test-wherePrescrbed" class="form-control" value="{{ old('receipt') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="Test-whereTested" class="col-sm-3 control-label">Where tested</label>

                            <div class="col-sm-6">
                                <input type="text" name="whereTested" id="Test-whereTested" class="form-control" value="{{ old('receipt') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="product-receivedFrom" class="col-sm-3 control-label">Current test done on</label>

                            <div class="col-sm-6">
                                <input type="text" name="currentTestOn" id="product-receivedFrom" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="product-lotNo" class="col-sm-3 control-label">Value Obtained</label>

                            <div class="col-sm-6">
                                <input type="text" name="value" id="product-lotNo" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        



                        <!-- Add Product Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit('Add Test',array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>

    

                    {!! Form::close() !!}
                </div>
            </div>
            @if (count($product->tests) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of test reports for the raw material 
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped Product-table">
                            <thead>
                                <th>name</th>
                                <th>method of testing</th>
                                <th>where prescribed</th>
                                <th>where tested</th>
                                <th>current test done on</th>
                                <th>value Obtained</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($product->tests as $test)
                                    <tr>
                                        <td class="table-text"><div>{{ $test->name}}</a></div></td> 
                                        <td class="table-text"><div>{{ $test->pivot->method }}</div></td>
                                        <td class="table-date"><div>{{ $test->pivot->wherePrescribed }}</div></td>
                                        <td class="table-date"><div>{{ $test->pivot->whereTested}}</div></td>
                                        <td class="table-text"><div>{{ $test->pivot->currentTestOn }}</div></td>
                                        <td class="table-text"><div>{{ $test->pivot->value }}</div></td>
                                        
                                        
                                        
                                        <!-- Product Delete Button -->
                                        <td>
                                            <form action="{{url('product/' . $product->id . '/test/' . $test->pivot->test_id)}}" method="POST">
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
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Processing
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Product Form -->
                    {!! Form::open(array('url' => 'product/'.$product->id.'/processing', 'class' => 'form-horizontal')) !!}
                    
                        {{ csrf_field() }}
                            
                        
                        <!-- Product Name -->
                        <div class="form-group">
                            <label for="Processing-name" class="col-sm-3 control-label">Processing/Packaging started</label>

                            <div class="col-sm-6">
                                {{ Form::text('started', null, array('class' => 'form-control datepicker','placeholder' => ' YYYY-mm-dd','id1' => 'datepicker')) }}
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Processing-method" class="col-sm-3 control-label">Processing/Packaging completed</label>

                            <div class="col-sm-6">
                                {{ Form::text('completed', null, array('class' => 'form-control datepicker','placeholder' => ' YYYY-mm-dd','id2' => 'datepicker')) }}
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Processing-batchNo" class="col-sm-3 control-label">batch No.</label>

                            <div class="col-sm-6">
                                <input type="text" name="batchNo" id="Processing-batchNo" class="form-control" value="{{ old('receipt') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="Processing-certification" class="col-sm-3 control-label">Certification of factory/Final Prodcut(if any)</label>

                            <div class="col-sm-6">
                                <input type="text" name="certification" id="Processing-certification" class="form-control" value="{{ old('receipt') }}">
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="Processing-barCodeNo" class="col-sm-3 control-label">Barcode No</label>

                            <div class="col-sm-6">
                                <input type="text" name="barCodeNo" id="Processing-barCodeNo" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="Processing-dispatchedTo" class="col-sm-3 control-label">Dispatched to </label>

                            <div class="col-sm-6">
                                <input type="text" name="dispatchedTo" id="Processing-dispatchedTo" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Processing-dispatchedOn" class="col-sm-3 control-label">Dispatched On </label>

                            <div class="col-sm-6">
                                {{ Form::text('dispatchedOn', null, array('class' => 'form-control datepicker','placeholder' => ' YYYY-mm-dd','id3' => 'datepicker')) }}
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Processing-remarks" class="col-sm-3 control-label">Remarks </label>

                            <div class="col-sm-6">
                                <input type="text" name="remarks" id="Processing-remarks" class="form-control" value="{{ old('receipt') }}">
                            </div>
                        </div>
                        



                        <!-- Add Product Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                            {!! Form::submit('Add Processing',array('class'=>'btn btn-primary')) !!}
                            </div>
                        </div>

    

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
            @if (count($product->processing) > 0)
            <div class="col-sm-offset-1 col-sm-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Processing 
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped Product-table">
                            <thead>
                                <th>Processing/Packaging started</th>
                                <th>Processing/Packaging completed</th>
                                <th>batch No.</th>
                                <th>Certification of factory/Final Prodcut(if any)</th>
                                <th>Barcode No</th>
                                <th>Dispatched to</th>
                                <th>Dispatched On</th>  
                                <th>Remarks</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                               
                                    <tr>
                                        <td class="table-text"><div>{{ $product->processing->started}}</a></div></td> 
                                        <td class="table-text"><div>{{ $product->processing->completed}}</a></div></td>
                                        <td class="table-text"><div>{{ $product->processing->batchNo}}</a></div></td>
                                        <td class="table-text"><div>{{ $product->processing->certification}}</div></td>
                                        <td class="table-date"><div>{{ $product->processing->barCodeNo}}</div></td>
                                        <td class="table-date"><div>{{ $product->processing->dispatchedTo}}</div></td>
                                        <td class="table-text"><div>{{ $product->processing->dispatchedOn }}</div></td>
                                        <td class="table-text"><div>{{ $product->processing->remarks}}</div></td>
                                        
                                        
                                        
                                        <!-- Product Delete Button -->
                                        <td>
                                            <form action="{{url('product/' . $product->id . '/test/' . $test->pivot->test_id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-product-{{ $product->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
 