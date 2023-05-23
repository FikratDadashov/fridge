@extends('template')
@section('content')
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-5 align-self-center">
                    <h4 class="page-title">Fridge</h4>
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Fridge</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-md-12 text-right d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <a href="{{url('/product')}}" id="btn-add-product" class="btn btn-info"><i class="fa fa-plus font-16 mr-1"></i> Add Product</a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="card">
                <div class="card card-body">
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th><b>Name</b></th>
                                <th><b>Date of Manufacture (DoM)</b></th>
                                <th><b>Purchase Date (PD)</b></th>
                                <th><b>Date of Minimum Durability (DoMD)</b></th>
                                <th><b>Expiration Date (ED)</b></th>
                                <th><b>Image</b></th>
                                <th><b>Operation</b></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <?php $hl = \App\Models\Product::average($product->dom, $product->ed); ?>
                            <tr @if(date('Y-m-d') > $product->ed) class="bg-danger" @endif @if(date('Y-m-d') > $hl) class="bg-warning" @endif>
                                <td>{{$product->name}}</td>
                                <td>{{$product->dom}}</td>
                                <td>{{$product->pd}}</td>
                                <td>{{$product->domd}} days</td>
                                <td>{{$product->ed}}</td>
                                <td><img width="50" src="{{url('assets/uploads/'.$product->image)}}"
                                         alt="image">
                                    <a target="_blank" class="btn default btn-outline image-popup-vertical-fit el-link" href="{{url('assets/uploads/'.$product->image)}}"><i class="icon-magnifier"></i></a>
                                </td>

                                <td style="text-align: center; vertical-align: middle;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings" ></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{url('product/'.$product->id)}}"><i class="fa fa-edit"></i> Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <form class="form" action="{{url('product/'.$product->id)}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Do you want to delete this product?')" class="dropdown-item"><i class="fa fa-trash"></i>Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </table>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>

        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    @endsection



