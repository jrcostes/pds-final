@extends('layouts.admin')

@section('content')

    {{-- <head>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>
    </head> --}}



        <div class="card">
            <div class="card-header">
                {{ trans('List of Forms Created by Users') }}
            </div>

            <div class="card-body">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Admin">
                    <thead>
                        <tr>
                            <th scope="col">Form ID</th>
                            <th scope="col">Surname</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $sheet)
                            <tr>
                                <td>{{ $sheet->id }}</td>
                                <td>{{ $sheet->surname }}</td>
                                <td>{{ $sheet->firstname }}</td>
                                <td>
                                    <form id="form1Pdf" method="get" action="pdf1print" autocomplete="off"
                                        onsubmit="return submitForm2(this);">
                                        <input type="hidden" id="admin.formid" name="formid" value="{{ $sheet->id }}">
                                        <button type="submit" class="btn btn-outline-primary">PDF</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


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
