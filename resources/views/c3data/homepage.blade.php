@extends('welcome')

@section('idk')
    <table class="table">
        <div>
            <thead>
                <tr>
                    <th scope="col">User No.</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $sheet)
                <tr>
                    <td>{{ $sheet->id }}</td>
                    <td>
                        <a href="/sheet/{{ $sheet->id }}">PDF</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </div>
    </table>


