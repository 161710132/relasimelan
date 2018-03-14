@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Club Bola
			  	<div class="panel-title pull-right"><a href="{{ route('clubbola.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Club</th>
					  <th>Asal Kota</th>
					  <th>Nama Stadion</th>
					  <th>Manager</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($mhs as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama_club }}</td>
				    	<td><p>{{ $data->asal_kota }}</p></td>
				    	<td><p>{{ $data->nama_stadion }}</p></td>
				    	<td><p>{{ $data->managerclub->nama_manager }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('clubbola.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('clubbola.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('clubbola.destroy',$data->id) }}">
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