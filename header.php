<header>
    <nav>
        <div id="navbar">
            <a href="index.php"><img src="./images/glhLogo.png" width="64px" height="64px" style="position:relative;right:85em;"></a> 

                <a id="basket" class="navbutton-default manrope-body" href="basket.php" style="border-right-style: solid; border-width:2px; border-color:rgba(255,255,255,0.8);">Basket</a>
                
                <a id="account" class="navbutton-default manrope-body" href="login.php" style="border-right-style: solid; border-width:1px; border-color:rgba(255,255,255,0.8);">Account</a>

                <details id="settings" class="dropbtn navbutton-default manrope-body" style="border-right-style: solid; border-left-style: solid; border-width:1px; border-color: rgba(255,255,255,0.8); cursor: pointer;"><summary>Settings</summary><button style="cursor: pointer;" onclick="toggleTheme()">Switch Theme</button></details>
                
                <a id="home" class="navbutton-default manrope-body" href="index.php" style="border-left-style: solid; border-width:1px; border-color: rgba(255,255,255,0.8);">Home</a>
            
        </div>
    </nav>
        <script>
            preferred = localStorage.getItem("theme")
            let scheme = document.getElementById("theme")

            if (!preferred) {
                theme.setAttribute("href", "defaultstyle.css");
            } else {
                theme.setAttribute("href", preferred)
            }


            function toggleTheme() {
                if (theme.getAttribute("href") == "defaultstyle.css") {
                    theme.setAttribute("href", "darkstyle.css");
                    preferred = localStorage.setItem("theme", "darkstyle.css")
                } else {
                    theme.setAttribute("href", "defaultstyle.css");
                    preferred = localStorage.setItem("theme", "defaultstyle.css")
                }
            }
        </script>
</header>