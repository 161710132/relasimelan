@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Club Bola 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Club</label>	
			  			<input type="text" name="nama_club" class="form-control" value="{{ $b->nama_club }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Asal Kota</label>
						<input type="text" name="asal_kota" class="form-control" value="{{ $b->asal_kota }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Stadion</label>
						<input type="text" name="nama_stadion" class="form-control" value="{{ $b->nama_stadion }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Manager</label>
						<input type="text" name="nama_manager" class="form-control" value="{{ $b->managerclub->nama_manager }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection