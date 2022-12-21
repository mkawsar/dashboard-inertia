<?php

namespace App\Models\Configuration;

use App\Enums\InterestTypeEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InterestConfig extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'interest_configs';

    protected $fillable = ['id', 'type', 'percentage', 'created_by', 'updated_by'];

    protected $casts = [
        'type' => InterestTypeEnum::class
    ];

    public function creator()
    {
        return $this->hasOne(User::class, 'id', 'created_by');
    }
}
