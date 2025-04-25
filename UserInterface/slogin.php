<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Login</title>
    <link href="/Project1/CSS/Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Project1/CSS/mycss.css" rel="stylesheet">

</head>

<body>
    <div class="mainDiv">
        <div class="innerDiv" id="myInnerDiv">
            <div class="container">
                <div class="row" style="margin:2%;">
                    <div class="col-lg-3 ">

                    </div>
                    <div class="col-lg-6 ">
                        <label class="text-info" style="font-size: 24px;" id="lblRollNo">ROLL NO</label>
                    </div>
                    <div class="col-lg-3 ">

                    </div>
                </div>
                <div class="row" style="margin:2%;">
                    <div class="col-lg-3 ">

                    </div>
                    <div class="col-lg-6 ">
                        <input class="loginTextBox" id="txtRollNo" type="text">
                    </div>
                    <div class="col-lg-3 ">

                    </div>
                </div>
                <div class="row" style="margin:2%;">
                    <div class="col-lg-3 ">

                    </div>
                    <div class="col-lg-6 ">
                        <label class="text-info">Password</label>
                    </div>
                    <div class="col-lg-3 ">

                    </div>
                </div>

                <div class="row" style="margin:2%;">
                    <div class="col-lg-3 ">

                    </div>
                    <div class="col-lg-6 ">
                        <input class="loginTextBox" id="txtPass" type="password">
                    </div>
                    <div class="col-lg-3 ">

                    </div>
                </div>
                <div class="row" style="margin:2%;">
                    <div class="col-lg-3 ">

                    </div>
                    <div class="col-lg-6 ">
                        <div style="width: 100%; justify-content: space-between;align-items:center; display: flex; ">
                            <label id="lblErrorMsg" class="text-info"></label>
                        <button class="btn btn-success" id="btnLogin">Login</button>
                        </div>

                    </div>
                    <div class="col-lg-3 ">

                    </div>

                </div>




            </div>
            <div id="dynamicDiv" style="background: red;">
            <!-- <input type="text">    
            <button >OK</button> -->
            </div>
        </div>

    </div>


    </div>
    <script src="/Project1/CSS/Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Project1/Jquery/jquery.js"></script>
    <script src="/Project1/Userinterface/slogin.js"></script>
</body>

</html>