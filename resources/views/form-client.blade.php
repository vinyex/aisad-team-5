@extends('layout.main')

@section('content')
    <!-- Content Row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Form Penyewaan Unit Alat Berat - PT Sarana Cipta Unggul</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="customer_name">Customer <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="customer_name" autocomplete="off" placeholder="Please enter customer name...">
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="company_name" autocomplete="off" placeholder="Please enter company name...">
                        </div>
                        <div class="form-group">
                            <label for="rent_date">Rent Date <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="rent_date" autocomplete="off" placeholder="Please enter rent date...">
                        </div>
                        <div class="form-group">
                            <label for="transfer_receipt">Please upload your transfer receipt here <span class="text-danger">*</span></label>
                            <input type="file" class="form-control-file" id="transfer_receipt">
                        </div>
                        <br>
                        <button class="btn btn-primary submit-action">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection