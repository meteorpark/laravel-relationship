<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Car
 * @package App\Models
 */
class Car extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $primaryKey = 'car_id';
    /**
     * @var string[]
     */
    protected $guarded = ['car_id'];

}
