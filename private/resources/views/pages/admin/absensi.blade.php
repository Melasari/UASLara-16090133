@extends('dashboard')
@section('main')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
		<div class="col-sm-9">
            <h1 class="page-header">Karyawan</h1>
        </div>
        <div class="col-xs-6 col-md-3">
            <input type="submit" value="Simpan" name="simpan" class="page-header btn btn-lg btn-primary">
            <input type="submit" value="Batal" name="batal" class="page-header btn btn-lg btn-danger">
        </div>
    </div>
    <form action="" method="post">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" placeholder="Jenis Kelamin">
                    </div> 
                    <div class="form-group">
                        <label for="tgl_lahir">Tgl_Lahir</label>
                        <input type="date" class="form-control" placeholder="tgl_lahir">
                    </div>
                    <div class="form-group">
                        <label for="tmpt_lahir">Tempat_Lahir</label>
                        <input type="text" class="form-control" placeholder="tmpt_lahir">
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" placeholder="jabatan">
                    </div>
                    <div class="form-group">
                        <label for="poto">Photo</label>
                        <input type="file" class="form-control" placeholder="">
                    </div>                   
                </div>
            </div>
        </div>
    </form>
</div>
@stop
@section('footer')
<div class=" footer col-sm-12">
    <p class="back-link">My <a href="https://www.medialoot.com">Blog's</a></p>
</div>
@stop