<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
    public $timestamps = true;
    protected $fillable = [
      'roepnaam', 
      'voorvoegsel', 
      'achternaam', 
      'voorletters', 
      'officielenaam', 
      'postcode', 
      'straat', 
      'huisnummer', 
      'toevoeging', 
      'woonplaats', 
      'klas'
    ];

    public function resultaats() {
      return $this->hasMany(Resultaat::class, 'student_id', 'id');
    }
}
