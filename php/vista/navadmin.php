

<header class="navbar-custom ">

<h1 class="titol"> Admin</h1>


<nav class="  navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  me-auto">

                <li class="nav-item">
                     <a class="nav-link" href="altacompeti.php">Alta competicions</a>
                </li>        
               


                    <li class="nav-item">
                        <a class="nav-link" href="competicions.php">Competicions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="assignarol.php"> gestio de rols
                        </a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="dades.php"> Les meves Dades</a>
                    </li>


            </ul>
            <div class="d-flex">
            <?php
                if (isset($_SESSION["username"])){

                    ?>

            
            <ul class="navbar-nav  me-auto">
            <li class="nav-item">


            <h2> Benvingut <?= $_SESSION["username"]?></h2>
                      
                        
                    </li>
            
            <li class="nav-item">
                        <a class="nav-link" href="../includes/logout.php">Logout</a>

                    </li>
            
                </ul>
            </div>        
            
            <?php
                } else {
                    ?>
         


            <div class="d-flex">
                <ul class="navbar-nav  me-auto">
                    <li class="nav-item">
                        <a href="login.php">Login</a>
                    </li>  
                 </div>


           <?php
                }
            ?>
         
        </div>
    </div>



</nav>

</header>
