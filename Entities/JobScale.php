<?php

namespace Luanardev\Modules\HRSettings\Entities;

use Illuminate\Database\Eloquent\Model;

class JobScale extends Model
{
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
    protected $table = 'hrm_config_job_scale';

    /**
     * The primary key associated with the model.
     *
     * @var string
     */
	protected $primaryKey = 'id';

    /**
     * @var array
     */
    protected $fillable = ['scale', 'leave_days'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notches()
    {
        return $this->hasMany(JobNotch::class, 'scale');
    }

}
