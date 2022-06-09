@extends('user.layouts.default')

@section('judul', 'Arsip')

@section('main')


    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h2 class="page-title">Arsip</h2>
                <div class="d-inline-block align-items-center">
                    <nav>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <!-- START Card With Image -->
        <div class=""></div>
        <div class="row fx-element-overlay">
            @foreach ($arsip as $item)
                <div class="col-md-4 col-lg-4">
                    <div class="box b-solid">
                        <div class="fx-card-item">
                            <div class="fx-card-avatar fx-overlay-1">
                                <a href="{{ asset('storage/arsip/' . $item->file_arsip) }}">
                                    <img src="{{ asset('storage/arsip/' . $item->file_arsip) }}" style="height: 450px;"
                                        alt="user">
                                </a>
                            </div>
                            <div class="fx-card-content">
                                <h3 class="box-title">{{ $item->nm_arsip }}</h3>
                                <div><small>{{ $item->keterangan }}</small></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box -->
                </div>
            @endforeach
            <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END Card with image -->

    </section>

@endsection
