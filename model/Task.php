<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * @package App\Model
 */
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'description', 'PID', 'PTID', 'hash', 'status', 'estimation', 'prio', 'user', ''
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * User constructor.
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        if(!is_array($attributes)) {
            $attributes = (array)$attributes;
        }
        parent::__construct($attributes);
    }
}
