<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [

        'first_name',
        'city_id',
        'department_id',
        'region_id',
        'last_name',
        'middle_name',
        'address',
        'phone',
        'zip_code',
        'date_of_birth',
        'date_hired',
    ];

    protected $casts = [
        'date_of_birth' => 'datetime',
        'date_hired' => 'datetime',
    ];



    /**
     * Get the city associated with the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cities(): BelongsToMany
    {
        return $this->belongsToMany(City::class);
    }

    /**
     * Get the department associated with the Employee
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(Department::class);
    }



    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(Region::class);
    }
}
