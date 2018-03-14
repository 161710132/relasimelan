<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class managerclub extends Model
{
    protected $table = 'managerclubs'; 
    protected $fillable = ['nama_manager','umur','tempat_lahir','tanggal_lahir']; 
    public $timestamps = true; 

    public function clubbola()
    {
    	return $this->hasMany('App\clubbola','manager_id');
    }
}
