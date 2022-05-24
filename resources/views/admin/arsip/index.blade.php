@extends('admin.layouts.default')

@section('judul', 'Arsip')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title"> ARSIP</h2>
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
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ session('berhasil') }}
            </div>
        </div>
    @endif


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Form Tambah Data Arsip</h4>
                    </div>
                    {{-- error --}}
                    @if ($errors->any())
                        <ul class="alert alert-danger mx-3">
                            @foreach ($errors->all() as $error)
                                <li class="mx-3">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form class="form" action="{{ route('arsip.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="nm_arsip">Nama Arsip</label>
                                            <input type="text" class="form-control" id="nm_arsip" name="nm_arsip"
                                                placeholder="Masukan Nama Arsip">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="keterangan">Keterangan</label>
                                            <input type="text" class="form-control" id="keterangan" name="keterangan"
                                                placeholder="Masukan Ketrangan">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-label" for="file_arsip">File</label>
                                            <input type="file" class="form-control" id="file_arsip" name="file_arsip">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-end">
                                <button type="submit" class="btn btn-primary">
                                    <i class="ti-save-alt"></i> Simpan
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->




    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Data Arsip</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Arsip</th>
                                        <th>Keterangan</th>
                                        <th>File</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($arsip as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nm_arsip }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>
                                                <a href="{{ asset('storage/arsip/' . $item->file_arsip) }}">File
                                                    {{ $item->nm_arsip }}</a>
                                            </td>
                                            <td align="center">
                                                <a href="{{ route('arsip.edit', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Edit</button></a>

                                                <form action="{{ route('arsip.destroy', $item->id) }}" method="post"
                                                    id="formHapus" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-danger mb-5"
                                                        onclick="return confirm('Anda Yakin Menghapus Data Ini? ')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kabupaten/Kota</th>
                                        <th>Opsi</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
    </section>
    <!-- /.content -->


@endsection
