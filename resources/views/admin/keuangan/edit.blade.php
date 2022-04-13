
@extends('admin.layouts.default')

@section('judul','Edit')

@section('main')


<!-- Main content -->
<section class="content">
    <div class="row">
    <div class="col-12">
        <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Form Edit Data Keuangan</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form class="form" novalidate action="{{route('keuangan.update', $keuangan->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" value="{{$keuangan->tgl}}" id="tgl" name="tgl">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Keterangan</label>
                            <input type="text" class="form-control" value="{{$keuangan->keterangan}}" id="keterangan" name="keterangan">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Debat</label>
                            <input type="text" class="form-control" value="{{$keuangan->debet}}" id="debet" name="debet">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Kredit</label>
                            <input type="text" class="form-control" value="{{$keuangan->kredit}}" id="kredit" name="kredit">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Saldo</label>
                            <input type="text" class="form-control" value="{{$keuangan->saldo}}" id="saldo" name="saldo">
                        </div>
                        </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer text-end">
                    <button type="submit" class="btn btn-warning me-1">
                    <i class="ti-trash"></i><a href="{{route('keuangan.index')}}"> Batal</a>
                    </button>
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




@endsection


</body>
</html>

