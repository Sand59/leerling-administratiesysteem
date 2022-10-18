<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultaat extends Model
{
    use HasFactory;

    protected $table = 'resultaats';
    public $timestamps = true;
    protected $fillable = [
      'cursusjaar', 
      'vak', 
      'resultaat', 
      'student_id'
   ];
    
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
