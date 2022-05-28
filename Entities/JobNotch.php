<?php

namespace Luanardev\Modules\HRSettings\Entities;

use Illuminate\Database\Eloquent\Model;

class JobNotch extends Model
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
    protected $table = 'hrm_config_job_notch';

    /**
     * @var array
     */
    protected $fillable = ['scale', 'notch'];

    /**
     * The primary key associated with the model.
     *
     * @var string
     */
	protected $primaryKey = 'id';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function scale()
    {
        return $this->belongsTo(JobScale::class, 'scale');
    }

    

}
