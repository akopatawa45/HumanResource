<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class LeaveReport extends Model
{
    use HasFactory;


    protected $fillable = [
        'leave_report_id',
        'leave_type_id',
    ];


    /**
     * Get the leaveRequest that owns the LeaveReport
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function leaveRequest(): BelongsTo
    {
        return $this->belongsTo(LeaveRequest::class);
    }
}
