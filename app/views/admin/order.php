<?php echo view('admin/header') ?>
    <div class="container clear">
        <?php echo view('admin/sidebar') ?>
        
        <div class="main fr">
            <h1>申请列表</h1>
            <div class="operate">
                <a href="javascript:document.search.submit()" class="btn search">查询</a>
                <a href="javascript:;" class="btn export" onClick="export_order()">导出</a>
                <a href="javascript:;" class="btn delete" onClick="delete_order()">删除</a>
                <a href="javascript:location.reload();" class="btn reflash">刷新</a>
            </div>

            <div class="search">
                <form action="<?php echo base_url('admin/orderList');?>" class="searchForm" method="GET" name="search">
                    <div class="entry">
                        <label>用户名:</label>
                        <input type="text" name="username" placeholder="">
                    </div>
                    <div class="entry">
                        <label>申请银行:</label>
                        <select name="bank" id="">
                            <option value="">---请选择---</option>
                            <?php foreach ($bankData as $key => $bank): ?>
                                <option value="<?php echo $bank['key'] ?>"><?php echo $bank['val'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>      
                    <div class="entry">
                        <label>身份证号:</label>
                        <input type="text" name="cardid" placeholder="">
                    </div>   
                    <div class="entry">
                        <label>子链接:</label>
                        <input type="text" name="c" placeholder="">
                    </div>
                    <div class="entry">
                        <label>申请额度:</label>
                        <select name="quato" id="">
                            <option value="">---请选择---</option>
                            <?php foreach ($quatoData as $key => $quato): ?>
                                <option value="<?php echo $quato['key'] ?>"><?php echo $quato['val'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>  
                    <div class="entry">
                        <label>时间段:</label>
                        <input type="text" name="start_date" id="start_date" placeholder="" onclick="WdatePicker()"> - 
                        <input type="text" name="end_date" id="end_date" placeholder="" onclick="WdatePicker()">
                    </div>    
                </form>
            </div>
            <div class="table">
                <form action="" id="export_form" method="post">
                    <table>
                        <thead>              
                            <tr>
                                <th><input type="checkbox" name="" id="chkall"></th>
                                <th>序号</th>
                                <th>子链接</th>
                                <th>用户名</th>
                                <th>电话</th>
                                <th>身份证号</th>
                                <th>地址</th>
                                <th>申请银行</th>
                                <th>申请额度</th>
                                <th>提交时间</th>
                                <th>IP</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orderData as $key => $order): ?>
                                <tr>
                                    <td><input type="checkbox" class="chk" name="order[]" value="<?php echo $order['id'] ?>"</td>
                                    <td><?php echo $number++ ?></td>
                                    <td><?php echo $order['c'] ?></td>
                                    <td><?php echo $order['username'] ?></td>
                                    <td><?php echo $order['phone'] ?></td>
                                    <td><?php echo $order['cardid'] ?></td>
                                    <td><?php echo $order['address'] ?></td>
                                    <td><?php echo $order['bank'] ?></td>
                                    <td><?php echo $order['quato'] ?></td>
                                    <td><?php echo get_date($order['time']) ?></td>
                                    <td><?php echo $order['ip'] ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </form>
                <div class="paginate">
                    <ul class="clear">
                        <?php if ($count > $pageNum): ?>
                            <?=$pageList?>
                        <?php endif ?>
                    </ul>
                </div>
            </div> <!-- end table -->
        </div><!-- end main -->

        <div class="popup">
            <div class="content">
                <div class="title"><i class="iconfont icon-modify"></i> 编辑</div>
                <div class="form">                      
                    <form action="#" class="operateForm" method="POST" name="form1" id="from">
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
    <?php echo js('My97DatePicker/WdatePicker.js') ?>
    <script>
        /**
         * 导出csv
         */
        function export_order()
        {
            $('#export_form').attr('action', "<?php echo base_url('admin/downloadOrder') . $exportUri ?>");
            $('#export_form').submit();
        }

        /**
         * 删除申请
         */
        function delete_order(id)
        {
            if(confirm('确定删除？') == true){
                $("#export_form").attr('action', '<?=base_url('admin/deleteOrderByIds')?>' + '?id=' + id);
                $("#export_form").submit();
            }
        }

    </script>
<?php echo view('admin/footer') ?>
