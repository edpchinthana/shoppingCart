<?php
    if(isset($_SESSION['is_logged_in'])){
        $role = $_SESSION['role'];
        switch($role){
            case 'admin':
                echo "<nav>
                <ul>
                    <a><li><div>
                        <img class='navbar-logo' src='res/logo.png' alt=''>
                    </div></li></a>
                    <a href='index.php'><li class='navbar-logo-text'>EzShopping</li></a>
                    <a href='index.php'><li>Home</li></a>
                    <a href='explore.php'><li>Explore</li></a>
                    <a href='php/authService/_logout.php'><li class='navbar-active'>Logout</li></a>
                </ul>
            </nav>";
            break;
            case 'buyer':
                echo "<nav>
                <ul>
                    <a><li><div>
                        <img class='navbar-logo' src='res/logo.png' alt=''>
                    </div></li></a>
                    <a href='index.php'><li class='navbar-logo-text'>EzShopping</li></a>
                    <a href='index.php'><li>Home</li></a>
                    <a href='explore.php'><li>Explore</li></a>
                    <a href='php/authService/_logout.php'><li class='navbar-active'>Logout</li></a>
                </ul>
            </nav>";
            break;
            case 'seller':
                echo "<nav>
                <ul>
                    <a><li><div>
                        <img class='navbar-logo' src='res/logo.png' alt=''>
                    </div></li></a>
                    <a href='index.php'><li class='navbar-logo-text'>EzShopping</li></a>
                    <a href='index.php'><li>Home</li></a>
                    <a href='explore.php'><li>Explore</li></a>
                    <a href='php/authService/_logout.php'><li class='navbar-active'>Logout</li></a>
                </ul>
            </nav>";
            break;
        }
    }else{
        echo "<nav>
        <ul>
            <a><li><div>
                <img class='navbar-logo' src='res/logo.png' alt=''>
            </div></li></a>
            <a href='index.php'><li class='navbar-logo-text'>EzShopping</li></a>
            <a href='index.php'><li>Home</li></a>
            <a href='explore.php'><li>Explore</li></a>
            <a href='signup.php'><li>Join</li></a>
            <a href='login.php'><li class='navbar-active'>Login</li></a>
        </ul>
    </nav>";
    }
    

?>