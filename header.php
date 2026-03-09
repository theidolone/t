<style>
    .navbutton {
        width: 200px;
        display: flex;
        justify-content: center;
    }
    #navbar {
        display: flex;
        height: 100%;
        position: sticky;
        background-color: #CCE2D3;
        justify-content: space-around;
    }

    a {
        float: left;
        text-decoration: none;
        color: black;
        padding: 12px;
    }

    .navbutton:hover {

        background-color: #7DCD85;
        color: #A91AA4;
    }

    #brand {
        display: flex;
        float: left;
        position: absolute;
        top: 0.35em;
        left: 0.6em; 
    }

</style>

<header>
    <a href="index.php"><img id="brand" src="rolsa_transparent.png" alt="Rolsa Technologies Brand Logo" loading="eager" width="80px" height="80px"></a>
    <nav class="manrope-body" style="display: flex; justify-content: center;">
        <ul style="display: flex; justify-content: space-around;">
            <div id="navbar">

                <div class="navbutton">
                <a id="home" class="navbutton" href="index.php" style="border-right-style: solid;border-width: 2px;border-color: black;">Home</a>
                </div>
                
                <div class="navbutton">
                <a id="calc" class="navbutton" href="calculator.php" style="border-right-style: solid;border-width: 2px;border-color: black;">Carbon Calculator</a>
                </div>
                
                <div class="navbutton">
                <a id="consultations" class="navbutton" href="consultations.php" style="border-right-style: solid;border-width: 1px;border-color: black;">Consultations</a>
                </div>
                
                <div class="navbutton">
                <a id="account" class="navbutton" href="account.php" style="border-left-style: solid;border-width: 1px;border-color: black;">My Account</a>
                </div>

            </div>
        </ul>
    </nav>
<hr>
</header>