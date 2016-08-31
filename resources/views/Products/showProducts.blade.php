@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-1 col-sm-10">
            
                
            @if (count($products) > 0)

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Products       (Click on product Name to add tests related to product)
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
                                        <td class="table-text"><div><a href="{{ url('products/'.$product->id.'/tests/create/') }}">{{ $product->item }}</a></div></td> 
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
@endsection
