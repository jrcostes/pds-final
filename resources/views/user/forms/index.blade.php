    @extends('layouts.user')

    @section('content')

        {{-- <head>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
        </head> --}}

        <div class="card">
            <div class="card-header">
                {{ trans('List of Forms Created') }}
            </div>

            <div class="card-body">
                <div class="table-static">
                    <table class=" table table-bordered table-striped table-hover datatable datatable-User">
                        <thead>
                            <tr>

                                <th scope="col">User ID</th>
                                <th scope="col">Surname</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @if ($surname != null)
                            <tr>
                                <td>{{ $user_id}}</td>
                                <td>{{ $surname }}</td>
                                <td>{{ $firstname }}</td>
                                <td>
                                    <form id="form1Pdf" method="get" action="pdf1print" autocomplete="off"
                                        onsubmit="return submitForm2(this);">
                                        <input type="hidden" id="user.formid" name="formid" value="{{ $surname }}">
                                        <button type="submit" class="btn btn-outline-primary"> Download PDF</button>
                                    </form>
                                    <form id="show1Form" method="get" action="show1form" autocomplete="off">
                                        <input type="hidden" id="user.formid" name="formid" value="{{ $surname }}">
                                        <button type="submit" class="btn btn-outline-primary">View PDF</button>
                                    </form>
                                    <form id="edit1Form" method="get" action="edit1form" autocomplete="off">
                                        <input type="hidden" id="user.formid" name="formid" value="{{ $surname }}">
                                        <button type="submit" class="btn btn-outline-primary">Edit</button>
                                    </form>
                                </td>
                            </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- <body>
            <div class="box-form">

                <div class="container mt-5">
                    <table id="myTable" class="table table-striped" style="width: 100%">
                        <thead>
                            <tr>
                                <th scope="col">User ID</th>
                                <th scope="col">Surname</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($surname != null)
                            <tr>
                                <td>{{ $user_id}}</td>
                                <td>{{ $surname }}</td>
                                <td>{{ $firstname }}</td>
                                <td>
                                    <form id="form1Pdf" method="get" action="pdf1print" autocomplete="off"
                                        onsubmit="return submitForm2(this);">
                                        <input type="hidden" id="user.formid" name="formid" value="{{ $surname }}">
                                        <button type="submit" class="btn btn-outline-primary"> Download PDF</button>
                                    </form>
                                    <form id="show1Form" method="get" action="show1form" autocomplete="off">
                                        <input type="hidden" id="user.formid" name="formid" value="{{ $surname }}">
                                        <button type="submit" class="btn btn-outline-primary">View PDF</button>
                                    </form>
                                    <form id="edit1Form" method="get" action="edit1form" autocomplete="off">
                                        <input type="hidden" id="user.formid" name="formid" value="{{ $surname }}">
                                        <button type="submit" class="btn btn-outline-primary">Edit</button>
                                    </form>
                                </td>
                            </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </body> --}}

        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
            integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                var table = $('#myTable').DataTable();

                new $.fn.dataTable.Buttons(table, {
                    buttons: [
                        'copy', 'pdf'
                    ]
                });

                table.buttons().container()
                    .appendTo($('.col-sm-6:eq(0)', table.table().container()));
            });
        </script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="sweetalert/sweetalert.all.js"></script>
        <script>
            function submitForm2(form) {
                swal({
                        title: "Are you sure?",
                        text: "Do you want to download a PDF version?",
                        icon: "info",
                        buttons: true,
                        dangerMode: false
                    })
                    .then(function(isOkay) {
                        if (isOkay) {
                            swal({
                                icon: "success",
                                text: "Your download will start soon"
                            });
                            form.submit();
                        }
                    });
                return false;
            }
        </script>




        {{-- <div class="d-flex justify-content-center">
                <div class="pagination">
                    {!! $products->links() !!}
                </div>
            </div> --}}
    @endsection
