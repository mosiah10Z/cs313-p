<?php

include_once 'header.php';
if ($_SESSION['roleid'] > 1) {
    header("Location: index.php");
}
?>
    <div id="bannerAd">
        <div>


        </div>

    </div>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Advanced</h2>
            <p>This contains tutorials for advanced players, but you need to sign up so that you can view these!! <br><br><br><br></p>

            <div align="center">
                <iframe width="420" height="345" src="https://www.youtube.com/embed/MGuc9H7WFBs">
        </iframe>
            </div>
            <div align="center">
                <iframe width="420" height="345" src="https://www.youtube.com/embed/RcTAX1-p0Z0">
        </iframe>
            </div>
            <div align="center">
                <iframe width="420" height="345" src="https://www.youtube.com/embed/Ig5asXXlV7g">
        </iframe>
            </div>

        </div>
    </section>


    <?php

include_once 'footer.php';
?>
