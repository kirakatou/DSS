@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" style="color: #444444"></i></a>
        </nav>
        <div class="container-fluid page-content">
            <h1 class="title">List Normalisasi Direct Admission</h1>
            <hr>
            <form action="{{ route('home.direct') }}" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <select class="custom-select my-1 mr-sm-2" name="department" id="inlineFormCustomSelectPref">
                            <option value="is" 
                                {{ app('request')->input('department') !== NULL ? 
                                        (app('request')->input('department') == 'is' ? 'selected' : '') : '' }}>
                                Information System
                            </option>
                            <option value="accounting"
                                {{ app('request')->input('department') !== NULL ? 
                                        (app('request')->input('department') == 'accounting' ? 'selected' : '') : '' }}>
                                Accounting
                            </option>
                            <option value="law"
                                {{ app('request')->input('department') !== NULL ? 
                                        (app('request')->input('department') == 'law' ? 'selected' : '') : '' }}>
                                Law
                            </option>
                            <option value="management"
                                {{ app('request')->input('department') !== NULL ? 
                                        (app('request')->input('department') == 'management' ? 'selected' : '') : '' }}>
                                Management
                            </option>
                            <option value="hospitality" 
                                {{ app('request')->input('department') !== NULL ? 
                                        (app('request')->input('department') == 'hospitality' ? 'selected' : '') : 'selected' }}>
                                Hospitality
                            </option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <select class="custom-select my-1 mr-sm-2" name="submodule" id="inlineFormCustomSelectPref">
                            <option value="ipa"
                                {{ app('request')->input('submodule') !== NULL ? 
                                        (app('request')->input('submodule') == 'ipa' ? 'selected' : '') : '' }}>
                                IPA
                            </option>
                            <option value="ips"
                                {{ app('request')->input('submodule') !== NULL ? 
                                        (app('request')->input('submodule') == 'ips' ? 'selected' : '') : '' }}>
                                IPS
                            </option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-md btn-primary my-1 mr-sm-2">SHOW</button>
                    </div>
                </div>
            </form>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12 col-12">
                    <table id="example" class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Peringkat</th>
                                <th>No Registrasi</th>
                                <th>Nama</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>C6</th>
                                <th>C7</th>
                                <th>C8</th>
                                <th>C9</th>
                                <th>C10</th>
                                <th>C11</th>
                                <th>C12</th>
                                <th>C13</th>
                                <th>C14</th>
                                <th>C15</th>
                                <th>C16</th>
                                <th>C17</th>
                                <th>C18</th>
                                <th>C19</th>
                                <th>C20</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($befores as $result)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $result['student']['no_pendaftaran'] }}</td>
                                <td>{{ $result['student']['nama'] }}</td>
                                <td>{{ $result['mate_10'] }}</td>
                                <td>{{ $result['inggris_10'] }}</td>
                                <td>{{ $result['first_module_10'] }}</td>
                                <td>{{ $result['second_module_10'] }}</td>
                                <td>{{ $result['third_module_10'] }}</td>
                                <td>{{ $result['mate_11'] }}</td>
                                <td>{{ $result['inggris_11'] }}</td>
                                <td>{{ $result['first_module_11'] }}</td>
                                <td>{{ $result['second_module_11'] }}</td>
                                <td>{{ $result['third_module_11'] }}</td>
                                <td>{{ $result['mate_12'] }}</td>
                                <td>{{ $result['inggris_12'] }}</td>
                                <td>{{ $result['first_module_12'] }}</td>
                                <td>{{ $result['second_module_12'] }}</td>
                                <td>{{ $result['third_module_12'] }}</td>
                                <td>{{ $result['mate_13'] }}</td>
                                <td>{{ $result['inggris_13'] }}</td>
                                <td>{{ $result['first_module_13'] }}</td>
                                <td>{{ $result['second_module_13'] }}</td>
                                <td>{{ $result['third_module_13'] }}</td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12 col-12">
                    <table id="example2" class="table">
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
                                    {!! $result['status'] == 0 ? '<span class="green">LULUS</span>' : '<span class="red">UJIAN MASUK</span>'!!}
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
