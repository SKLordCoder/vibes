<head>
    <link rel="stylesheet" href="./styles/nav.css">
</head>

<body>
    <div class="main">
        <nav>
            <div class="logo">
                <span><a href="#"><img src="./assets/images/DarshVibes3.png" alt="logo" /></a></span>
            </div>
            <span class="searchsong">
                <input type="text" />
                <span class="searchicon" onclick="tsbar()">
                    <i class="fa-solid fa-magnifying-glass fa-xl"></i>
                </span>
            </span>
            <div class="navright" onclick="prfset()">
                <span><i class="fa-regular fa-user fa-xl"></i></span>
            </div>
        </nav>
        <div class="profileoptions">
            <span><a href="#">Profile</a></span>
            <span><a href="#">Settings</a></span>
            <span><a href="#">About</a></span>
            <span><a href="#">Help</a></span>
        </div>
    </div>
    <script src="./js/nav.js"></script>
</body>