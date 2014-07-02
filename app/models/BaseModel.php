<?php

use Carbon\Carbon;

class BaseModel extends Eloquent{
	public function getCreatedAtAttribute($value){
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	} // end of getCreatedAttribute

	public function getUpdatedAtAttribute($value){
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	} // end of getUpdatedAtAttribute

	// public function getUpdatedAtAttribute($value){
	//     $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	//     return $utc->setTimezone('America/Chicago');
	// } // end of getUpdatedAtAttribute
	
} //end of BaseModel