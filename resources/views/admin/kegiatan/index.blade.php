@extends('admin.layouts.default')

@section('judul', 'Kegiatan')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title">KEGIATAN</h2>
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
                        <h4 class="box-title">Form Tambah Data kegiatan</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                    <form class="form" action="{{route('kegiatan.store')}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label class="form-label">Keterangan</label>
                                            <textarea type="text" class="form-control" id="keterangan" name="keterangan"
                                                placeholder="Keterangan"></textarea>
                                        </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="form-label">Taggal</label>
                                            <input type="date" class="form-control" id="tgl" name="tgl">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="form-label">Foto</label>
                                            <div class="input-group mb-3">
                                                <input type="file" class="form-control" name="foto" id="foto">
                                                <label class="input-group-text" for="foto">Upload</label>
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
                        <h4 class="box-title">Data Kegiatan</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th> Kegiatan</th>
                                        <th> Tanggal</th>
                                        <th> Gambar</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kegiatan as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->keterangan }}</td>
                                            <td>{{ $item->tgl }}</td>
                                            <td align="center">
                                                <img width="100px" src="{{asset('storage/kegiatan/'.$item->foto)}}" alt="" srcset="">
                                            </td>
                                            <td align="center">
                                                <a href="{{ route('kegiatan.edit', $item->id) }}"><button type="submit"
                                                        class="waves-effect waves-light btn btn-outline btn-success mb-5">Edit</button></a>
                                               
                                                        <form action="{{ route('kegiatan.destroy', $item->id) }}" method="post" id="formHapus" class="d-inline">
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
                                        <th>Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Gambar</th>
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
