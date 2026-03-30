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
            //grab the preferred theme from local storage
            preferred = localStorage.getItem("theme")

            //check what the current stylesheet is and set it to the opposite on click, then store that as the preferred theme
            function toggleTheme() {
                if (theme.getAttribute("href") == "defaultstyle.css") {
                    theme.setAttribute("href", "darkstyle.css");
                    preferred = localStorage.setItem("theme", "darkstyle.css")
                } else {
                    theme.setAttribute("href", "defaultstyle.css");
                    preferred = localStorage.setItem("theme", "defaultstyle.css")
                }
            }

            function detectScheme() {
                //check if a preferred theme exists, and set it to the default stylesheet if not
                if (preferred) {
                    theme.setAttribute("href", preferred);
                } else if (!window.matchMedia) {
                    return false;
                } else if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                    theme.setAttribute("href", "darkstyle.css")
                }
            }
            
            
            detectScheme();
        </script>
</header>