<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_9ij1lw95ihnqm2t9.css">
    <?php echo css('admin_main.css') ?>
</head>
<body class="login" onload="createCode()">
    <div class="container">
        <div class="form">
            <div class="title">后台管理</div>
            <form action="<?php echo base_url('Common/login') ?>" class="operateForm" method="POST" id ="login" name="form1">
                <div class="entry">
                    <input type="hidden" name="id" id="id" value="">
                </div>
                <div class="entry clear">
                    <div class="fl">                    
                        <label>用户名:</label>
                    </div>
                    <div class="fl">                    
                        <input type="text" name="username" id="username" value="" placeholder="">
                    </div>
                </div>
                <div class="entry clear">
                    <div class="fl">                    
                        <label>密码:</label>
                    </div>
                    <div class="fl">                    
                        <input type="password" name="password" id="password" value="" placeholder="">
                    </div>                  
                </div>
                <div class="entry clear">
                    <div class="fl">                    
                        <label>验证码:</label>
                    </div>
                    <div class="fl">                    
                        <input type="text" name="inputCode" id="inputCode" value="" placeholder="" maxlength="6">
                    </div>  
                </div>
                <div class="entry clear">
                    <div class="fl">                    
                        <div class="code" id="checkCode" ></div>
                    </div>
                    <div class="fl">                    
                        <a href="#" class="reload-code">看不清换一张</a>  
                    </div>
                </div>
            </form>
            <a href="#" class="submit" >login</a>
        </div>
    </div>
    <?php echo js('jquery.min.js') ?>
    <script type="text/javascript">
        // 验证码
        var code;
        function createCode() {
            code = "";
            var codeLength = 6; //验证码的长度
            var checkCode = document.getElementById("checkCode");
            var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
            for (var i = 0; i < codeLength; i++) {
                var charNum = Math.floor(Math.random() * 52);
                code += codeChars[charNum];
            }
            if (checkCode) {
                checkCode.className = "code";
                checkCode.innerHTML = code;
            }
        }
        function validateCode() {
            var username = $('#username').val(),
                password = $('#password').val();
            if(username == ''){
                alert("请输入用户名！");
                return false;
            }
            if(password == ''){
                alert("请输入密码！");
                return false;
            }
            var inputCode = document.getElementById("inputCode").value;
            if (inputCode.length <= 0) {
                alert("请输入验证码！");
            }
            else if (inputCode.toUpperCase() != code.toUpperCase()) {
                alert("验证码输入有误！");
                createCode();
            }
            else {
                $("#login").submit();
            }        
        }  

        (function($){
            $(function(){

                 $('body.login').on('click', '.submit', function(){
                    validateCode();
                    return false;
                });
                $('body.login').on('click', '.code', function(){
                    createCode();
                    return false;
                });
                $('body.login').on('click', '.reload-code', function(){
                    createCode();
                    return false;
                });
            });
        })(jQuery);
    </script>
</body>
</html>