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
            <h6 class="m-0 font-weight-bold text-primary">Dashboard Data Telp Panggilan Iklan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Phone Number</th>
                            <th>Day</th>
                            <th>Call date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Phone Number</th>
                            <th>Day</th>
                            <th>Call date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Monday</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Tuesday</td>
                            <td>2011/07/25</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Wednesday</td>
                            <td>2009/01/12</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Thursday</td>
                            <td>2012/03/29</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Friday</td>
                            <td>2008/11/28</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Satudrday</td>
                            <td>2012/12/02</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Sunday</td>
                            <td>2012/08/06</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Monday</td>
                            <td>2010/10/14</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Tuesday</td>
                            <td>2009/09/15</td>
                        </tr>
                        <tr>
                            <td>+6281234567890</td>
                            <td>Wednesday</td>
                            <td>2008/12/13</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection