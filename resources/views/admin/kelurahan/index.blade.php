
@extends('admin.layouts.default')

@section('judul','Kelurahan')

@section('main')


<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">Data Kelurahan</h3>
            <div class="d-inline-block align-items-center">
                <nav>
                    {{-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Tables</li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol> --}}
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
            <h3 class="box-title">Form Tambah Data Kelurahan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{route('kelurahan.store')}}" method="post">
                @csrf
                <div class="box-body">
                    {{-- <div class="form-group">
                        <label class="form-label">Nama Kabupaten/Kota</label>
                        <select class="form-select" name="kota_id" required>
                                <option>-Pilih Kabupaten/Kota-</option>
                            @foreach ($kota as $item)
                                <option value="{{$item->id}}">{{$item->nm_kota}}</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="form-group">
                        <label class="form-label">Nama Distrik</label>
                        <select class="form-select" name="distrik_id" required>
                                <option>-Pilih Distrik-</option>
                            @foreach ($distrik as $item)
                                <option value="{{$item->id}}">{{$item->nm_distrik}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Nama Kelurahan</label>
                            <input type="text" class="form-control" id="nm_kelurahan" name="nm_kelurahan" placeholder="Masukan Nama Kelurahan">
                        </div>
                        </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer text-end">

                    <button type="submit" class="btn btn-primary">
                        <i class="ti-save-alt"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
</section>
<!-- /.content -->




<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Data Kelurahan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kabupaten/Kota</th>
                        <th>Nama Distrik</th>
                        <th>Nama Kelurahan</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kelurahan as $item )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->distrik->kota->nm_kota}}</td>
                            <td>{{$item->distrik->nm_distrik}}</td>
                            <td>{{$item->nm_kelurahan}}</td>
                            <td align="center">
                                <a href="{{ route('kelurahan.edit', $item->id) }}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-success mb-5">Edit</button></a>
                                <a href="{{ route('kelurahan.destroy', $item->id) }}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-danger mb-5">Hapus</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Kabupaten/Kota</th>
                        <th>Nama Distrik</th>
                        <th>Nama Kelurahan</th>
                        <th>Opsi</th>
                    </tr>
                </tfoot>
                </table>
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

