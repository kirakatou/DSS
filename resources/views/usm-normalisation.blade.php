@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" style="color: #444444"></i></a>
        </nav>
        <div class="container-fluid page-content">
            <h1 class="title">List Normalisasi USM</h1>
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                        <option value="IS">Information System</option>
                        <option value="ACC">Accounting</option>
                        <option value="LAW">Law</option>
                        <option value="MGMT">Management</option>
                        <option value="HOS">Hospitality</option>
                    </select>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12 col-12">
                    <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>No Registrasi</th>
                                <th>Nama</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($befores as $result)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result['student']['no_pendaftaran'] }}</td>
                                <td>{{ $result['student']['nama'] }}</td>
                                <td>{{ $result['mate'] }}</td>
                                <td>{{ $result['inggris'] }}</td>
                                <td>{{ $result['tpa'] }}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12 col-12">
                    <table id="example2" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>No Registrasi</th>
                                <th>Nama</th>
                                <th>IPA/IPS</th>
                                <th>Nilai</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($results as $result)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result['student']['no_pendaftaran'] }}</td>
                                <td>{{ $result['student']['nama'] }}</td>
                                <td>{{ $result['student']['submodule'] }}</td>
                                <td>{{ $result['poin'] }}</td>
                                <td>
                                    {!! $result['status'] == 0 ? '<span class="green">LULUS</span>' : '<span class="red">TIDAK LULUS MA BRO</span>'!!}
                                </td>
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
