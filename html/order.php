<?php require('header.php'); ?>
	<div class="container clear">
		<?php require('sidebar.php'); ?>
		
		<div class="main fr">
			<h1>申请列表</h1>
			<div class="operate">
				<a href="javascript:document.search.submit()" class="btn search">查询</a>
				<a href="#" class="btn export">导出</a>
				<a href="#" class="btn reflash">刷新</a>
				
			</div>

			<div class="search">
				<form action="#" class="searchForm" method="GET" name="search">
					<div class="entry">
						<label>用户名:</label>
						<input type="text" name="link_id" placeholder="">
					</div>
					<div class="entry">
						<label>申请银行:</label>
						<input type="text" name="company_name" placeholder="">
					</div>		
					<div class="entry">
						<label>申请额度:</label>
						<input type="text" name="user_id" placeholder="">
					</div>	
					<div class="entry">
						<label>身份证号:</label>
						<input type="text" name="user_id" placeholder="">
					</div>		
				</form>
			</div>
			<div class="table">
				<table>
					<thead>              
						<tr>
							<th>序号</th>
							<th>用户名</th>
							<th>电话</th>
							<th>身份证号</th>
							<th>地址</th>
							<th>申请银行</th>
							<th>申请额度</th>
							<th>提交时间</th>
							<th>IP</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>张三</td>
							<td>16254352456</td>
							<td>415263526515423625</td>
							<td>北京</td>
							<td>中国农业银行</td>
							<td>5万</td>
							<td>中国农业银行</td>
							<td>192.168.1.1</td>
							<td>
								<a href="#" class="btn delete">删除</a>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>李四</td>
							<td>16254352456</td>
							<td>415263526515423625</td>
							<td>上海</td>
							<td>中国农业银行</td>
							<td>5万</td>
							<td>中国农业银行</td>
							<td>192.168.1.12</td>
							<td>
								<a href="#" class="btn delete">删除</a>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="paginate">
					<ul class="clear">
						<div id="page">
							<li><span>首页</span></li>
							<li><span>上一页</span></li>
							<li><a href="?page=1" title="第1页" class="active">1</a></li>
							<li><a href="?page=2" title="第2页">2</a></li>
							<li><a href="?page=2" title="下一页">下一页</a></li>
							<li><a href="?page=2" title="尾页">尾页</a></li>
							<p class="pageRemark">共<b> 2 </b>页<b> 16 </b>条数据</p>
						</div>
					</ul>
				</div>
			</div> <!-- end table -->
		</div><!-- end main -->

		<div class="popup">
			<div class="content">
				<div class="title"><i class="iconfont icon-modify"></i> 编辑</div>
				<div class="form">						
					<form action="#" class="operateForm" method="POST" name="form1">
						<div class="entry">
							<input type="hidden" name="id" id="id" value="">
						</div>
						<div class="entry">
							<label>用户名:</label>
							<input type="text" name="username" id="username" value="" placeholder="">
						</div>
						<div class="entry">
							<label>密码:</label>
							<input type="password" name="password" id="password" value="" placeholder="">
						</div>
						<div class="entry">
							<label>确定密码:</label>
							<input type="password" name="password" id="password" value="" placeholder="">
						</div>
					</form>
				</div>
				<div class="operate">
					<a href="#" class="btn save">保存</a>
					<a href="#" class="btn cancle">取消</a>
				</div>			
				<div class="close"><a href="#" class="btn-close"><i class="iconfont icon-close"></i></a></div> 
			</div>
		</div><!-- end popup -->
	</div>
<?php require('footer.php'); ?>
