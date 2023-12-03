<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style>
        *{
            margin:0;
            padding: 0;
            box-sizing:border-box;
        }
        .logo 
        {
            width:7%;
            height:7%;
        }
        .card-img-top{
            width:100%;
            height:50px;
            object-fit:content;
        }

        .admin_image{      
            width:100px;
            object-fit:contain;
        }

        .footer{

            position:absolute;
            bottom:0;
        }

        </style>

    <!--Bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>


</head>
<body>
   <div class="container-fluid p-0">
     <nav class="navbar navbar-expand-ig navbar-light bg-info">
     <div class="container-fluid">
     <img src="../images/logo.png" alt="" class="logo">
     <nav class="navbar navbar-expand-ig">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link">Welcome Guest</a>
            </li>
        </ul>
    </nav>     
     </div>
     </nav>
     <div class="bg-light">
        <h3 class="text-center p-2"> Manage Details</h3>
    </div>

    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
            <div class="p-3">
                <a href="#"><img src="../images/admin_image.png" alt="" class="admin_image"></a>
                <p class="text-light text-center"> Admin Name</p>
            </div>
            <div class="button text-center">
                <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                

            </div>
        </div>
    </div>

    <div class="container my-3">
        <?php 
        if(isset($_GET['insert_category'])){
            include('insert_categories.php');
        }
        
        ?>

    </div>

    </div>

    <div class="bg-info p-3 text-center footer">
        <p> All Rights Reserved @ SS Agriqulture by Tech Team-2023</p>
        </div>
    </div>

<!--Bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
crossorigin="anonymous"></script>
</body>
</html>