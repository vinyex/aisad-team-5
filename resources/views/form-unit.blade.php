@extends('layout.main')

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Form Unit - PT Sarana Cipta Unggul</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="data_unit">Data Unit <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="data_unit" autocomplete="off" placeholder="Please enter data unit...">
                        </div>
                        <div class="form-group">
                            <label for="type_unit">Type of Unit <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="type_unit" autocomplete="off" placeholder="Please enter type of unit...">
                        </div>
                        <div class="form-group">
                            <label for="capacity_unit">Capacity Unit (Ton) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="capacity_unit" autocomplete="off" placeholder="Please enter capacity unit...">
                        </div>
                        <br>
                        <button class="btn btn-primary submit-action">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection