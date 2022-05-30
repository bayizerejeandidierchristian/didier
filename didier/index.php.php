<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="text-white p-1 text-center" style="background-color:blue;">
        <h5>IREMBO/practical CAT</h5>
    </header>
    
    <form action="insert.php" method="post">
<!-- form container -->
<div class="d-flex justify-content-center align-items-center" style="height:80vh;">
    <!-- <h1>Test</h1> -->
    <div class="container">
    <center><h6 class="header2">connect to IREMBO</h6></center>
                     <div>
                  
                     <button class="facebook" ><h3 class="header1" name="submit">Cantinue with facebook<h3></button>
                     <i class="fa fa-facebook-official" style="font-size:27px" id="icon"></i> 
                    </div>
               
              </div>
        </div>
</body>
</html>

<style>
.container{
height:300px;
width:220px;
border:solid 1px  #D8DADC ;
background:#FCF9F8;
shadow:2px;
}
.facebook{
    position:absolute;
    top:320px;
    background:blue;
    color:white;
    height:30px;
    width:190px;
    border:none;

   
  

}
#icon{
    position:absolute;
    top:322px;
    background:white;
    color:#0B5DBB;
    border:#0B5DBB;
    border:none;
}
.header1{
   color:white;
   font-size:14px;
   margin-left:18px;
   top:5px;
   position:absolute;
}  
.header2{
   top:205px;
   position:absolute;
   margin-left:27px;
}

</style>