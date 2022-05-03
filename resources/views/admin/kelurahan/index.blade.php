
@extends('admin.layouts.default')

@section('judul','Kelurahan')

@section('main')


<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h2 class="page-title">KELURAHAN</h2>
            <div class="d-inline-block align-items-center">
                <nav>
                   
                </nav>
            </div>
        </div>

    </div>
</div>

   
@if (session('berhasil'))
    <div class="box-body pad res-tb-block">
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{session('berhasil')}} </div>							
    </div>
    @endif


<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h4 class="box-title">Form Tambah Data Kelurahan</h4>
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
            <h4 class="box-title">Data Kelurahan</h4>
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
                                <form action="{{ route('kelurahan.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
                                @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                    class="waves-effect waves-light btn btn-outline btn-danger mb-5" onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
                                </form> 
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

