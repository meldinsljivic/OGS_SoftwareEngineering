@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')
<div class="container">

        <div id="content">

        <div class="col-md-12" id="basket">

            <div class="box">

                <form method="post" action="checkout1.html">

                    <h1>List of Products</h1>
                    

<p class="text-muted">You currently have {{$products->count()}}  products in database.</p>
<div class="pre-scrollable table-responsive">
        <table  class="table">
            <thead>
                <tr>
                    <th colspan="4">Product</th>
                    
                    <th>Unit price</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td colspan="3">
                        <a href="#">
                            <img src="{{ $product->image1 }}" alt="{{ $product->title }}">
                        </a>
                    </td>
                <td><a href="#">{{ $product->title }}</a>
                    </td>
                    
                    <td>{{ $product['price'] }} KM</td>
                    
                    
                    <td><a href="{{route('shop.deleteListProduct', ['id' => $product->id]) }}"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach 
            </tbody>
            
        </table>

    </div>
    <!-- /.table-responsive -->

    <div class="box-footer">
        
    </div>

</form>

</div>
<!-- /.box -->

</div>






        
                        
            <!-- /.col-md-9 -->

            
            <!-- /.col-md-3 -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#content -->


@endsection