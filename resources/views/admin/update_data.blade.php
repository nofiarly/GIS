@extends('layout/app')

@section('body')
<div class="col-lg-6 mx-auto">
    <div class="card mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Add Data</h6>
        </div>
        <div class="card-body">
            <form method="post" action="{{ url('/ProjectGIS/update/' . $list['property']['id_property']) }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_sekolah_dasar">Nama Sekolah</label>
                    <input type="text" class="form-control" id="nama_sekolah_dasar" value="{{ $list['property']['nama_sekolah_dasar'] }}" name="nama_sekolah_dasar" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="x">Koordinat X</label>
                    <input type="number" class="form-control" id="x" name="x" value="{{ $list['property']['x'] }}" aria-describedby="emailHelp" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="y">Koordinat Y</label>
                    <input type="number" class="form-control" id="y" value="{{ $list['property']['y'] }}" name="y" aria-describedby="emailHelp" placeholder="0">
                </div>
                <div class="form-group">
                    <label for="alamat_sekolah_dasar">Status Sekolah</label>
                    <select class="form-control mb-3" name="status_sekolah_dasar">
                        @if($list['property']['status_sekolah_dasar'] == 'Swasta')
                        <option value="Swasta">Swasta</option>
                        <option value="Negri">Negri</option>
                        @endif
                        @if($list['property']['status_sekolah_dasar'] == 'Negri')
                        <option value="Negri">Negri</option>
                        <option value="Swasta">Swasta</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat_sekolah_dasar">Alamat Sekolah</label>
                    <textarea class="form-control" id="alamat_sekolah_dasar" name="alamat_sekolah_dasar" rows="3">{{ $list['property']['alamat_sekolah_dasar'] }}</textarea>
                </div>
                <div class="form-group">
                    <label for="y">Url Foto</label>
                    <input type="text" class="form-control" id="gambar" name="gambar" aria-describedby="emailHelp" placeholder="gambar">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

@endsection
