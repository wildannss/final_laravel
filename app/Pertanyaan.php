<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jawaban;
use App\User;
// use App\Komentar;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['isi','judul','tags', 'user_id'];
    protected $casts = ['tags' => 'array'];
    
    public function jawaban()
    {
    	return $this->hasMany(Jawaban::class, 'jawaban_id');
    }

    // public function komentar()
    // {
    // 	return $this->hasMany(Komentar::class, 'id');
    // }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
