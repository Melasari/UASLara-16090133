@extends('dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Riwayat Absensi</h1>
            <div class="panel-body">
                    <table class="table table-responsive table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Lahir</th>
                                <th>Tempat Lahir</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sari</td>
                                <td>Perempuan</td>
                                <td>03/08/1998</td>
                                <td>Tegal</td>
                                <td>Guru</td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Ali</td>
                                <td>Laki-Laki</td>
                                <td>10/07/1996</td>
                                <td>Tegal</td>
                                <td>Dosen</td>
                        </tbody>
                    </table>
                   
                </div>
        </div>
    </div>
</div>
@stop
@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Absensi</a></p>
</div>
@stop