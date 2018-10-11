<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    
  protected $fillable = [
      'urls'
  ];

  protected $table = 'links';
  public $timestamps = true;




  static function MakeURL($url)
    {

  
      $key=str_random(4);
      $new_url= $url.$key;
      return $new_url;
 
    }

}
