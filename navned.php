

<header class="navbar-custom ">

<h1 class="titol"> Nedador</h1>


<nav class="  navbar navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="../../index.php">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav  me-auto">
               

                    <li class="nav-item">
                        <a class="nav-link" href="php/vista/competicions.php">Competicions</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Les meves properes competicions</a>
                    </li>
                     -->
                    <li class="nav-item">
                        <a class="nav-link" href="php/vista/dades.php"> Les meves Dades</a>
                    </li>


            </ul>
            <div class="d-flex">
            
            <ul class="navbar-nav  me-auto">
            <li class="nav-item">


            <h2> Benvingut <?= $_SESSION["username"]?></h2>
                      
                        
                    </li>
            
            <li class="nav-item">
                        <a class="nav-link" href="php/includes/logout.php">Logout</a>

                    </li>
            
                </ul>
            </div>        
         
        </div>
    </div>



</nav>

</header>
