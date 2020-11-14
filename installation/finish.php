<?php
$inst = "installation";
include '../header.php';
include '../valai.php';
?>
<body class="bg-dark" style="background-color: #FFFFFF;">
<div class="container-fluid" style="margin-top: 10%;">
     <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 bg-white shadow border p-4 text-center bor-twen">
        <img src="../images/valaiweb.svg" alt="valai" style="width: 128px;" class="mx-auto d-block">
        <br>
        <h4>Welcome to Valai - Installation</h4>
        <br>
        <div class="text-left" style="margin-left: 22%; margin-bottom: 15%;">
            <div id="inc">
                <div class="spinner-border text-primary"></div>&nbsp;&nbsp;Testing connection please wait...
            </div>            
        </div>
        <a href="../classes/dbOper.php" id="prev" name="prev" class="btn btn-dark bor-ten float-left">&lt; Previous</a>
        <a href="../index.php" id="final" name="final" class="btn btn-dark bor-ten float-right">Finish &gt;</a>
        </div>
        <div class="col-sm-4"></div>
     </div>
     <script>
    $('#inc1').hide()
    $('#inc2').hide()
    $('#final').hide();
    $('#prev').hide();
// alert('hello');
    setInterval(function () {
        
        // alert('hello');
			$.post("../test.php",
            {
            act:"sayhello",
            ip:"192.168.1.5",
            nm:"stat",
            stat:"failure",
            inbox:"influx"
            },
          function(data, status){
            // alert(data);
            if(data == 'hello'){
                $('#inc').html('<img src="../images/tick.png" style="width: 32px;">&nbsp;&nbsp;Test succeeded Valai is ready to use');
                $('#inc1').show()
                $('#inc2').show()
                $('#final').show();
                $('#prev').hide();
            }else{
                $('#inc').html('<img src="../images/error.svg" style="width: 32px;">&nbsp;&nbsp;Test Failed Check Valai API whether it is configured properly');
                $('#prev').show();
            }
          });
           
    }, 2000);
    </script>