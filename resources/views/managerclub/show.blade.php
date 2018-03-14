@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Manager 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Back</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Manager</label>	
			  			<input type="text" name="nama_manager" class="form-control" value="{{ $aku->nama_manager }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Umur</label>	
			  			<input type="text" name="umur" class="form-control" value="{{ $aku->umur }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Tempat Lahir</label>	
			  			<input type="text" name="tempat_lahir" class="form-control" value="{{ $aku->tempat_lahir }}"  readonly>
			  			</div>

			  			<div class="form-group">
			  			<label class="control-label">Tanggal Lahir</label>	
			  			<input type="date" name="tanggal_lahir" class="form-control" value="{{ $aku->tanggal_lahir }}"  readonly>
			  			</div>

			  			<div class="form-group">
			  			<label class="control-label">Club Bola</label>	
			  			<input type="text" name="nama_club" class="form-control" value="{{ $aku->nama_club }}"  readonly>@foreach($aku->clubbola as $data)
			  				-{{ $data->nama }}
			  			</div>

			  				@endforeach
			  			</textarea> 
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection