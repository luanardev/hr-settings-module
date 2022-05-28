<?php

namespace Luanardev\Modules\HRSettings\Entities;

use Illuminate\Database\Eloquent\Model;
use Luanardev\Modules\HRSettings\Concerns\WithFinder;

class DocumentType extends Model
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
    protected $table = 'hrm_config_document_type';

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
