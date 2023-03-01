<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'status',
        'type',
        'detail',
    ];

    // DBのtypeを変換
    public function typeAsString(){
        $types = ["1"=>"犬","2"=>"猫","3"=>"鳥","4"=>"うさぎ","5"=>"ハムスター"];

        return $types[$this->type];
    }
}
