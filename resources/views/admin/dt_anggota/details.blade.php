
@extends('admin.layouts.default')

@section('judul','Anggota')

@section('main')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h2 class="page-title">ANGGOTA</h2>
            <div class="d-inline-block align-items-center">
                <nav>
                   
                </nav>
            </div>
        </div>

    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Detail Data Anggota</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table  class="table">
                    <tbody>
                        <tr>
                            <td>No. Penduduk</td>
                            <td>:</td>
                            <td>{{$anggota->no_penduduk}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$anggota->nama}}</td>
                        </tr>
                        <tr>
                            <td>Tempat lahir</td>
                            <td>:</td>
                            <td>{{$anggota->tempat}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$anggota->tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Kabupaten/Kota </td>
                            <td>:</td>
                            <td>{{$anggota->kelurahan->distrik->kota->nm_kota}}</td>
                        </tr>
                        <tr>
                            <td>Distrik </td>
                            <td>:</td>
                            <td>{{$anggota->kelurahan->distrik->nm_distrik}}</td>
                        </tr>
                        <tr>
                            <td>kelurahan</td>
                            <td>:</td>
                            <td>{{$anggota->kelurahan->nm_kelurahan}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{$anggota->agama}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$anggota->jenkel}}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td>{{$anggota->pendidikan}}</td>
                        </tr>
                       
                    </tbody>
                </table>
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                  <a href="{{route('anggotaAdmin.index')}}"> Kembali</a>
                    </button>
                </div>
            </div>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
</section>
<!-- /.content -->

@endsection

</body>
</html>

