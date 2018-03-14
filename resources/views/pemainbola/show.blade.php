@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Pemain Bola 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Asal Kota</label>	
			  			<input type="text" name="asal_kota" class="form-control" value="{{ $c->asal_kota }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Club Bola</label>	
			  			<input type="text" name="clubbola_id" class="form-control" value="{{ $c->clubbola->nama_club }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection