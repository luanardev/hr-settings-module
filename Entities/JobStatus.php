<?php

namespace Luanardev\Modules\HRSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Luanardev\Modules\HRSettings\Concerns\WithFinder;

class JobStatus extends Model
{
    use WithFinder;

    /** 
     * Disable timestamp
     * var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hrm_config_job_status';

    /**
     * The primary key associated with the model.
     *
     * @var string
     */
	protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['name'];
    

    public static function getQuitingStatus()
    {
        $statuses = ['Retired','Resigned','Terminated', 'Dismissed', 'Deceased'];
        $statusKeys = static::whereIn('name', $statuses)->pluck('id')->toArray();
        return $statusKeys;
    }

    public static function getResumingStatus()
    {
        $statuses = ['Serving','Probation'];
        $statusKeys = static::whereIn('name', $statuses)->pluck('id')->toArray();
        return $statusKeys;
    }

}
