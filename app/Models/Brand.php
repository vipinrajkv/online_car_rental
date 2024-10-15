<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'brand_name',
        'category_id',
    ];

    /**
     * 
     */
    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'brand_id', 'id');
    }

    /**
     * get  category item
     *
     * @param integer $categoryId
     * @return array
     */
    public function getBrandItem($categoryId = null) {
        $result = [];
        $data =   $this->where('category_id', $categoryId)->get();
        $result = $data ? $data : [];
        return $result;
    }
}
