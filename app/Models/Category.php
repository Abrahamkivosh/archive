<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded =[] ;
    /**
     * Get all of the groups for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany(Group::class, 'category_id', 'id');
    }
    public function groupsCount()
    {
        // $this->with('groups')->wi;
    }
}
