@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">
            
                
            @if (count($product) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                         Product      
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
                                
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td class="table-text"><div>{{ $product->item }}</a></div></td> 
                                        <td class="table-text"><div>{{ $product->varietySeed }}</div></td>
                                        <td class="table-date"><div>{{ $product->harvestedDate }}</div></td>
                                        <td class="table-date"><div>{{ $product->receivedDate}}</div></td>
                                        <td class="table-text"><div>{{ $product->receivedFrom }}</div></td>
                                        <td class="table-text"><div>{{ $product->lotNo }}</div></td>
                                        <td class="table-text"><div>{{ $product->certification}}</div></td>
                                       
                                        
                                        
                                        
                                    </tr>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            @if (count($product->tests) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Details of test reports for the raw material 
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped Product-table">
                            <thead>
                                <th>name</th>
                                <th>method of testing</th>
                                <th>where prescribed</th>
                                <th>where tested</th>
                                <th>current test done on</th>
                                <th>value Obtained</th>
                                
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
                                        
                                        
                                        
                                        
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
            @if (count($product->processing) > 0)
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Processing 
                    </div>

                    <div class="panel-body">
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
                                        
                                        
                                        
                                        
                                    </tr>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
