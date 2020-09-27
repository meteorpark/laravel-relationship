<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CarUser
 * @package App\Models
 */
class CarUser extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'car_user';
    /**
     * @var string[]
     */
    protected $guarded = ['car_user_id'];
}
