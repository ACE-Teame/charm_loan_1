<?php 
namespace app\Controller;
use system\core\Config;
use system\core\Page;
use app\core\Wb_Controller;

/**
 * 用户模块
 * @author 命中水、
 * @date(2017.7.12)
 */
class UserController extends Wb_Controller
{
	private $_userModel;
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * 用户列表
	 */
	public function index()
	{
		$where = $this->_getSearch();
		if(isset($_GET['page'])) {
			$now_page = intval($_GET['page']) ? intval($_GET['page']) : 1;
		}else {
			$now_page = 1;
		}
		// 取得每页条数
		$pageNum           = Config::get('PAGE_NUM', 'page');
		// 计算偏移量
		$offset            = $pageNum * ($now_page - 1);

		$data['count']     = parent::$model->count('user', $where);
		$where['LIMIT']     = [$offset, $pageNum];

		$data['userData']  = parent::$model->select('user', '*', $where);
		// 分页处理
		$objPage           = new page($data['count'], $pageNum, $now_page, '?page={page}');
		$data['pageNum']   = $pageNum;
		$data['pageList']  = $objPage->myde_write();
		view('admin/user', $data);
	}

	public function byPkGetUser()
	{
		ajaxReturn(parent::$model->select('user', ['id', 'username'], ['id' => get('id')])[0]);
	}


	/**
	 * 拼接查询条件
	 * @return array
	 */
	public function _getSearch()
	{
		if(get('name')) 
			$where['name[~]'] = get('name');
		if(get('section_id')) {
			$where['section_id[~]'] = get('section_id');			
		}
		if(get('group_id')) {
			$where['group_id[~]'] = get('group_id');
		}
		return $where;
	}

	
	/**
	 * 增加/修改用户
	 */
	public function add()
	{
		if(post()) {
			if(intval(post('id'))) {
				$uptData = [
					'username'    => post('username'),
					'update_time' => time(),
				];
				if(post('password')) $uptData['password'] = password_hash(post('password'), PASSWORD_DEFAULT);
				$flag = parent::$model->update('user', $uptData, ['id' => intval(post('id'))]);
			}else {
				$insData = [
					'username'    => post('username'),
					'create_time' => time(),
					'update_time' => time(),
					'password'    => password_hash(post('password'), PASSWORD_DEFAULT),
				];
				parent::$model->insert('user', $insData);
			}
		}
		redirect('user');
	}

	/**
	 * 根据主键删除
	 */
	public function deleteById()
	{
		$id = intval(get('id'));
		if($id) {
			$flag = parent::$model->delete('user', ['id' => $id]);
			if($flag) redirect('user');
		}
	}
}