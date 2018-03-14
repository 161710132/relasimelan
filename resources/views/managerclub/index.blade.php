@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Dosen
			  	<div class="panel-title pull-right"><a href="{{ route('managerclub.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Manager</th>
					  <th>Umur</th>
					  <th>Tempat Lahir</th>
					  <th>Tanggal Lahir</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($aku as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_manager }}</td>
				    	<td><p>{{ $data->umur }}</p></td>
				    	<td><p>{{ $data->tempat_lahir }}</p></td>
				    	<td><p>{{ $data->tanggal_lahir }}</p></td>
				    	<td>@foreach($data->clubbola as $bola)<li>{{ $bola->nama }}@endforeach</li></td>
<td>
	<a class="btn btn-warning" href="{{ route('managerclub.edit',$data->id) }}">Edit</a>
</td>
<td>
	<a href="{{ route('managerclub.show',$data->id) }}" class="btn btn-success">Show</a>
</td>
<td>
	<form method="post" action="{{ route('managerclub.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection