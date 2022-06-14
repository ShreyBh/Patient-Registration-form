<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .text{
    color: #8bd18d;
    padding:30px;
    font-size:50px;
    text-align: center;
    }
    .container{
    color:grey;
    text-align: center;
    line-height: 1em;
    }
    sub {
    vertical-align: sub;
    font-size: medium;
    }
    .hr{
        border: 1px solid #8bd18d;
        width: 90%;
        text-align: left;
        margin-left: 10;
    }
    .sno{
        float: right;
        margin-right: 5%;
        text-underline-offset: 5em;
        color: grey;
        font-size:21px;
    }
    .ptname {
        color:grey;
        display: inline;
        padding: 30px;
        margin-top:1000px;
        font-size:21px;
        
        }
    .add{
        padding: 30px;
        color: grey;
        font-size:21px;
    }
    .notes, .medicine{
        display: contents;
        text-align: center;
        height:80px;
        font-size:21px;
        color: grey;
        
    }
    .footer{  
    position: relative;  
    left: 10px;  
    bottom: 1px;  
    right: 10px; 
    width: 95%;    
    justify-content:center;
    text-align: center;  
    }    
    .imgrx{
        width: 50px;
        height:60px;
        padding: 30px; 
    }
    .pfoot{
        color:grey;
        font-size: 25px;
    }
    .link{
        text-decoration:none;
        color:grey;
    }
    </style>
</head>
<body>
    <h1 class="text">NAME OF THE HOSPITAL</h1>
    <div class="container">
    <h1>Dr. John Killer<sub>M.B.B.S, M.S.(Ortho)</sub></h1>
    <p>751 Victoria 123 street, South Statue 204</center></p>
    <p>Hometown US, 1234</p>
    <p>PH: (207) 808 2014 2014</p>
    <p>FAX:(207) 808 2015 2202</p>
    </div>
    <hr class="hr">
    <p class="sno">S. No. : _______________________</p>
    <br><br><br><br>
    <div>
    <div class="ptname">
       Patient Name: <?php echo $_POST["patname"]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       Age: <?php echo $_POST["age"]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
       Gender: <?php echo $_POST["gender"]; ?>
    </div>
    <br>
    <div class="add">
    Address: <?php echo $_POST["address"]; ?>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Date: <?php echo date('d / m / Y'); ?>
    </div>  
    </div>
    <img src="RX.png" alt="Notes" class="imgrx">
    <br>
    <br>
    <br>
    <div>
    <div class="notes">
        <p>
        <b>Doctor's notes:<b>  <?php echo $notes = $_POST["notes"];?>
        </p>    
    </div>
    <div class="medicine">
    <b>Details of Medicine:<b>   <?php echo $medicine = $_POST["medicine"];?>
         
    </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <footer class="footer">
    <p class="pfoot">Doctor's Signature:________________</p>
    <hr>
    <p><a href="www.hospitalmail@mail.com" class="link">www.hospitalmail@mail.com</a></p>
    </footer>
</body>
</html>