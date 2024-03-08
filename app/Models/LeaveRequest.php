<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = [

        'leave_request',
        'description',
        'start_date',
        'end_date',
    ];


    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    /**
     * Get all of the leaveTypes for the LeaveRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leaveTypes(): BelongsToMany
    {
        return $this->belongsToMany(LeaveType::class);
    }

    /**
     * Get the user that owns the LeaveRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }


    /**
     * Get all of the leaveReports for the LeaveRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leaveReports(): BelongsToMany
    {
        return $this->belongsToMany(LeaveReport::class);
    }
}
