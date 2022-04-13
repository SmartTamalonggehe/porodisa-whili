
@extends('admin.layouts.default')

@section('judul','Distrik')

@section('main')

<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h3 class="page-title">Data Distrik</h3>
            <div class="d-inline-block align-items-center">
                {{-- <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">Tables</li>
                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                    </ol>
                </nav> --}}
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
            <h3 class="box-title">Form Tambah Data Distrik</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{route('distrik.store')}}" method="post">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="form-label">Nama Kabupaten/Kota</label>
                        <select class="form-select" name="kota_id" >
                                <option value="">-Pilih Kabupaten/Kota-</option>
                            @foreach ($kota as $item)
                                <option value="{{$item->id}}">{{$item->nm_kota}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label class="form-label">Nama Distrik</label>
                            <input type="text" class="form-control" id="nm_distrik" name="nm_distrik" placeholder="Masukan Nama Distrik">
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
            <h3 class="box-title">Data Distrik</h3>
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
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($distrik as $item )
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kota->nm_kota}}</td>
                            <td>{{$item->nm_distrik}}</td>
                            <td align="center">
                                <a href="{{ route('distrik.edit', $item->id) }}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-success mb-5">Edit</button></a>
                                <a href="{{ route('distrik.destroy', $item->id) }}"><button type="submit" class="waves-effect waves-light btn btn-outline btn-danger mb-5">Hapus</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama Kabupaten/Kota</th>
                        <th>Nama Distrik</th>
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

