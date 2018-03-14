<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pemainbola extends Model
{
    protected $table = 'pemainbolas';
    protected $fillable = ['asal_kota'];
    public $timestamps = true;

    public function clubbola()
	{
		return $this->belongsTo('App\clubbola','clubbola_id');
	}
}
