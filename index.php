<!--header-->
<?php include('header.php') ?>
<!--body-->


<div class="w3-content w3-padding" style="max-width:1564px">

    <!-- Project Section -->
    <div class="w3-container w3-padding-32" id="projects">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Articles</h3>
    </div>

    <div class="w3-row-padding">

        <a href="artical 4.php">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Italian Food</div>
                    <img src="img/a food 2.jpg" alt="food" style="width:100%" class="grey">
                </div>
            </div>
        </a>
        <a href="artical 3.php">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Hiking</div>
                    <img src="img/hiking 1.jpg" alt="House" style="width:100%" class="grey">
                </div>
            </div>
        </a>
        <a href="artical 2.php">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Medieval Times</div>
                    <img src="img/middle age 1.jpg" alt="House" style="width:100%" class="grey">
                </div>
            </div>
        </a>
        <a href="artical 5.php">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Amazon Forest</div>
                    <img src="img/amazon forest.jpg" alt="House" style="width:100%" class="grey">
                </div>
            </div>
        </a>

    </div>

    <div class="w3-row-padding">
        <a href="artical 1.php">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-display-container">
                    <div class="w3-display-topleft w3-black w3-padding">Muscle Car</div>
                    <img src="img/a muscle car 1.jpg" alt="muscle car" style="width:100%" class="grey">
                </div>
            </div>
        </a>
    </div>

    <style>
        .grey:hover {
            -webkit-filter: grayscale(80%);
            filter: grayscale(80%);
        }
    </style>

    <!-- About Section -->
    <div class="w3-container w3-padding-32" id="about">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h3>
        <p>Welcome To My Personal Blog! Here, I Share My Thoughts And Experiences As A Software Engineering
            Student
            At NSBM Green University. My First Project, Jellybean, Is A Website Dedicated To Exploring The
            Wonders
            Of Nature. Thank You For Visiting!
        </p>
    </div>


    <div class="row">
        <div class="col-md-4">&nbsp;
        </div>
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top img-responsive " src="img/dp photo1.jpg" alt="London">
            </div>
        </div>
        <div class="col-md-4">&nbsp;
        </div>
    </div>
    <div class="w3-row-padding w3-grayscale">
        <div class="w3-container w3-padding-32" id="about">
            <h3>Kavinda Kiridana</h3>
            <p class="w3-opacity">Developer</p>
            <p>Introducing University Of NSBM Undergraduate Student Kavinda Kiridana. I'm A Specialist In UI/UX
                Design And Development With A Passion For Both Design And Development. Follow Them On Their
                Journey
                As They Advance Professionally.</p>
            <br>
            <ul style=" list-style: none;display: flex; ">
                <li style="margin-left: 7px; margin-right: 7px;"><a href="https://www.linkedin.com/in/kavinda-kiridana-8a330521a/"><i class="fa fa-linkedin" style="font-size:24px ;color:black;"></i></a>
                </li>
                <li style="margin-left: 7px; margin-right: 7px;"><a href="http://wa.me/+940771923861?text=Hi"><i class="fa fa-whatsapp" style="font-size:24px;color:black;"></i></a></li>
                <li style="margin-left: 7px; margin-right: 7px;"><a href="mailto:mkikiridana@students.nsbm.ac.lk"><i class="fa fa-envelope" style="font-size:22px;color:black;"></i></a></li>
            </ul>

        </div>
    </div>
</div>

<div class="w3-row-padding w3-grayscale">
    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
        <p>Lets get in touch and talk</p>
        <form action="data enter.php" target="_blank" method="post">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Topic" required name="Subject">
            <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
            <button name="submit" class="w3-button w3-black w3-section" type="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
            </button>
        </form>

        <!--admin button-->
        <div class="w3-col l3 m6 w3-margin-bottom"><a href="admin login.php" class="w3-bar-item w3-button" style="text-align: center;">Admins, please visit here.</a></div>
    </div>
</div>

<br>&nbsp;

<!-- End page content -->
</div>


<!--footer-->
<?php include('footer.php') ?>