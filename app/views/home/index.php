<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>在线申请</title>
    <?php echo css('main.css') ?>
    <!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
</head>
<body>
    <div class="container home">
        <div class="top">
            <div class="img"><img src="<?php echo base_url('resource/images/logo.jpg') ?>" alt=""></div>       
        </div>
        <div class="form">
            <form id="form_application">
                <div class="entry clear">
                    <label>您的姓名:</label>
                    <input type="text" id="username" name="username" placeholder="请填写姓名">
                </div>
                <div class="entry clear">
                    <label>身份证号:</label>                
                    <input type="text" id="cardid" name="cardid" placeholder="请填写身份证号码">
                </div>
                <div class="entry clear">
                    <label>手机号码:</label>
                    <input type="text" id="phone" name="phone" placeholder="请填写手机号码">
                </div>
                <div class="entry clear">
                    <label>收卡地址:</label>
                    <input type="text" id="address" name="address" placeholder="请填写详细地址">
                </div>
                <div class="entry clear">
                    <label>发卡银行:</label>
                    <select name="bank" id="">
                        <?php foreach ($bankData as $key => $bank): ?>
                            <option value="<?php echo $bank['key'] ?>"><?php echo $bank['val'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="entry clear">
                    <label>申请金额:</label>
                    <select name="quato" id="">
                         <?php foreach ($quatoData as $key => $quato): ?>
                            <option value="<?php echo $quato['key'] ?>"><?php echo $quato['val'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="entry clear">
                    <input type="checkbox" name="" id="agree-id" onchange="agree_change(this)" checked="checked">本人已阅读《申请合约》
                </div>
                <input type="hidden" name="c" value="<?php echo $c ?>">
                <input type="hidden" name="is_agree" id="is_agree" value="1">
            </form>
            <a href="javascript:;" class="btn" id="submit_application">立即提交订单</a>


            <div class="box">
                <div class="text">
                    <p>
                        本人已阅读并同意《信用卡申领合约》保证所有提供申请资料真实、准确、完整、合法且有效。并同意向中国人民银行金融信用信息基础数据库报送个人信用信息。提交资料后客服会在24小时内与您联系！请保持电话畅通！办理成功后收取百分之二到百分之三的手续费。
                    </p>
                </div>
            </div>
        </div>
        <footer>
            <p>版权所有 © 粤ICP备17050892号-1</p>
            <p>交通银行股份有限公司太平洋信用卡中心中山分中心</p>
        </footer>
    </div>
    <?php echo js('jquery.min.js') ?>
    <script>

        function agree_change(it)
        {
            if ($(it).is(':checked')) {
                $("#is_agree").val(1);
            } else {
                $("#is_agree").val(0);
            }
        }

        $(document).ready(function() {

            $('#submit_application').click(function() {
                if($('#agree-id').is(':checked')) {
                    $.ajax({
                        url: '<?php echo base_url('index/submitApplication') ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: $('#form_application').serialize(),
                        success:function(data) {
                            if(data.status == 200) {
                                alert('申请成功，请等待审核...');
                                location.reload();
                            }else {
                                alert(data.msg);
                            }
                        }
                    })
                }else {
                    alert('请先阅读申请合约')
                }
                
            });
        });

    </script>
</body>
</html>