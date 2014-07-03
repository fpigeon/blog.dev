<?php

use Carbon\Carbon;

class BaseModel extends Eloquent{
	public function getCreatedAtAttribute($value){
	    return $this->convertToLocalTimeZone($value);
	} // end of getCreatedAttribute

	public function getUpdatedAtAttribute($value){
	    return $this->convertToLocalTimeZone($value);
	} // end of getUpdatedAtAttribute

	private function convertToLocalTimeZone($value){
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

} //end of BaseModel