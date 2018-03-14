@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Pemain Bola 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('pemainbola.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('asal_kota') ? ' has-error' : '' }}">
			  			<label class="control-label">Asal Kota</label>	
			  			<input type="text" name="asal_kota" class="form-control"  required>
			  			@if ($errors->has('asal_kota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asal_kota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('clubbola_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Club Bola</label>	
			  			<select name="clubbola_id" class="form-control">
			  				@foreach($mhs as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama_club }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('clubbola_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('clubbola_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection