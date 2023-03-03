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

    const STATUS = [
        'active' => [ 'label' => '有効', 'class' => 'bg-primary' ],
        'inactive' => [ 'label' => '無効', 'class' => 'bg-secondary' ],
    ];

    const TYPE = [
        1 => [ 'label' => '犬'],
        2 => [ 'label' => '猫'],
        3 => [ 'label' => '鳥'],
        4 => [ 'label' => 'うさぎ'],
        5 => [ 'label' => 'ハムスター'],
    ];


    public function getStatusLabelAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ無効を返す
        if (!isset(self::STATUS[$status])) {
            return '無効';
        }

        return self::STATUS[$status]['label'];
    }

    public function getStatusClassAttribute()
    {
        // 状態値
        $status = $this->attributes['status'];

        // 定義されていなければ空を返す
        if (!isset(self::STATUS[$status])) {
            return '';
        }

        return self::STATUS[$status]['class'];
    }
    public function getTypeLabelAttribute()
    {
        // 状態値
        $type = $this->attributes['type'];

        // 定義されていなければ空を返す
        if (!isset(self::TYPE[$type])) {
            return '';
        }

        return self::TYPE[$type]['label'];
    }

    public function Items()
    {
        return Item::orderBy('created_at','desc')->get();
    }
}
