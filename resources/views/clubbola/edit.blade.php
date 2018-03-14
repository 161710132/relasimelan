@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Club Bola
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('clubbola.update',$b->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama_club') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Club</label>	
			  			<input type="text" name="nama_club" class="form-control" value="{{ $b->nama_club }}" required>
			  			@if ($errors->has('nama_club'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_club') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('asal_kota') ? ' has-error' : '' }}">
			  			<label class="control-label">Asal Kota</label>	
			  			<input type="text" value="{{ $b->asal_kota }}" name="asal_kota" class="form-control"  required>
			  			@if ($errors->has('asal_kota'))
                            <span class="help-block">
                                <strong>{{ $errors->first('asal_kota') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('nama_stadion') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Stadion</label>	
			  			<input type="text" value="{{ $b->nama_stadion }}" name="nama_stadion" class="form-control"  required>
			  			@if ($errors->has('nama_stadion'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_stadion') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('manager_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Manager</label>	
			  			<select name="manager_id" class="form-control">
			  				@foreach($mn as $data)
			  				<option value="{{ $data->id }}" {{ $selectedmanagerclub == $data->id ? 'selected="selected"' : '' }} >{{ $data->nama_manager }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('manager_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('manager_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection