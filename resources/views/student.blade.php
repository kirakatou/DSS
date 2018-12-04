@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" style="color: #444444"></i></a>
        </nav>
        <div class="container-fluid page-content">
            <h1 class="title">Input Calon Mahasiswa</h1>
            <hr>
            <form action="/student{{$student != NULL ? '/' . $student->id : ''}}" method="POST">
                @csrf
                @if(isset($student))
                    @method('PUT')
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3">No Pendaftaran</label>
                            <div class="col-md-6">
                                <input type="text" name="no_pendaftaran" class="form-control" 
                                    value="{{ $student != NULL ? $student->no_pendaftaran : old('no_pendaftaran') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Nama</label>
                            <div class="col-md-6">
                                <input type="text" name="nama" class="form-control" 
                                    value="{{ $student != NULL ? $student->nama : old('nama') }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">Batch</label>
                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" name="batch" id="inlineFormCustomSelectPref" required>
                                    <option value="" {{ $student != NULL ? ''  : 'selected' }}>Pilih</option>
                                    <option value="1" {{ $student != NULL ? ($student->batch == '1' ? 'selected': '')  : '' }}>
                                        1
                                    </option>
                                    <option value="2" {{ $student != NULL ? ($student->batch == '2' ? 'selected': '')  : '' }}>
                                        2
                                    </option>
                                    <option value="3" {{ $student != NULL ? ($student->batch == '3' ? 'selected': '')  : '' }}>
                                        3
                                    </option>
                                    <option value="4" {{ $student != NULL ? ($student->batch == '4' ? 'selected': '')  : '' }}>
                                        4
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="usm" class="custom-control-input" id="chkUSM" 
                                    value="1"  {{ $student != NULL ? ($student->usm == '1' ? 'checked': '')  : '' }}>
                                <label class="custom-control-label" for="chkUSM">Ujian Saringan Masuk</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3">Jurusan</label>
                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" name="department" id="inlineFormCustomSelectPref" required>
                                    <option value="" {{ $student != NULL ? ''  : 'selected' }}>Pilih</option>
                                    <option value="hospitality" {{ $student != NULL ? ($student->department == 'hospitality' ? 'selected': '')  : '' }}>
                                        Hospitality
                                    </option>
                                    <option value="accounting" {{ $student != NULL ? ($student->department == 'accounting' ? 'selected': '')  : '' }}>
                                        Accounting
                                    </option>
                                    <option value="law" {{ $student != NULL ? ($student->department == 'law' ? 'selected': '')  : '' }}>
                                        Law
                                    </option>
                                    <option value="is" {{ $student != NULL ? ($student->department == 'is' ? 'selected': '')  : '' }}>
                                        IS
                                    </option>
                                    <option value="management" {{ $student != NULL ? ($student->department == 'management' ? 'selected': '')  : '' }}>
                                        Management
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3">IPA/IPS</label>
                            <div class="col-md-6">
                                <select class="custom-select my-1 mr-sm-2" name="submodule" id="inlineFormCustomSelectPref" required>
                                    <option value="" {{ $student != NULL ? ''  : 'selected' }}>Pilih</option>
                                    <option value="IPA" {{ $student != NULL ? ($student->submodule == 'IPA' ? 'selected': '')  : '' }}>IPA</option>
                                    <option value="IPS" {{ $student != NULL ? ($student->submodule == 'IPS' ? 'selected': '')  : '' }}>IPS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row nilai IPA">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPA Semester 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_10 : old('mate_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_10 : old('inggris_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_10 : old('first_module_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_10 : old('second_module_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_10 : old('third_module_10') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPA Semester 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_11 : old('mate_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_11 : old('inggris_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_11 : old('first_module_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_11 : old('second_module_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_11 : old('third_module_11') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row nilai IPA">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPA Semester 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_12 : old('mate_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_12 : old('inggris_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_12 : old('first_module_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_12 : old('second_module_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_12 : old('third_module_12') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPA Semester 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_13 : old('mate_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_13 : old('inggris_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_13 : old('first_module_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_13 : old('second_module_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_13 : old('third_module_13') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row nilai IPS">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPS Semester 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_10 : old('mate_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_10 : old('inggris_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_10 : old('first_module_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_10 : old('second_module_10') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_10" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_10 : old('third_module_10') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPS Semester 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_11 : old('mate_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_11 : old('inggris_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_11 : old('first_module_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_11 : old('second_module_11') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_11" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_11 : old('third_module_11') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row nilai IPS">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPS Semester 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_12 : old('mate_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_12 : old('inggris_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_12 : old('first_module_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_12 : old('second_module_12') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_12" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_12 : old('third_module_12') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai IPS Semester 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="mate_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->mate_13 : old('mate_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="inggris_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->inggris_13 : old('inggris_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="first_module_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->first_module_13 : old('first_module_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="second_module_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->second_module_13 : old('second_module_13') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="third_module_13" class="form-control"
                                                        value="{{ $student != NULL ? $student->third_module_13 : old('third_module_13') }}"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row nilai" id="nilaiUSM" style="display: none;">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Nilai USM
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="90" name="usm_mate" class="form-control"
                                                        value="{{ $student != NULL ? $student->usm_mate : old('usm_mate') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="90" name="usm_inggris" class="form-control"
                                                        value="{{ $student != NULL ? $student->usm_inggris : old('usm_inggris') }}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">TPA</label>
                                                <div class="col-md-6">
                                                    <input type="text" name="usm_tpa" class="form-control"
                                                        value="{{ $student != NULL ? $student->usm_tpa : old('usm_tpa') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-md btn-primary mb-2 mt-3">Save</button>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('home') }}" class="btn btn-md btn-warning mb-2 mt-3">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        refreshInput();
        $("form").submit(function(e){
            refreshInput(); // disable
            return true
        });
        $("select:eq(2)").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(!$("#chkUSM").is(":checked")){
                    if(optionValue){
                        $(".nilai").not("." + optionValue).hide();
                        $("." + optionValue).show();
                    } else{
                        $(".nilai").hide();
                    }
                }
                else {
                    $("#nilaiUSM").show();
                    $(".IPA").hide();
                    $(".IPS").hide();
                }
                refreshInput();
                
            });
        }).change();
        $("#chkUSM").click(function () {
            if ($(this).is(":checked")) {
                $("#nilaiUSM").show();
                $(".IPA").hide();
                $(".IPS").hide();
            } else {
                $("#nilaiUSM").hide();
                var optionValue = $('select:eq(2)').find(":selected").val();
                if(optionValue) {
                    $(".nilai").not("." + optionValue).hide();
                    $("." + optionValue).show()
                }
            }
            refreshInput();
        });
    });

    function refreshInput() {

        $(':input').prop('disabled', false);
        $(':input').prop('required', false);
        $('.nilai:hidden').find(':input').prop('disabled', true);
        $('.nilai:visible').find(':input').prop('required', true);
        $('.row:visible').find(':input').prop('required', true);
        $('#chkUSM').prop('required', false);

    }
</script>
@endsection