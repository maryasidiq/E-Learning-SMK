@extends('template_backend.home')
@section('heading', 'Edit Mapel')
@section('page')
  <li class="breadcrumb-item active"><a href="{{ route('mapel.index') }}">Mapel</a></li>
  <li class="breadcrumb-item active">Edit Mapel</li>
@endsection
@section('content')
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Edit Data Mapel</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ route('mapel.store') }}" method="post">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <input type="hidden" name="mapel_id" value="{{ $mapel->id }}">
              <div class="form-group">
                <label for="nama_mapel">Nama Mapel</label>
                <input type="text" id="nama_mapel" name="nama_mapel" value="{{ $mapel->nama_mapel }}"
                  class="form-control @error('nama_mapel') is-invalid @enderror"
                  placeholder="{{ __('Nama Mata Pelajaran') }}">
              </div>
              <div class="form-group">
                <label for="paket_id">Tingkat Kelas</label>
                <select id="paket_id" name="paket_id"
                  class="form-control @error('paket_id') is-invalid @enderror select2bs4">
                  <option value="">-- Pilih Tingkat Kelas --</option>
                  <option value="10" @if ($mapel->paket_id == '10') selected @endif>10</option>
                  <option value="11" @if ($mapel->paket_id == '11') selected @endif>11</option>
                  <option value="12" @if ($mapel->paket_id == '12') selected @endif>12</option>
                </select>
              </div>
              <div class="form-group">
                <label for="kelompok">Kelas</label>
                <select id="kelompok" name="kelompok"
                  class="select2bs4 form-control @error('kelompok') is-invalid @enderror">
                  <option value="">-- Pilih Kelas --</option>
                  <option value="Broadcasting & Perfilman" @if ($mapel->kelompok == 'Broadcasting & Perfilman') selected @endif>Broadcasting & Perfilman</option>
                  <option value="Teknik Jaringan Komputer & Telekomunikasi" @if ($mapel->kelompok == 'Teknik Jaringan Komputer & Telekomunikasi') selected @endif>Teknik Jaringan Komputer & Telekomunikasi</option>
                  <option value="Teknik Otomotif" @if ($mapel->kelompok == 'Teknik Otomotif') selected @endif>Teknik Otomotif</option>
                  <option value="Teknik Mesin" @if ($mapel->kelompok == 'Teknik Mesin') selected @endif>Teknik Mesin</option>
                  <option value="Desain Pemodelan" @if ($mapel->kelompok == 'Desain Pemodelan') selected @endif>Desain Pemodelan</option>
                  <option value="Bisnis Konstruksi" @if ($mapel->kelompok == 'Bisnis Konstruksi') selected @endif>Bisnis Konstruksi</option>
                  <option value="Teknik Elektronika" @if ($mapel->kelompok == 'Teknik Elektronika') selected @endif>Teknik Elektronika</option>
                  <option value="Teknik Listrik" @if ($mapel->kelompok == 'Teknik Listrik') selected @endif>Teknik Listrik</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <a href="#" name="kembali" class="btn btn-default" id="back"><i class='nav-icon fas fa-arrow-left'></i> &nbsp;
            Kembali</a> &nbsp;
          <button name="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Update</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
  </div>
@endsection
@section('script')
  <script type="text/javascript">
    $(document).ready(function () {
      $('#back').click(function () {
        window.location = "{{ route('mapel.index') }}";
      });
    });
    $("#MasterData").addClass("active");
    $("#liMasterData").addClass("menu-open");
    $("#DataMapel").addClass("active");
  </script>
@endsection