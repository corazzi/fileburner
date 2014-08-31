<?php
use Illuminate\Database\Eloquent\SoftDeletingTrait;
class Files extends Eloquent
{
	use SoftDeletingTrait;
	protected $guarded = ['created_at'];
    protected $dates = ['deleted_at'];

}