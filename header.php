<style>
    #navbar {
        display: flex;
        justify-content: center;
        width: 20%;
        position: relative;
        left: 74em;
    }

    .navbutton  {
        display: block;
        padding: 1.5em;
        background-color: #3c162f;
        text-decoration: none;
        color: white;
    }

    .navbutton:hover {
        background-color: #7c162e;
        text-decoration: underline;
        text-decoration-color: #167c64;
        text-underline-offset: 1em;
        text-decoration-thickness: 0.2em;
    }
</style>

<header>
    <nav>
        <div id="navbar">
            <a href="index.php"><img src="favicon-96x96.png" width="64px" height="64px" style="position:relative;right:71.8em;"></a> 

                <a id="home" class="navbutton manrope-body" href="index.php" style="border-right-style: solid; border-width:2px; border-color:rgba(255,255,255,0.8);">Home</a>

                <a id="playlists" class="navbutton manrope-body" href="playlists.php" style="border-right-style: solid; border-width:1px; border-color:rgba(255,255,255,0.8);">Playlists</a>

                <a id="account" class="navbutton manrope-body" href="account.php" style="border-left-style: solid; border-width:1px; border-color: rgba(255,255,255,0.8);">Account</a>
            
        </div>
    </nav>
    <hr style="height:0.1em;background-color:#7c162e;color:#7c162e;">
</header>