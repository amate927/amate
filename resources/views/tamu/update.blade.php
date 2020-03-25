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
	                    <form class="cmxform form-horizontal " id="signupForm" method="post" action="{{url('tamu/simpan_update/'.$query->id)}}">
	                    	@csrf
	                    	<input type="hidden" name="_method" value="PUT">
	                        <div class="form-group ">
	                            <label for="nama" class="control-label col-lg-3">Nama Tamu</label>
	                            <div class="col-lg-6">
	                                <input class=" form-control" id="nama" name="nama" value="{{$query->nama}}" type="text" />
	                            </div>
	                        </div>
	                        <div class="form-group ">
	                            <label for="keperluan" class="control-label col-lg-3">Keperluan</label>
	                            <div class="col-lg-6">
	                                <input class=" form-control" id="keperluan" name="keperluan" value="{{$query->keperluan}}" type="text" />
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