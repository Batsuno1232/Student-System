$(document).ready(function(){
    alert("Ready");
    $(document).on("click","#btnLogin",function(e){
        //alert("clicked");
        // alert($("#txtRollNo").val());
        // alert($("#txtPass").val());
        //alert($("myInnerDiv").html());
        // $("#txtRollNo").val("Hello World");
        // $("#txtPass").val("132sssx");
        // var x='<input type="text"><button >OK</button>';
        // $("#dynamicDiv").html(x);
        var un=$("#txtRollNo").val();
        var pwd=$("#txtPass").val();

        var trimUN=un.trim();
        var lun=trimUN.length;
        var trimpwd=pwd.trim();
        var lpw=trimpwd.length;
        if(lun!=0 && lpw!=0){
            $("#lblErrorMsg").text("");
            // make a ajax call
            $.ajax({
                url:"/project1/AjaxHandler/sloginAjax.php",
                type:"POST",
                dataType:"json",
                data:{uName:trimUN,uPWD:trimpwd,action:"loginHandler"},
                beforeSend:function(){
                    alert("about to send an ajax call");
                },
                success: function(result){
                    // alert(result.status+"->"+result.color+","+result.gender);
                    // alert(result.yourusername)
                    // alert("successful");
                    if (result.status == "OK"){
                        $("#lblErrorMsg").text("VALID User and PW");
                        document.location.replace("/project1/UserInterface/studentHome.php");
                    }else{
                        $("#lblErrorMsg").text("INVALID User and PW");
                    }
                },
                error:function(){
                    alert("error");
                }
            });
        }else{
            $("#lblErrorMsg").text("INVALID INPUT");
        }
    });
});