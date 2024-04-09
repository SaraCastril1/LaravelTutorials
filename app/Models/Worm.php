<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worm extends Model
{
    /**
     * WORM ATTRIBUTES
     * $this->attributes['id'] - int - contains the worm primary key (id)
     * $this->attributes['name'] - string - contains the worm name
     * $this->attributes['type'] - string - contains the worm typo, it can be sandworm or spaceworm
     * $this->attributes['velocity'] - float - contains the worm velocity in km/h
     */
    protected $fillable = ['name', 'type', 'velocity'];
    public static function validate($request) { 
        $request->validate([ 
            'name' => 'required|string',
            'type' => 'required|string|in:sandworm,spaceworm',
            'velocity' => 'required|numeric|min:0',
        ]); 
    }

    public function getId():int
   {
       return $this->attributes['id'];
   }
   public function getName():string
   {
       return $this->attributes['name'];
   }
   public function setName(string $name):void
   {
       $this->attributes['name'] = $name;
   }

   public function getType():string
   {
       return $this->attributes['type'];
   }
   public function setType(string $type):void
   {
       $this->attributes['type'] = $type;
   }

   public function getVelocity():float
   {
       return $this->attributes['velocity'];
   }
   public function setVelocity(float $velocity):void
   {
       $this->attributes['velocity'] = $velocity;
   }


    
}
