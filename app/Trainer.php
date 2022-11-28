<?php
 
namespace App;
 
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

 
class Trainer extends Model

{
   
    // añadido el 04/10/22
    
    protected $fillable=['name','Apellido','Avatar'];
    use Searchable;
    //
}
