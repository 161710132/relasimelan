<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clubbola extends Model
{
	 protected $table = 'clubbolas';
     protected $fillable = ['nama_club','asal_kota','nama_stadion'];
     public $timestamps = true;

	public function managerclub()
	{
		return $this->belongsTo('App\managerclub','manager_id');
	}

    public function pemainbola()
    {
    	return $this->hasOne('App\pemainbola','clubbola_id');
    }
    
}
