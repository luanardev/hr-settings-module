<?php
namespace Luanardev\Modules\HRSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Luanardev\Modules\HRSettings\Concerns\WithFinder;

class Position extends Model
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
    protected $table = 'hrm_config_positions';

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

}
