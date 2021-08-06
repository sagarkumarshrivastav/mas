<?php
session_start();
if(!isset($_SESSION['username'])){
    echo'<script type="text/javascript" >
    alert("You are Loged Out");
    </script>';
?>
<script>
location.replace("index.php");
</script>
<?php

}
?>

<!DOCTYPE html>

<head>
    <title>MAS Home page</title>
    <link type="text/css" rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .nav1 {
        height: 14vh;
        margin-left: rem;
        padding-left: 2rem;

    }

    #logo {

        width: 150px;
        height: 50px;
        float: right;
        border: 2px solid greenyellow;
        background-size: 150px 150px;
        background-repeat: no-repeat;
        /* padding-top: 20px; */
        margin-left: 2rem;
    }

    .button#btn {
        background-color: #5DADE2;
    }

    .button {
        padding: 15px 25px;
        font-size: 15px;
        text-align: center;
        margin-top: 0px;
        margin-bottom: 0px;

        cursor: pointer;
        outline: none;
        color: #fff;
        background-color: #A02910;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    #icon {
        padding: 10px 21px;
        font-size: 15px;
        text-align: center;
        margin-top: 0px;
        margin-left: 7px;
        margin-bottom: 20px;
        cursor: pointer;
        outline: none;
        color: #000;
        background-color: #fff;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {
        background-color: #5DADE2;
    }

    .button:active {
        background-color: #A02910;
        box-shadow: 05px #666;
        transform: translateY(4px);
    }

    < !--.dropbtn {
        background-color: #4CAF50;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
    }

    .dropdown {
        position: relative;

        display: inline-block;

    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 125px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #3e8e41;
    }

    .sticky {
        position: fixed;
        background-color: lightcoral;
        top: 0;
        padding: 0%;
        width: 100%;
        height: 14vh;
    }

    .sticky+.content {
        padding-top: 30px;
    }
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <section class="background">



        <header>


            <div id="a">
                <h1> MEDICAL ASSISTANCE SYSTEM </h1>
            </div>
        </header>

        <section>
            <div id="navbar">

                <!-- <div id="logo" style="float:right; background-image: url(img/med1.jpg);"></div> -->
                <div class="nav1">
                    <div class="dropdown">
                        <a href="START (MAS).php">
                            <button class="button" id="btn">
                                <p style=" 
                text-align: center;font-size:10px;margin-bottom: 1px">
                                </p>Home
                            </button></a>


                        </a>
                    </div>



                    <div class="dropdown">
                        <a href="medicine directory.html">
                            <button class="button">
                                <p style="text-align: center;font-size: 10px;margin-bottom:
             1px"></p>Medicine Directory
                            </button></a>
                    </div>


                    <div class="dropdown">
                        <a href="#"><button class="button">
                                <p style="text-align: center;font-size:
                 10px;margin-bottom: 1px"></p>Disease & Symptoms
                            </button></a>
                        <div class="dropdown-content">
                            <a href="disease.html">Viral Disease </a>
                            <a href="bacterial.html">Becterial Disease </a>
                            <a href="corona.html">Corona Virus </a>
                        </div>

                    </div>
                    <div class="dropdown">
                        <a href="#"><button class="button">
                                <p style="text-align: center;font-size: 10px;margin-bottom: 1px"></p> View Doctors
                            </button></a>
                        <div class="dropdown-content">
                            <a href="https://www.fortishealthcare.com/india/clinical-speciality/neurology-288/doctors">Neurology
                                Doctors in India </a>
                            <a
                                href="https://www.fortishealthcare.com/india/clinical-speciality/oral-maxillofacial-surgery-234/doctors">Oral
                                / Maxillofacial Surgery Doctors in India </a>
                            <a
                                href="https://www.fortishealthcare.com/india/clinical-speciality/endocrinology-218/doctors">Diabetes
                                / Endocrinology Doctors in India</a>
                            <a
                                href="https://www.fortishealthcare.com/india/clinical-speciality/general-surgery-543/doctors">General
                                Surgery Doctors in India</a>
                            <a href="https://www.fortishealthcare.com/india/clinical-speciality/radiology-207/doctors">Radiology
                                Doctors in India</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a href="Appointment.html"><button class="button">
                                <p style="text-align: center;font-size: 10px;margin-bottom: 1px"></p>Appointment
                            </button></a>

                    </div>
                    <div class="dropdown">
                        <a href="logout.php"><button class="button">
                                <p style="text-align: center;font-size: 10px;margin-bottom: 1px"></p>Log Out
                            </button></a>

                    </div>
                    <div class="dropdown">
                        <a href="#">
                            <i class='fas fa-user-tie' id="icon" style='font-size:30px'>
                                <p style="text-align: center;font-size: 15px;margin-bottom: 1px">
                                    <?php  echo $_SESSION['username'];   ?> </p>
                            </i> </a>

                    </div>

                </div>

            </div>
            <img class="mySlides" src="img/med1.jpg">
            <img class="mySlides" src="img/med3.jpg">
            <img class="mySlides" src="img/med4.jpg">
            <img class="mySlides" src="img/med6.jpg">


        </section>



        <script>
        window.onscroll = function() {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
        </script>





        <!--automatic slider-->

        <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 3000);
        }
        </script>
    </section>

    <header class="benifet">
        <h1>Benefits</h1>
        <div class="unlimited">
            <div class="consult">
                <span> <img
                        src="data:image/png;base64,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
                 VqUl/4doNCfGUJh2uGLx94N/4bPNWzDljgm4+qorPI2F93NmaWYWZ2uaPn0++qYpsOifrQ5Vy71MSzm+yqWlvL2SyYLTH3Dh47fmhcUnszhlCzEdZs/3h9DYqEWzzoBTF8pQZ+XZDJbLkBgbBZlEBLaN3XjTlW3SZQjITKUy+VOiVp8YBmIy32B1Qjt3/YDsXfvwwLxZSE7iF4PMBx2xVIzwCFtLwP1zF6JXrwQbYL4rK4LGKtCcr3Jp4cFeyVQFhyGTh+GytqoGzU22Fm523v56QM2dNYwYQDqDHhKRmAOEEdPFhmSo2n4WU0xUqRRbSF7eyf5Gk/GIr4Fh/TETjXUg4NKXX0debgHWr29NeHS8vgbbL7Ymk+OrXFrGY69k8vFYunKMsTaZlHrwj3xOQrOnkNBAZGQoERjoeZt0Nd8CghvS0hR7SW7uqd4manCZ2W7fT79iy7admD3zLvRT8fNU8lkxrIxUJkVot1Ylz9lWpjeZ8M7p3Ba3GV/l0sKDtZLJfKYPe7hryepZ7lu6GwdbPdXV9WAxASxOLiwsqO2rxLojiitVKsVfhLs11qAzXy50Qp1x+Ft3Ex4VAbFYjIbGRsyb+5jDGcPKbi45jbOXQpr4KpeWPqyVzF7yINze3b2Hg13lYyJyV5FYRJNSUlJOEkqpQJNb6PJOoEVcjusegycWLuhwfiUyKcK6hWPfj/ux+oNPMX36HcjMvMmmH+vIGb7KpaUBayWTj5jsKvCiwwfuqkEqi1CpelRyERFqdX6du4uva9ZuwjHN8Q4XACy8SQLkWL78HZw9ex5vvLEUUXbeTnaTmd1oZuSNcmlp36Jk3tdTgVCR6wvXFvOLz0Bw0hEXIUOIiQPmmCafZXVwKXQXFZXg9bdWQS6X4YG5MxEf7z65gbcD+2zzVvx+8BBGZ96IGdPvdFqd6TN1tTVuw2Jd9cuUTF1iIqbHu4/Schfc5+2Y2lae1qmUKVwslXnFaArYVTO33wqz6DMMnOuHDcF1w4YgQG6WPg7m5CIqPAy9E9wDZl8uR52LrOyUe81KAAAFRElEQVS9KC4pRUKPeCx7xXXQ3G9V5Thx/JjbsFhXk8GUzMirM3BVmOsYBXu9pW0T275alOJcukrB3Tm8tGIK9hPAMSzSrh82kZs+/xbNzeaISqbXnK6swvkys8t1+oRbMGa482Yscb6sXGJUBOSgqKwyB3YMHjQQM6ZOBoukcXVNo9agwy97styGxbqaFqZkKifdiRA3X9eoLKuAwSorR/umuM21c1RKBZcw9dIZU8CujWfyaY4JAwf/OIzf/zyMkuILuGgwtbiALVkwnLXzzIqVOFtstsaKCZAcEY6kpEQMH3ZNy9YYFBqCADfZMw7/kI2bvzLfe/SGDmWORs+xE11WsbaJedNux5elP6mUKde3AqMpYLay1lRCXvS4ct1m/PyX+dLtwtl346p+znUdFhjHAuTcrSy2WtiqYQF0zuiiOgfK91Z6wZ256Lk5cyC/grt24kDMcszixawvJHndQQdVoBTb0lUKLjmBRSp7H4TMa2v7ZZVVCJDJEOjiaoWlXVaOUZSVUmnfJ0sGFHopYtP+maGuFrHPeheNwsJMy5e9BhLkPNsKu0/Z1Ngl3yB1Nt3rVErFPa3A5Ba8DIp/tBWYjq7H0ptILwkW9m2HLV8G0VnPQeeWevqkJNQsfMIpi3qtDlUVLnXrjh6Wx/Yo8G66UvFQCzDHNAULCWDOkegHRASEi9x0tqXJftyHoC/4f7yibvoMaIcMdbqFsfQjrm6Ldck0ULyiUim4BXLpcmzBDAp82iXMuOhULBEjLKKbg5RGGhvR7R9Pg1xKOOeOZyoWo2L568zk61CM3dXXXfKp+M24CZ5VpSm4j25fAiZ/JAXxnGfKxyNwFe4UvO4TSH/71SM3zdcOQ/3djpdWG+sbUF/reNvZY4OdXcD+1vKl/DH8N+7OZtCqfXanhq0eaxIXFCD0Lc87b/VTz8DQ09ZoyXQVprP4IxEIRiqVSSy5UmuGP7WmgIU98s+N66ORsRyaEVER3CevrCn8hUUQVrieYENsd1QvMiezsxALrmDnCrMg+yMJBdL4vn17ctH0LSlLOvKuf0cPWhYgR0iYbXSOfFc2Are4Vjbrb78TzSNsYxTY1fCmRr/5OKz9S5OXrkppUQJbgFHnFdwOE8wZn/2Q7CNrSF2dWQhwkuaKikSofGU5qFWG16b6BtT547lyaa4J6NNKZcpyy9TbZl/S5J8CSMc59jsYYKZ4MgXUQsFr10D6h/mGmzU1ZwxF/bQZLT+xy0bs0pEfU41IaEpOTU1tCVSzS4vV/mQMnT14liLY8g0zYdF5hL9izoBkTVWLnocx1mzpZgl5qis85w3obL7dtk/pApUqxebLTk4y/OWvAiFzu5RRN52zjzKEMHAuxT+H/udtiPNas/zpFQrUPPqYGRSdDrUVVTb5lf1vXHSHSpky1p4vB2BYiiyNpnA7X2tzVwyUGTtZrAALgmCgMHAsVDt3PnT9B3BBEiwujElifkuU/h4QIB6emJjocBHIabJStVotAZEwS0CbLM6+mAgWzRkW2c0cofKvpRAVF8EYEYnKxS/BaDBw25dfmVvsJoWCbjd2C5kyIDbW6S0ot3mXNZqCB0wULxACx0stvph9D32wQPfQ8FBu1USsXoWaO+9E4+BruCQP7NO+/kgstS8B+ZdKlbzCHX+8MpWr1fnMJTAdhLR87c5fBs0UzyAhQeyHq1A0dTqapXLusq3/Ef0NVLAhJET6YY8ePTz6GXgBYxkky++v05GrTITGg5piCDV/jc8fiBafvYLE9WxNcNPVTAlgIhRllKJYJDL94SkzuT27/w9YT+UDHuYEFgAAAABJRU5ErkJggg=="
                        alt="benefits" class="img">

                    <h3>Unlimited Free<br>

                        Doctor Consultations
                    </h3>
                </span>
            </div>

            <div class="consult-2">
                <span> <img
                        src="data:image/png;base64,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"
                        class="img">;

                    <h3> 20+ Specialities</h3>
                </span>
            </div>
        </div>
        </div>

        <div class="unlimited">

            <div class="consult">
                <span> <img
                        src="data:image/png;base64,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"
                        alt="benefits" class="img">

                    <h3> Medicines:
                        <br>
                        Upto 10% off
                    </h3>
                </span>
            </div>

            <div class="consult-2">
                <span> <img
                        src="data:image/png;base64,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"
                        class="img">;

                    <h3> Diagnostic Tests:
                        <br>
                        Up to 20% off
                    </h3>
                </span>
            </div>

        </div>
        </div>
    </header>




    <section class="Provide">
        <h1> Provide</h1>

        <div class="clinic">
            <div class="clinic-detail">
                <div class="img">
                    <img src="https://www.meddo.in/static/media/Group%2034382@2x.dcd21e3e.png" alt="clinic">
                </div>
                <div class="de">
                    <h2>Consult a Doctor</h2>
                    <i class="fa fa-check" style="font-size:24px">Verified doctor's with 10+ years of experience
                    </i><br>
                    <i class="fa fa-check" style="font-size:24px">Unparalleled Service & quality of care
                    </i>
                </div>
            </div>

        </div>
        <div class="clinic2">
            <div class="clinic-detail2">
                <div class="img">
                    <img src="https://www.meddo.in/static/media/Group%2034402@2x.6ad1eaf3.png" alt="clinic">
                </div>
                <div class="de">
                    <h2>Lab Tests & Health Check-ups</h2>
                    <i class="fa fa-check" style="font-size:24px">All Tests Available at Clinic
                    </i><br>
                    <i class="fa fa-check" style="font-size:24px">Compare Costs and Save Time
                    </i> <br>
                    <i class="fa fa-check" style="font-size:24px">Seamless & timely Reporting
                    </i>
                </div>
            </div>

        </div>

    </section>












    <!--footer-->
    <footer>


        <div class="footer">

            <a class="fa fa-facebook" href="https://www.facebook.com" target="_blank" style="color: #3B5998;"></a>
            <a class="fa fa-instagram" href="https://www.instagram.com" target="_blank" style="color:#7232bd "></a>
            <a class="fa fa-twitter" href="https://www.twitter.com" target="_blank" style="color: #00ACEE;"></a>
            <a class="fa fa-linkedin" href="https://www.linkedin.com" target="_blank" style="color: #0E76A8;"></a>
            <a class="fa fa-rss" href="https://youtube.com" target="_blank" style="color: #C4302B;"></a>

        </div>
        <br>
        <center>
            <div class="copyright">&copy; 2021 Medical Assistance System. All Rights Reserved.
            </div>
        </center>
    </footer>


</body>

</html>