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
                    Daftar Tamu
                </header>
                <a href="{{url('tamu/create')}}" class="btn btn-success" style="margin-left: 20px; margin-top: 20px">+ Tambah Data</a>
                <div class="panel-body">
                    <table class="table  table-hover general-table">
                        <thead>
	                        <tr>
	                        	<th width="10%">No</th>
	                            <th width="30%">Nama Tamu</th>
	                            <th width="30%">Keperluan</th>
	                            <th width="20%">Action</th>
	                        </tr>
                        </thead>
                        @php $no = 1; @endphp
                        @foreach ($query as $data)
	                        <tbody>
		                        <tr>
		                        	<td>{{$no++}}</td>
		                            <td>{{$data->nama}}</td>
		                            <td>{{$data->keperluan}}</td>
		                            <td>
		                            	<a class="btn btn-primary fa fa-pencil" href="{{url('tamu/update/'.$data->id)}}"> Edit</a>
		                            	<a class="btn btn-danger fa fa-trash-o" href="{{url('tamu/delete/'.$data->id)}}"> Hapus</a>
		                        	</td>
		                        </tr>
	                        </tbody>
                        @endforeach
                    </table>
                </div>
            </section>
        </div>
    </div>
</body>
</html>

@endsection