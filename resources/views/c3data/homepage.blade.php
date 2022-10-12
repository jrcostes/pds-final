@extends('welcome')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sheets as $sheet)
        <tr>
            <td>{{ $sheet->id }}</td>
            <td>
                <a href="/sheet/{{$sheet->id}}">PDF</a>
                {{-- <a href="/excel/{{$sheet->id}}">EXCEL</a> --}}
            </td>
        </tr>
        @endforeach
    </table>

    {!! $sheets->links() !!}

@endsection
