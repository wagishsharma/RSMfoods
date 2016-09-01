<?php

function printQRCode($url, $size = 100) {
    return '<img src="http://chart.apis.google.com/chart?chs=' . $size . 'x' . $size . '&cht=qr&chl=' . urlencode($url) . '" >';
}
?> 
@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

   
    @if (count($products) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Products
            </div>

            <div class="table-responsive">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Product Name</th>
                        <th>QR Code</th>
                        <th>URL</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <!-- product Name -->
                                <td class="table-text">
                                    <div>{{ $product->item }}</div>
                                </td>
                                
                                <!-- product QR-->
                                
                                <td  class="img-fluid" alt="Responsive image">
                                    <div><?php $url = url('product/show/'.$product->id );
                                    echo printQRCode($url); 

                                    ?></div>
                                </td>

                                <!-- product URL-->
                                <td class="table-text">
                                    <div>{{$url}}</div>
                                </td>
                                <!-- Delete Button -->
                                <td>
                                    <form action="{{ url('product/'.$product->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Delete
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
@endsection