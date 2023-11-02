<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DarshVibes</title>
    <link rel="stylesheet" href="./styles/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="./images/DarshVibes.png" />
</head>

<body>
    <?php
    include_once("./nav.php");
    ?>
    <?php
    include_once("./sidebar.php");
    ?>


    <audio id="myAudio" src="./audio/a1.mp3" autoplay loop preload="auto"></audio>


    <div class="interface">
        <div class="playlist-outer">
            <div class="topic">`
                <span class="ptopic">Punjabi Hits</span>
                <div class="line"></div>
            </div>

            <div class="playlists">
                <div class="playlist">
                    <div class="pimg">
                        <img src="./images/moose.jpeg" alt="" />
                    </div>

                    <div class="pdet">
                        <i onclick="playAudio()" class="fa-solid fa-play fa-2xl"></i>
                        <i onclick="pauseAudio()" class="fa-solid fa-pause fa-2xl"></i>
                        <span class="name">Kho Gaye Hum Kaha</span>
                    </div>
                </div>

                <div class="playlist">
                    <div class="pimg">
                        <img src="./images/mankirt.jpeg" alt="" />
                    </div>

                    <div class="pdet">
                        <span class="name">Mankirt Aulakh</span>
                    </div>
                </div>

                <div class="playlist">
                    <div class="pimg">
                        <img src="./images/aujla.jpeg" alt="" />
                    </div>

                    <div class="pdet">
                        <span class="name">Karan Aujla</span>
                    </div>
                </div>
                <div class="playlist">
                    <div class="pimg">
                        <img src="./images/aujla.jpeg" alt="" />
                    </div>

                    <div class="pdet">
                        <span class="name">Karan Aujla</span>
                    </div>
                </div>

                <div class="playlist">
                    <div class="pimg">
                        <img src="./images/prabh.jpg" alt="" />
                    </div>

                    <div class="pdet">
                        <span class="name">Prabh Gill</span>
                    </div>
                </div>

                <div class="playlist">
                    <div class="pimg">
                        <img src="./images/sharry.jpg" alt="" />
                    </div>

                    <div class="pdet">
                        <span class="name">Sharry Maan</span>
                    </div>
                </div>
            </div>
            <div class="playlist-outer">
                <div class="topic">
                    <span class="ptopic">Bollywood Hits</span>
                    <div class="line"></div>
                </div>

                <div class="playlists">
                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/rawal.jpeg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Darshan Raval</span>
                        </div>
                    </div>


                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/rehman.jpeg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">A.R. Rehman</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/arman.jpg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Arman Malik</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/nautiyal.jpg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Jubin Nautiyal</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/kaur.jpeg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Asees Kaur</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/palak.jpg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Palak Muchhal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="playlist-outer">
                <div class="topic">
                    <span class="ptopic">Bollywood Hits</span>
                    <div class="line"></div>
                </div>

                <div class="playlists">
                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/rawal.jpeg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Darshan Raval</span>
                        </div>
                    </div>


                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/rehman.jpeg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">A.R. Rehman</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/arman.jpg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Arman Malik</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/nautiyal.jpg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Jubin Nautiyal</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/kaur.jpeg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Asees Kaur</span>
                        </div>
                    </div>

                    <div class="playlist">
                        <div class="pimg">
                            <img src="./images/palak.jpg" alt="" />
                        </div>

                        <div class="pdet">
                            <span class="name">Palak Muchhal</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    include_once("./footer.php");
    ?>

    <script src="./js/script.js">

    </script>
</body>

</html>