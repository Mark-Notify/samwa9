<?php

function datethai($month)
{
	$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
	if ($strMonthCut) 
	{
		return $strMonthCut;
	}
	else
	{
		return $month;
	}
}

?>