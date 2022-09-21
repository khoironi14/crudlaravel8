<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table='task';
    protected $fillable=['name_task','user_id','deadline'];

    public function user(){

        return $this->belongsTo(User::class);
    }
}
