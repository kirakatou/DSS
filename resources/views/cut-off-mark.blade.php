@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars" style="color: #444444"></i></a>
        </nav>
        <div class="container-fluid page-content">
            <h1 class="title">Input Cut Off Mark</h1>
            <hr>
            <form action="/cut-off-mark" method="POST">
                @csrf
                <p class="jurusan">Hospitality</p>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_10][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['hospitality']['mate_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_10']['ipa'] ?? 0}}">
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
                                IPA SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['mate_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_12][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['hospitality']['mate_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_12']['ipa'] ?? 0}}">
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
                                IPA SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['mate_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_10][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['hospitality']['mate_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_10']['ips'] ?? 0}}">
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
                                IPS SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_11][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['hospitality']['mate_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_12][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['hospitality']['mate_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_12']['ips'] ?? 0}}">
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
                                IPS SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[mate_13][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['hospitality']['mate_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[inggris_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['inggris_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[first_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['first_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[second_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['second_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="hospitality[third_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['hospitality']['third_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="jurusan">Information System</p>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_10][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['is']['mate_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_10']['ipa'] ?? 0}}">
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
                                IPA SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['mate_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_12][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['is']['mate_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_12']['ipa'] ?? 0}}">
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
                                IPA SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['mate_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_10][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['is']['mate_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_10']['ips'] ?? 0}}">
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
                                IPS SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_11][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['is']['mate_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_12][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['is']['mate_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_12']['ips'] ?? 0}}">
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
                                IPS SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[mate_13][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['is']['mate_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[inggris_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['inggris_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[first_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['first_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[second_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['second_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="is[third_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['is']['third_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="jurusan">Law</p>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_10][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['law']['mate_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_10']['ipa'] ?? 0}}">
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
                                IPA SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['mate_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_12][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['law']['mate_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_12']['ipa'] ?? 0}}">
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
                                IPA SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['mate_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_10][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['law']['mate_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_10']['ips'] ?? 0}}">
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
                                IPS SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_11][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['law']['mate_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_12][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['law']['mate_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_12']['ips'] ?? 0}}">
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
                                IPS SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[mate_13][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['law']['mate_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[inggris_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['inggris_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[first_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['first_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[second_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['second_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="law[third_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['law']['third_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="jurusan">Accounting</p>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_10][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['accounting']['mate_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_10']['ipa'] ?? 0}}">
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
                                IPA SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['mate_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_12][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['accounting']['mate_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_12']['ipa'] ?? 0}}">
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
                                IPA SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['mate_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_10][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['accounting']['mate_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_10']['ips'] ?? 0}}">
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
                                IPS SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_11][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['accounting']['mate_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_12][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['accounting']['mate_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_12']['ips'] ?? 0}}">
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
                                IPS SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[mate_13][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['accounting']['mate_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[inggris_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['inggris_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[first_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['first_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[second_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['second_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="accounting[third_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['accounting']['third_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="jurusan">Management</p>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_10][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['management']['mate_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_10']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_10][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_10']['ipa'] ?? 0}}">
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
                                IPA SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['mate_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_11][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_11']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPA SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_12][ipa]" class="form-control" 
                                                        value="{{$cutoffmarks['management']['mate_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_12']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_12][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_12']['ipa'] ?? 0}}">
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
                                IPA SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['mate_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Biologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Fisika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Kimia</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_13][ipa]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_13']['ipa'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 10
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_10][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['management']['mate_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_10']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_10][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_10']['ips'] ?? 0}}">
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
                                IPS SEM 11
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_11][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['management']['mate_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_11][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_11']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                IPS SEM 12
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_12][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['management']['mate_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_12']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_12][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_12']['ips'] ?? 0}}">
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
                                IPS SEM 13
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[mate_13][ips]" class="form-control" 
                                                        value="{{$cutoffmarks['management']['mate_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[inggris_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['inggris_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Ekonomi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[first_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['first_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Sosiologi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[second_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['second_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Geografi</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="100" name="management[third_module_13][ips]" class="form-control"
                                                        value="{{$cutoffmarks['management']['third_module_13']['ips'] ?? 0}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <p class="jurusan">Ujian Saringan Masuk</p>
                <div class="row card-row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                USM
                            </div>
                            <div class="card-body">
                                <div class="card-text">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label class="col-md-6">Matematika</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="90" name="usm[mate]" class="form-control"
                                                        value="{{$cutoffmarks['usm']['mate'][''] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">Inggris</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="90" name="usm[inggris]" class="form-control"
                                                        value="{{$cutoffmarks['usm']['inggris'][''] ?? 0}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-6">TPA</label>
                                                <div class="col-md-6">
                                                    <input type="number" min="0" max="9" name="usm[tpa]" class="form-control"
                                                        value="{{$cutoffmarks['usm']['tpa'][''] ?? 0 }}">
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
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-md btn-primary mb-2 mt-3">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection