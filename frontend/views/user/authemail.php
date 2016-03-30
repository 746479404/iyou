<!DOCTYPE html>
<html><!-----start-main---->

<head>
    <title>Email</title>
    <meta charset="utf-8">
    <link href="css/styles.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
    <!--<link href='http://fonts.useso.com/css?family=Arimo:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/buttons/JFButtonStyle-1.css" />-->
</head>
<body>
<div class="login-form">
    <div>
        <div class="logo">
            <h1></h1>
        </div>
        <center><input type="text" placeholder="请输入要验证的邮箱" id="email" style="width:350px" value="<?= $email;?>"><center>
                <input type="hidden" placeholder="" id="token" value="<?= $token;?>">

                <div>
                    <!--<input type="submit" value="subscribe"-->
                    <center><a><button class="large red button style-1" id="button" style="width:350px">确认</button></a></center>
        </div>
    </div>
</div>
<script src="js/jquery-1.8.3.min.js"></script>
<script>
    $(function(){
        $("#button").click(function(){
            var token = $("#token").val();
            var email = $("#email").val();
            if(email==''){
                alert('请输入邮箱');
                return false;
            }
            $.ajax({
                type:'get',
                url: "/index.php?r=user/email",
                data: "email="+email+"&token="+token,
                success: function(msg){
                    if(msg==1){
                        alert("发送成功");
                        return true;
                    }else{
                        alert('发送失败，请重新发送');
                        window.history.go(0);
                    }
                }
            });
        });
    });

</script>
<!-----start-copyright---->
<!-----//end-copyright---->

</body>
</html>