<?php 
namespace app\model;
use system\core\Model;

class SkipModel extends Model
{

	public function __construct()
	{
		parent::__construct();
		$this->pk = 'id';
	}
}

 ?>