<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LeaveType extends Model
{
    use HasFactory;

    protected $fillable = [
        'leave_type_id',
        'name',
        'days'
    ];

    /**
     * Get the LeaveRequest that owns the LeaveType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function LeaveRequest(): BelongsTo
    {
        return $this->belongsTo(LeaveRequest::class);
    }
}
