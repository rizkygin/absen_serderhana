@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Informasi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="table-responsive">
                        <table class="table">
                          <form class="" action="/absen" method="post">
                            {{csrf_field()}}
                            <tr>
                              <td>
                                <input class="from-cotrol" type="text" name="note" value="">
                              </td>
                              <td>
                                <button class="btn btn-flat btn-primary" type="text" name="btnIN" value="">ABSEN MASUK</button>
                              </td>
                              <td>
                                <button class="btn btn-flat btn-primary" type="text" name="btnOUT" value="">ABSEN KELUAR</button>
                              </td>
                            </tr>
                          </form>
                        </table>
                      </div>

                </div>
            </div>
        </div>
      </div>
      <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Riwayat Absensi</div>

                    <div class="card-body">
                      <div class="table-responsive table-bordered table-hover">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Jam Masuk</th>
                              <th>Jam Keluar</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>2016-01-03</td>
                              <td>02:00:00</td>
                              <td>02:00:00</td>
                              <td>Hello</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection
