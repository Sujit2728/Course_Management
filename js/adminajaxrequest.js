//Ajax Call for Admin Request
function checkAdminLogin()
{
    var adminLogEmail= $("#adminLogemail").val();
    var adminLogPass= $("#adminLogpass").val();

    $.ajax({
        url:"Admin/admin.php",
        method:"POST",
        data:{
            checkLogemail:"checkLogemail",
            adminLogEmail: adminLogEmail,
            adminLogPass: adminLogPass,
        },
        success:function(data){
            if(data == 0){
                $("#statusAdminLogMsg").html('<small class="alert alert-danger">Invalid Email or Password !!!!!!!!</small>');
            }else if(data == 1){
                $("#statusAdminLogMsg").html('<small class="alert alert-success">Success Loading</small>');
                setTimeout(() => {
                    window.location.href ="Admin/admindashboard.php";
                }, 5000);
            }
        },
    });
}