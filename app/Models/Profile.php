<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable=['first_name','last_name','email','adress','phone','bio','photo','linkedin','github'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
