<?php

namespace Luanardev\Modules\HRSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Luanardev\Modules\HRSettings\Concerns\WithFinder;

class ProgressType extends Model
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
    protected $table = 'hrm_config_progress_type';

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

    /**
     * @return boolean
     */
    public function isPermanent()
    {
        return $this->isNamed('Permanent');
    }

    /**
     * @return boolean
     */
    public function isPromotion()
    {
        return $this->isNamed('Promotion');
    }

    /**
     * @return boolean
     */
    public function isIncrement()
    {
        return $this->isNamed('Increment');
    }

    /**
     * @return boolean
     */
    public function isContract()
    {
        return $this->isNamed('Contract');
    }

    /**
     * @return boolean
     */
    public function isAppointment()
    {
        return $this->isNamed('Appointment');
    }

}
