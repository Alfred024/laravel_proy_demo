<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PropertyListingType extends Model
{
    protected $table = 'property_listing_type';
    protected $primaryKey = 'property_listing_type_id';

    function properties() : HasMany{
        return $this->hasMany(Property::class, 'property_listing_type_id', 'property_listing_type_id');
    }
}
