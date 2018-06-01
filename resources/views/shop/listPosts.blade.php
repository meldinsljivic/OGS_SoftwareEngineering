@extends('layouts.master')
@section('title') SE Project @endsection
@section('content')
<div class="container">

        <div id="content">

        <div class="col-md-12" id="basket">

            <div class="box">

                <form method="post" action="checkout1.html">

                    <h1>List of Posts</h1>
                    

<p class="text-muted">You currently have {{$posts->count()}}  products in database.</p>
<div class="pre-scrollable table-responsive">
        <table  class="table">
            <thead>
                <tr>
                    <th colspan="4">Posts</th>
                    
                    
                    
                    
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td colspan="3">
                        <a href="#">
                            <img src="{{ $post->image }}" alt="{{ $post->title }}">
                        </a>
                    </td>
                <td><a href="#">{{ $post->title }}</a>
                    </td>
                    
                   
                    
                    
                    <td><a href="{{route('shop.deleteListPost', ['id' => $post->id]) }} }}"><i class="fa fa-trash-o"></i></a>
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