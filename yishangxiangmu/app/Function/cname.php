<?php 

	function cname($cm)
	{
		if($cm == '0'){

			return '顶级分类';
		} else {

			$rs = DB::table('es_categroies')->where('cid',$cm)->first();

			return $rs->cname;

			
		}
	}



 ?>