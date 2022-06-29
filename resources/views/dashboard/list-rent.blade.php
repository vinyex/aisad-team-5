@extends('layout.main')

@section('css')
    <link href="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('js')
    <!-- Core plugin JavaScript-->
    <script src="{{asset('template/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('template/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('template/js/demo/datatables-demo.js')}}"></script>
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Dashboard Data Penyewaan Unit Alat Berat </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Rent date</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Company</th>
                            <th>Rent date</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>PT Edinburgh</td>
                            <td>2011/04/25</td>
                            <td>+628374747474</td>
                            <th>Rawa Bebek</th>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>PT Tokyo</td>
                            <td>2011/07/25</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>PT San Francisco</td>
                            <td>2009/01/12</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>PT Edinburgh</td>
                            <td>2012/03/29</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>PT Tokyo</td>
                            <td>2008/11/28</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Brielle Williamson</td>
                            <td>PT Integration Specialist</td>
                            <td>2012/12/02</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Herrod Chandler</td>
                            <td>PT Sales Assistant</td>
                            <td>2012/08/06</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Rhona Davidson</td>
                            <td>PT Integration Specialist</td>
                            <td>2010/10/14</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Colleen Hurst</td>
                            <td>PT Javas Dev</td>
                            <td>2009/09/15</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                        <tr>
                            <td>Sonya Frost</td>
                            <td>PT Soft Engineer</td>
                            <td>2008/12/13</td>
                            <td>+628374747474</td>
                            <td>Rawa Bebek</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection