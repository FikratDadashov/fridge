@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <?php $i = $j = 1; ?>
                        <form class="form needs-validation" action="{{url('/product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group row align-items-center mb-0">
                                <label for="name"
                                       class="col-2 control-label col-form-label">Name</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="text" class="form-control" id="name" name="name"
                                           placeholder="Name" value="{{$product->name}}">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="dom"
                                       class="col-2 control-label col-form-label">Date of Manufacture (DoM)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="date" class="form-control" id="dom" name="dom"
                                           placeholder="Date of Manufacture (DoM)" value="{{$product->dom}}">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="pd"
                                       class="col-2 control-label col-form-label">Purchase Date (PD)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="date" class="form-control" id="pd" name="pd"
                                           placeholder="Purchase Date (PD)" value="{{$product->pd}}">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="domd"
                                       class="col-2 control-label col-form-label">Date of Minimum Durability (DoMD) (With days)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="number" class="form-control" id="domd" name="domd"
                                           placeholder="Date of Minimum Durability (DoMD)" value="{{$product->domd}}">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="ed"
                                       class="col-2 control-label col-form-label">Expiration Date (PD)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="date" class="form-control" id="ed" name="ed"
                                           placeholder="Expiration Date (PD)" value="{{$product->ed}}">
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="control-label col-form-label col-2">Image</label>
                                <img src="{{url('assets/uploads/'.$product->image)}}" alt="image" width="150" height="150">
                                <div class="col-8 border-left pb-2 pt-2">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>


                            <div class="form-actions">
                                <button type="submit" class="btn btn-success"><i
                                        class="fa fa-check"></i>Save</button>
                                <a class="btn btn-outline-dark" role="button"
                                   href="{{url('/')}}">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
