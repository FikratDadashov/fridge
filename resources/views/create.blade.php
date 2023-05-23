@extends('template')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form needs-validation" action="{{url('/product')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row align-items-center mb-0">
                                <label for="name"
                                       class="col-2 control-label col-form-label">Name</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="text" class="form-control" id="name" name="name"
                                           placeholder="Name">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="dom"
                                       class="col-2 control-label col-form-label">Date of Manufacture (DoM)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="date" class="form-control" id="dom" name="dom"
                                           placeholder="Date of Manufacture (DoM)">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="pd"
                                       class="col-2 control-label col-form-label">Purchase Date (PD)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="date" class="form-control" id="pd" name="pd"
                                           placeholder="Purchase Date (PD)">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="domd"
                                       class="col-2 control-label col-form-label">Date of Minimum Durability (DoMD) (With days)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="number" class="form-control" id="domd" name="domd"
                                           placeholder="Date of Minimum Durability (DoMD)">
                                </div>
                            </div>

                            <div class="form-group row align-items-center mb-0">
                                <label for="ed"
                                       class="col-2 control-label col-form-label">Expiration Date (PD)</label>
                                <div class="col-6 border-left pb-2 pt-2">
                                    <input required type="date" class="form-control" id="ed" name="ed"
                                           placeholder="Expiration Date (PD)">
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label class="col-2 control-label col-form-label">Image</label>
                                <div class="col-8 border-left pb-2 pt-2">
                                    <input required type="file" name="image" class="form-control">
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
