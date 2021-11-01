$(document).ready(function(){
    $("#register").click(function(){
        var usr=$("username").val();
        var pwd=$("password").val();
        var rtpwd=$("rtpassword").val();
        
        var data="usr="+ usr + "&pwd=" + pwd + "&rtpwd=" +rtpwd;

        $.ajax({
            method:"post",
            url:"register.php?",
            data:data,
            success: function(data)
            {
                $("#register_output").html(data);
            }
        

        
        });
    });
});