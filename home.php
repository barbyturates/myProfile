<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Franze Barbosa - About</title>
    </head>

    <style type="text/css">
        body {
            padding: 0;
            margin: 0;
        }
        .limiter {
            width: 100%;
            margin: 0 auto;
        }


        /* header section */

        .header {
            width: 100%;  
            height: 535px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
           
            position: relative;
            background-color: white;
            padding: 0px;
            margin: 0px;
        }
        .header-cont {
            margin-top: 60px;
            width: 1100px;
           background: white;
            overflow: hidden;
        }
        .title {
            font-family: Roboto, sans-serif;
            float: left;
            margin-left: 10px;
            margin-right: 150px;
            padding-top: 20px;
        }
        .title span {
            font-size: large;
        }
        .menu {
            float: left;
            margin-left: 35px;
            font-family: Roboto, sans-serif;
        }
        a {
            color: black;
            text-decoration: none;
            
        }
        .career {
            transition: transform .5s;
            position: relative
        }
        .career:hover {
            text-decoration: underline 1.5px;

        }
        .contact {
            margin-top: 25px;
            float: right;
            margin-right: 10px;
        }
        .contact img {
            margin-left: 13px;
            padding: 0;
            transition: transform .3s;
        }
        .contact img:hover {
            transform: scale(1.09);
        }
        .mydesc {
            float: left;
            font-family: Roboto, sans-serif;
            margin-top: 175px;
            margin-left: 20px;
        }
        .first {
            font-size: 32px;
        }
        .second {
            
            font-size: 22px;
        }
        .third {
            font-size: 22px;
        }
        .mydesc img {
            margin-left: 10px;
            vertical-align:middle;
            transition: transform .3s;
        }
        .mydesc img:hover {
            transform: scale(1.04);
        }
        .fourth {
            font-size: 19px;
            background-color: #1f1f1f;
            padding: 10px;
            border-radius: 7px;
            color: white;
        }
        .pic {
            float: right;
            margin-top: 70px;
            margin-right: 60px;
        }


        /* about section */

        .about {
            width: 100%;  
            height: 1500px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
           
            position: relative;
            background-color: whitesmoke;
            padding: 0px;
            margin: 0px;
        }
        .about-cont {
            margin-top: 70px;
            width: 1100px;
           background: whitesmoke;
            overflow: hidden;
            font-family: Roboto, sans-serif;
        }
        .aboutme{
            font-size: 120px;
        }


         /* left about section */

        .leftabt {
            float: left;
            background-color: whitesmoke;
            height: 100%;
            width: 700px;
        }
        .firstpar{
            font-size: 25px;
            margin-left: 15px;
            background: white;
            margin-right: 30px;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        }
        .secondpar {
            font-size: 20px;
            margin-right: 10px;
        }
        .cskills, .wskills {
            font-weight: bold;
            font-size: 22px;
            background: #1f1f1f;
            color: white;
            padding: 10px;
            border-radius: 7px;

        }
        .setone {
            margin-top: 40px;
        }
        .settwo, .setthree {
            margin-top: 20px;
        }
        .setone img, .settwo img, .setthree img {
            vertical-align:middle;
            background: white;
            padding: 20px;
            border-radius: 7px;
            margin-right: 15px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            transition: transform .3s;
        }
        .setone img:hover, .settwo img:hover, .setthree img:hover{
            transform: scale(1.04);
        }
        .setfour {
            margin-top: 60px;
        }
        .setfive {
            margin-top: 40px;
        }
        .setfour b, .setfive b {
            background: white;
            padding: 20px;
            border-radius: 7px;
            margin-right: 15px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        } 


         /* right about section */

        .rightabt {
            float: right;
            background-color: whitesmoke;
            height: 100%;
            width: 385px;
        }
        .journey {
            margin-top: 20px;
            font-weight: bold;
            font-size: 22px;
            background: #1f1f1f;
            color: white;
            padding: 10px;
            border-radius: 7px;
        }

        .yrone {
            margin-top: 55px;
            font-size: 50px;
            font-weight: 500;
            margin-left: 20px;
            color: #ababab;
            margin-bottom: 10px;
        }
        .grad {
            background: white;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        }
        .rightabt hr {
            background-color: #d4d4d4;
            height: 2px;
            border: none;
            margin-top: 30px;
        }
        .yrtwo, .yrthree {
            margin-top: 40px;
            font-size: 50px;
            font-weight: 500;
            margin-left: 20px;
            color: #ababab;
            margin-bottom: 10px;
        }


        /* footer section */

        .footer {
            width: 100%;  
            height: 80px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
           
            position: relative;
            background-color: white;
        }
        .footer-cont {
            margin-top: 10px;
            width: 1100px;
           background: white;
            overflow: hidden;
        }
        .footertitle {
            font-family: Roboto, sans-serif;
            float: left;
            margin-left: 0px;
            margin-right: 150px;
            padding-top: 20px;
        }
        .footertitle span {
            font-size: large;
        }
        .footercontact {
            margin-top: 20px;
            float: right;
            margin-right: 10px;
        }
        .footercontact img {
            margin-left: 13px;
            padding: 0;
            transition: transform .3s;
        }
        .footercontact img:hover {
            transform: scale(1.09);
        }
    </style>

    <body>
        <div class="limiter">
            <div class="header">
                <div class="header-cont">
                    <div class="title">
                    <span><a href="home.php"><b>Franze Barbosa | </b>Aspiring Developer</a></span>
                    </div>
                    <div class="menu">
                        <h4 style="font-size:large; margin-top:22px"><a href="home.php">About</a><a href="career.php" class="career" style="margin-left:60px; font-weight:400">Career</a></h4>
                    </div>
                    <div class="contact">
                        <a href="https://www.linkedin.com/in/franze-dale-barbosa" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="20px" height="20px"></a>
                        <a href="https://github.com/barbyturates" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="20px" height="20px"></a>
                        <a href="https://www.credly.com/users/franze-dale-barbosa" target="_blank"><img src="https://theme.zdassets.com/theme_assets/2382499/cbf082693b966d5c5e6e30fa455853afb22f0079.png" width="20px" height="20px"></a>
                        <a href="mailto:fdbbarbosa@gmail.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" width="24px" height="20px"></a>
                    </div>
              
                    <div class="mydesc">
                        <p>
                            <span class="first"><b>SOFTWARE</b> Developer</span>
                            <br/>
                            <span class="second">BS in <b>Computer Science</b></span>
                        </p>
                        <br/>
                        <span class="third">An <b>aspiring developer</b> currently living in Orion, Bataan</span>
                        <p></p>
                        <br/>
                        
                        <span class="fourth">Reach me at <a href="tel:+639399282059"><img src="https://www.nicepng.com/png/full/177-1779357_got-a-question-call-1-877-858-white.png" width="22px" height="22px"></a>
                        <a href="mailto:fdbbarbosa@gmail.com"><img src="https://www.pngkit.com/png/full/222-2226274_white-email-icon-png-download-mail-symbol-png.png" width="22px" height="22px"></a></span> 
                    </div>
                    <div class="pic">
                    <img src="img/formal.jpg" width="325px" height="325px">
                    </div>
                </div>
            </div>

            <div class="about">
                <div class="about-cont">
                    <b class="aboutme">About me</b>
                    
                    <div class="leftabt">
                        <p class="firstpar">Hi there! I'm an <b>aspiring full-stack developer</b> skilled in developing software solutions using <b>Java</b>, <b>Python</b>, <b>PHP</b>, and <b>JavaScript</b>.</p>
                        <br/>
                        <p class="secondpar">I've developed a mobile application, a Windows application, web applications, websites and is knowledgeable in cybersecurity. I am also proficient in graphic design and video content creation as well as in using Microsoft Office applications.</p>
                        <p class="secondpar">Besides programming, I indulge myself into hiking, cycling, and watching documentaries and found-footage movies whenever I'm free to do so.</p>
                        <br/>
                        <br/>
                        <span class="cskills">Computer Skills</span>
                        <div class="setone">
                            <img src="https://lh3.googleusercontent.com/fG_l9HMpfkevNyVYyMJyrkqiulSR3S0sVC9_k2vVEL121ITEB9p90lpRA_wEPoywWwaFTY_bNDsVol5tQo9akpt_xfsznUL64Q" width="53px" height="53px">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Adobe_Photoshop_CC_icon.svg/640px-Adobe_Photoshop_CC_icon.svg.png" width="53px" height="53px">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Adobe_Premiere_Pro_CC_icon.svg/2101px-Adobe_Premiere_Pro_CC_icon.svg.png" width="53px" height="53px">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/3ds-max-full-logo-png-transparent.png" width="53px" height="53px">
                            <img src="https://thelogofinder.com/wp-content/uploads/edd/2021/10/html5-1.svg" width="53px" height="53px">
                            <img src="https://cdn.freebiesupply.com/logos/large/2x/css3-logo-png-transparent.png" width="53px" height="53px">
                        </div>
                        <div class="settwo">
                            <img src="https://www.freepnglogos.com/uploads/php-logo-png/php-logo-png-transparent-svg-vector-bie-supply-1.png" width="53px" height="53px">
                            <img src="https://www.freepnglogos.com/uploads/javascript-png/javascript-vector-logo-yellow-png-transparent-javascript-vector-12.png" width="53px" height="53px">
                            <img src="https://www.freepnglogos.com/uploads/logo-mysql-png/logo-mysql-mysql-logo-png-images-are-download-crazypng-21.png" width="53px" height="53px">
                            <img src="https://1.bp.blogspot.com/-olEGUVAbDOg/YS_VDSoSMFI/AAAAAAAAL5k/avUIQTjd2dkflGsbVp8wxIueT8HhMklIgCLcBGAsYHQ/s0/oracle-db.png" width="53px" height="53px">
                            <img src="https://www.monetbil.com/support/wp-content/uploads/2021/01/java-logo-vector.png" width="53px" height="53px">
                            <img src="https://seeklogo.com/images/C/c-sharp-c-logo-02F17714BA-seeklogo.com.png" width="53px" height="53px">
                        </div>
                        <div class="setthree">
                            <img src="https://i.pinimg.com/originals/8f/23/98/8f2398dcd19c6a1776f6b55c83073c67.png" width="53px" height="53px">
                            <img src="https://ionicacademy.com/wp-content/uploads/2017/06/ionic-logo-portrait.png" width="53px" height="53px">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/768px-Angular_full_color_logo.svg.png" width="53px" height="53px">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Android_logo_2019.png/800px-Android_logo_2019.png" width="53px" height="53px">
                            <img src="https://i.pinimg.com/originals/01/a9/66/01a966c142d0b1343d82e667be68ce33.png" width="53px" height="53px">
                            <img src="https://fasa-international.org/wp-content/uploads/2021/11/246-2464763_cybersecurity-cybersecurity-transparent.png" width="53px" height="53px">
                        </div>

                        <br/>
                        <br/>
                        <br/>
                        <span class="wskills">Work Skills</span>
                        <div class="setfour">
                            <b>Hardworking</b>
                            <b>Responsible</b>
                            <b>Eager to Learn</b>
                            <b>Cooperative</b>
                        </div>
                        <br/>
                        <div class="setfive">
                            <b>Flexible</b>
                            <b>Strong Multitasker</b>
                            <b>Organized</b>
                        </div>
                    </div>

                    <div class="rightabt">
                        <p></p>
                        <br/>
                    <span class="journey">My Journey So Far...</span>
                
                        <p class="yrone">Now</p>
                        <div class="grad">
                            <p><b>Applying for a Job</b> - <i>CGI Philippines</i></p>
                            <p>As a Junior Automation Developer</p>
                        </div>
                        <hr>

                        <p class="yrtwo">2022</p>
                        <div class="grad">
                            <p><b>Graduation</b> - <i>Bataan Peninsula State University Main Campus</i></p>
                            <p>Bachelor of Science in Computer Science Major in Software Development</p>
                        </div>
                        <hr>

                        <p class="yrthree">2021</p>
                        <div class="grad">
                            <p><b>Internship</b> - <i>Wedding Suppliers Association of the Philippines Inc.</i></p>
                            <p>As a Web Development Intern tasked with developing a website for one of the company's brands, also contributed on the development of other IT projects, and communicated closely with senior developers</p>
                        </div>
                        <hr>

                        <p class="yrthree">2018</p>
                        <div class="grad">
                            <p><b>Graduation</b> - <i>Jose Rizal Institute Orion</i></p>
                            <p>STEM Graduate with Honors</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="footer-cont">
                    <div class="footertitle">
                    <span><a href="home.php"><b>Franze Barbosa</b></a></span>
                    </div>
                    
                    <div class="footercontact">
                        <a href="https://www.linkedin.com/in/franze-dale-barbosa" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="20px" height="20px"></a>
                        <a href="https://github.com/barbyturates" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="20px" height="20px"></a>
                        <a href="https://www.credly.com/users/franze-dale-barbosa" target="_blank"><img src="https://theme.zdassets.com/theme_assets/2382499/cbf082693b966d5c5e6e30fa455853afb22f0079.png" width="20px" height="20px"></a>
                        <a href="mailto:fdbbarbosa@gmail.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" width="24px" height="20px"></a>
                    </div>
                </div>
            </div>

                
        </div>
        
    </body>

</html>
