@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" style="color: #444444"></i></a>
        </nav>
        <div class="container-fluid page-content">
            <h1 class="title">List Data Mahasiswa</h1>
            <div class="row">
                <div class="col-md-12 col-12">
                    <table id="example" class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Batch</th>
                                <th>Jurusan</th>
                                <th>IPA/IPS</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                            <tr>
                                <td>{{ $student->nama }}</td>
                                <td>{{ $student->batch }}</td>
                                <td>{{ strtoupper($student->department) }}</td>
                                <td>{{ strtoupper($student->submodule) }}</td>
                                <td><a href="{{ route('student.show', [$student]) }}" class="btn btn-md btn-primary">Edit</a></td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection