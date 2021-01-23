@extends('layout/app')

@section('body')
<div class="row">
    <div class="col mb-3">
        <a href="{{ url('/ProjectGIS/add_data') }}" type="button" class="btn btn-primary mb-1">Add Data</a>
    </div>
    <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Tables SD</h6>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Nama SD</th>
                            <th>Alamat</th>
                            <th>Status</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($list as $li)
                        <tr>
                            <td><a href="#">{{ $li['id_feature'] }}</a></td>
                            <td>{{ $li['property']['nama_sekolah_dasar'] }}</td>
                            <td>{{ $li['property']['alamat_sekolah_dasar']}}</td>
                            <td>
                                @if($li['property']['status_sekolah_dasar'])
                                <span class="badge badge-warning">{{ $li['property']['status_sekolah_dasar'] }}</span>
                                @else
                                <span class="badge badge-primary">Delivered</span>
                                @endif
                            </td>
                            <td><img src="{{ $li['property']['foto'] }}" width="100"></td>
                            <td class="text-center">
                                <a href="{{ url('ProjectGIS/update/' . $li['id_feature']) }}" class="btn btn-info">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="{{ url('/ProjectGIS/delete/' . $li['id_feature']) }}" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>
</div>
@endsection
