@extends('index')
@section('konten')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">
                    Tambah Data Tamu
                </header>
                <div class="panel-body">
                   <div class="form">
	                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{url('tamu/simpan_create')}}">
	                    	@csrf
	                        <div class="form-group ">
	                            <label for="nama" class="control-label col-lg-3">Nama Tamu</label>
	                            <div class="col-lg-6">
	                                <input class=" form-control" id="nama" name="nama" type="text" />
	                            </div>
	                        </div>
	                        <div class="form-group ">
	                            <label for="keperluan" class="control-label col-lg-3">Keperluan</label>
	                            <div class="col-lg-6">
	                                <input class=" form-control" id="keperluan" name="keperluan" type="text" />
	                            </div>
	                        </div>
	                        <div class="form-group ">
	                            <label for="no_hp" class="control-label col-lg-3">Nomor HP</label>
	                            <div class="col-lg-6">
	                                <input class=" form-control" id="no_hp" name="no_hp" type="text" />
	                            </div>
	                        </div>
	                        <div class="form-group ">
	                            <label for="email" class="control-label col-lg-3">Email</label>
	                            <div class="col-lg-6">
	                                <input class=" form-control" id="email" name="email" type="email" placeholder="achmad@gmail.com" />
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <div class="col-lg-offset-3 col-lg-6">
	                               <a href="{{url('tamu/view')}}" class="btn btn-danger">Cancel</a>
	                               <button class="btn btn-primary" type="submit" name="save">Simpan</button>
	                            </div>
	                        </div>
	                    </form>
	                </div>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

@endsection