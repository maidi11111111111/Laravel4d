@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="post">
                        @csrf
                        <div class="form group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">User Id</label>
                                    <input type="text" name="user_id" class="form-control" placeholder="Tambahkan User Id">
                                </div>
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Tambahkan NPM">
                                </div>
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir">
                                </div>
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir">
                                </div>
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat">
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="text" name="telepon" class="form-control" placeholder="Tambahkan Telepon">
                                </div>
                                <div class="col">
                                    <label for="">Gender</label><br>
                                    <input type="radio" name="gender" value="L" selected>Laki-Laki<br>
                                    <input type="radio" name="gender" value="P" >Perempaun
                                </div>
                            </div>
                        </div>
                        
                    <div class="form-group">
                        <div class="form-row  float-right">
                            <div class="col">
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">BATAL</a>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
