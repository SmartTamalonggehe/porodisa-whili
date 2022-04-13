
@extends('admin.layouts.default')

@section('judul','Pengurus')

@section('main')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">Pengurus</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Tables</li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
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
            <h3 class="box-title">Detail Data Pengurus</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table  class="table">
                    <tbody>
                        <tr>
                            <td>No. Penduduk</td>
                            <td>:</td>
                            <td>{{$pengurus->no_penduduk}}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{$pengurus->nama}}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>:</td>
                            <td>{{$pengurus->jabatan}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>{{$pengurus->jenkel}}</td>
                        </tr>
                        <tr>
                            <td>Tempat lahir</td>
                            <td>:</td>
                            <td>{{$pengurus->tempat}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahair</td>
                            <td>:</td>
                            <td>{{$pengurus->tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>{{$pengurus->agama}}</td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td>
                            <td>:</td>
                            <td>{{$pengurus->pendidikan}}</td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>:</td>
                            <td>{{$pengurus->pekerjaan}}</td>
                        </tr>
                        <tr>
                            <td>Foto</td>
                            <td>:</td>

                             <td>
                                <a href="{{asset('storage/pengurus/' .$pengurus->foto)}}">
                                <img width="200px"  src="{{asset('storage/pengurus/' .$pengurus->foto)}}" alt="" srcset=""></a>
                            </td>
                        </tr>
                    </tbody>

                </table>
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                  <a href="{{route('pengurus.index')}}"> Kembali</a>
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

