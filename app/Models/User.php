<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class User extends Model implements AuthenticatableContract
{
use Authenticatable;
    protected $casts = [
        'id' => 'string',
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'id';
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = (string) Str::uuid();
            }
        });
    }
}
