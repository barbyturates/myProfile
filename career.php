<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Franze Barbosa - Career</title>
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
            height: 275px;
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
            font-family: Roboto;
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
            font-family: Roboto;
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
        .goalheader {
            width: 100%;  
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
           
            position: relative;
            background-color: whitesmoke;
            padding-bottom: 15px;
            margin: 0px;
        }
        .goalheader-cont {
            margin-top: 30px;
            width: 1100px;
           background: whitesmoke;
            overflow: hidden;
            font-family: Roboto;
            margin-bottom: 50px;
        }
        .goaltitle {
            font-size: 120px;
        }
        .goaldesc {
            font-size: 25px;
            margin-left: 20px;
            margin-right: 25px;
        }
        .tl {
            font-weight: bold;
            font-size: 22px;
            background: #1f1f1f;
            color: white;
            padding: 10px;
            border-radius: 7px;
        }
        .goalheader-cont img {
            vertical-align: middle;
            float: right;
            cursor: pointer;
            transition: transform .3s;
        }
        .goalheader-cont img:hover {
            transform: scale(1.09);
        }
        .goalheader-cont hr {
            background-color: #d4d4d4;
            height: 2px;
            border: none;
            margin-top: 27px;
           
        }
        .yronefuture {
            width: 100%;  
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: relative;
            background-color: whitesmoke;
            padding: 0;
            margin: 0;
        }
        .tlyrone {
            margin-top: 25px;
            position: relative;
            left: 50%;
            font-size: 40px;
            font-weight: 500;
            color: #ababab;
            margin-bottom: 5px;
            margin-left: -63px;
        }
        .tlyrone img, .tlyrnext img {
            margin-left: 20px;

        }
        .tlyrnext {
            margin-top: 15px;
            position: relative;
            left: 50%;
            font-size: 40px;
            font-weight: 500;
            color: #ababab;
            margin-bottom: 5px;
            margin-left: -55px;
        }
        .obj-conta {
            padding: 10px;
            width: 650px;
            background-color: white;
            margin-left: 25px;
            margin-right: 25px;
            margin-top: 7px;
            margin-bottom: 7px;
            border-radius: 8px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
        }
        .vhr {
            border-left: 2px solid #d4d4d4;
            height: 35px;
            position: relative;
            left: 50%;
            margin-top: 10px;
            margin-left: -10px;
        }

        .addObjForm, .updateObjForm {
        display: none;
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border: 2px solid #242526;
        z-index: 9;
        max-width : 600px;
        min-width : 600px;
        height: 460px;
        background-color: white;
        }
        .AddFormCont {
            position: relative;
            margin-top: 30px;
            max-width: 540px;
            margin-left: 30px;
            padding: 0px;
            background-color: none;
        }
        .blackbox_aa {
            margin-top:30px;
            margin-left: 30px;
            position: absolute;
            background-color: #d4d4d4;
            min-height: 400px;
            width: 540px;
            opacity: 0.8;
        }
        .AddFormCont h2 {
            margin-left: 0;
            position: absolute;
            margin-top:0;
            width: 480px;
            padding: 20px 30px 20px 30px ;
            background-color: #0d0d0d;
            opacity: 0.8;
            color: white;
            font-size: 30px;
            text-align: center;
            font-family: Roboto;
        }
        .closeAdd_btn {
        float: right;
        margin-top: 5px;
        margin-left: 1px;
        margin-bottom: 0;
        background-color: transparent;
        background-repeat: no-repeat;
        border: none;
        cursor: pointer;
        overflow: hidden;
        outline: none;
        
        }
        .closeAdd_btn:hover {
        }
        .hotelFormCont h2, .AdsFormCont h2, .ProductsFormCont h2 {
            margin-left: 0;
            position: absolute;
            margin-top:0;
            width: 480px;
            padding: 20px 30px 20px 30px ;
            background-color: #242526;
            opacity: 0.8;
            color: white;
            font-size: 30px;
            text-align: center;
            font-family: 'Poppins', sans-serif;
        } 
        .AddFormCont input, .AddFormCont textarea {
            position: relative;
            background-color: whitesmoke;
            opacity: 1;
            padding: 10px 13px;
            margin: 8px 0;
            border-radius: 4px;
            box-sizing: border-box;
            border: 0.5px solid #242526;
            -webkit-transition: 0.5s;
            transition: 0.5s;
            outline: none;
            color: black;
            font-family: Roboto;
            font-size: 12px;
        }
        .AddFormCont input:focus, .AddFormCont textarea:focus {
            border: 0.5px solid whitesmoke;
            
        }
        .AddFormCont button[type=submit] {
            background-color: #1f1f1f;
            color: white;
            padding-top: 7px;
            padding-bottom: 9px;
            font-family: Roboto;
            font-weight: 800;
            font-size: 17px;
            letter-spacing: 1px;
            text-align: center;
            text-decoration: none;
            border: none;
            opacity: 0.85;
            border-radius: 4px;
            
        }

        .AddFormCont button[type=submit]:hover {
            opacity: 1;
        }
        .AddFormCont label {
            font-size: 14px;
            color: #c1c1c1;
            font-family: 'Poppins', sans-serif;
            letter-spacing: 1px;
        }

        .blur   {
            filter: blur(5px);
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            pointer-events:none;
            overflow: hidden;
            opacity:0.7;
            
        }
        .unblur {
            filter: blur(0px);
            -webkit-filter: blur(0px);
            -moz-filter: blur(0px);
            -o-filter: blur(0px);
            -ms-filter: blur(0px);
            pointer-events:auto;
            overflow: visible;
            opacity:1; 
        
        }
        .no_scroll {
            background-color: #f5f5f5;
            overflow: hidden;
        }
        .scroll {
            background-color: none;
            overflow: visible;
        }

        .certheader {
                width: 100%;  
                height: 950px;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            
                position: relative;
                background-color: white;
                margin: 0px;
            }
        .certheader-cont {
            margin-top: 40px;
            width: 1100px;
            background: white;
            overflow: hidden;
            font-family: Roboto;
        }
        .rowone div {
            float: left;
            width: 300px;
            height: 100px;
            background: #d4d4d4;
            padding: 20px;
            border-radius: 8px;
            margin-right: 15px;
            margin-left:10px;
            margin-top: 10px;
            margin-bottom: 10px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
            transition: transform .3s;
        }
        .rowone div:hover {
            transform: scale(1.02);
        }
        .rowone {
            margin-top: 30px;
        }
        .certtitle {
            font-size: 120px;
        }
        .rowone a:hover {
            font-weight: bolder;
            color: #ababab;
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
                background-color: whitesmoke;
            }
            .footer-cont {
                margin-top: 10px;
                width: 1100px;
            background: whitesmoke;
                overflow: hidden;
            }
            .footertitle {
                font-family: Roboto;
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

    <body id="body">

        <?php
            $conn = mysqli_connect('localhost','root','','myprofile'); 
                $result = mysqli_query($conn,"SELECT * FROM objectives ORDER by objective_id  + 0 DESC");
                $objectives = array();
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $objectives[] = [
                            'objective_id' => $row['objective_id'],
                            'objective_name' => $row['objective_name'],
                            'objective_desc' => $row['objective_desc'],
                            'objective_reason' => $row['objective_reason'],
                            'objective_tdate' => $row['objective_tdate'],
                            'objective_cdate' => $row['objective_cdate']
                        ];
                    }
                } else {
                    $objectives = null;
                }                                  
        ?>

        <?php
            if (isset($_GET['objective_id'])) {
                $objid = $_GET['objective_id'];
                $conn = mysqli_connect('localhost','root','','myprofile'); 
                $result = mysqli_query($conn,"SELECT * FROM objectives WHERE objective_id = '$objid' ");
                $objectivesOne = array();
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $objectivesOne[] = [
                            'objective_id' => $row['objective_id'],
                            'objective_name' => $row['objective_name'],
                            'objective_desc' => $row['objective_desc'],
                            'objective_reason' => $row['objective_reason'],
                            'objective_tdate' => $row['objective_tdate'],
                            'objective_cdate' => $row['objective_cdate']
                        ];
                    }
                } else {
                    $objectivesOne = null;
                }   
            }                               
        ?>

        <div class="limiter" id ="limiter">
            <div class="header">
                <div class="header-cont">
                    <div class="title">
                    <span><a href="home.php"><b>Franze Barbosa | </b>Aspiring Developer</a></span>
                    </div>
                    <div class="menu">
                        <h4 style="font-size:large; margin-top:22px"><a  class="career" href="home.php" style="font-weight:400;">About</a><a href="career.php" style="margin-left:60px;">Career</a></h4>
                    </div>
                    <div class="contact">
                        <a href="https://www.linkedin.com/in/franze-dale-barbosa" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" width="20px" height="20px"></a>
                        <a href="https://github.com/barbyturates" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" width="20px" height="20px"></a>
                        <a href="https://www.credly.com/users/franze-dale-barbosa" target="_blank"><img src="https://theme.zdassets.com/theme_assets/2382499/cbf082693b966d5c5e6e30fa455853afb22f0079.png" width="20px" height="20px"></a>
                        <a href="mailto:fdbbarbosa@gmail.com"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Gmail_icon_%282020%29.svg/2560px-Gmail_icon_%282020%29.svg.png" width="24px" height="20px"></a>
                    </div>
                </div>
            </div>

            <div class="goalheader">

                <div class="goalheader-cont">
                    <b class="goaltitle">Career Objectives</b>
                    <p class="goaldesc">My goal is to be successful in a <b>high-growth</b>, <b>high-quality workplace</b> by putting my garnered skills and knowledge to the <b>best possible use</b> in <b>helping the company achieve its objectives</b>.</p>
                    <br/>
                    <br/>
                    <br/>
                    <b class="tl">Career Objectives Timeline</b>
                      <img src="https://static.thenounproject.com/png/768833-200.png" width="37px" height="37px" onclick="addObjectives()"> 
                    <hr>
                    
                    <p class="tlyrone">Future</p>
                    <div class="yronefuture">
                        <?php
                            if(isset($objectives)) {
                                foreach($objectives as $row) {
                                    if (!str_contains($row['objective_cdate'], '2022') && !str_contains($row['objective_cdate'], '2021') && !str_contains($row['objective_cdate'], '2020') && !str_contains($row['objective_cdate'], '2019') && !str_contains($row['objective_cdate'], '2018')) {
                                        echo '<div class ="obj-conta">';
                                        echo '<p><b style="font-size: 20px;">'. $row['objective_name'] .'</b>
                                        <span class="btns"><a href="obj_delete.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn.pixabay.com/photo/2021/02/19/14/44/delete-button-6030454_960_720.png" width="19px" height="19px" style="margin-left:18px; margin-right:8px;"></a>
                                        <a href="career.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn-icons-png.flaticon.com/512/93/93638.png" width="19px" height="19px"></a></span></p>';
                                        echo '<p>'. $row['objective_desc'] .'</p>';
                                        if (strlen($row['objective_reason']) > 1) {
                                            echo '<p><i><b>(Why?) </b>'. $row['objective_reason'] .'</i></p>';
                                        }
                                        if (strlen($row['objective_tdate']) > 1) {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_tdate'] .' - '. $row['objective_cdate'] . '</b></p>';
                                        }
                                        else {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_cdate'] . '</b></p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                    <div class="vhr"></div>

                    <p class="tlyrnext">2022</p>
                    <div class="yronefuture">
                        <?php
                            if(isset($objectives)) {
                                foreach($objectives as $row) {
                                    if (str_contains($row['objective_cdate'], '2022')) {
                                        echo '<div class ="obj-conta">';
                                        echo '<p><b style="font-size: 20px;">'. $row['objective_name'] .'</b>
                                        <span class="btns"><a href="obj_delete.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn.pixabay.com/photo/2021/02/19/14/44/delete-button-6030454_960_720.png" width="19px" height="19px" style="margin-left:18px; margin-right:8px;"></a>
                                        <a href="career.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn-icons-png.flaticon.com/512/93/93638.png" width="19px" height="19px"></a></span></p>';
                                        echo '<p>'. $row['objective_desc'] .'</p>';
                                        if (strlen($row['objective_reason']) > 1) {
                                            echo '<p><i><b>(Why?) </b>'. $row['objective_reason'] .'</i></p>';
                                        }
                                        if (strlen($row['objective_tdate']) > 1) {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_tdate'] .' - '. $row['objective_cdate'] . '</b></p>';
                                        }
                                        else {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_cdate'] . '</b></p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                    <div class="vhr"></div>

                    <p class="tlyrnext">2021</p>
                    <div class="yronefuture">
                        <?php
                            if(isset($objectives)) {
                                foreach($objectives as $row) {
                                    if (str_contains($row['objective_cdate'], '2021')) {
                                        echo '<div class ="obj-conta">';
                                        echo '<p><b style="font-size: 20px;">'. $row['objective_name'] .'</b>
                                        <span class="btns"><a href="obj_delete.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn.pixabay.com/photo/2021/02/19/14/44/delete-button-6030454_960_720.png" width="19px" height="19px" style="margin-left:18px; margin-right:8px;"></a>
                                        <a href="career.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn-icons-png.flaticon.com/512/93/93638.png" width="19px" height="19px"></a></span></p>';
                                        echo '<p>'. $row['objective_desc'] .'</p>';
                                        if (strlen($row['objective_reason']) > 1) {
                                            echo '<p><i><b>(Why?) </b>'. $row['objective_reason'] .'</i></p>';
                                        }
                                        if (strlen($row['objective_tdate']) > 1) {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_tdate'] .' - '. $row['objective_cdate'] . '</b></p>';
                                        }
                                        else {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_cdate'] . '</b></p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                    <div class="vhr"></div>

                    <p class="tlyrnext">2020</p>
                    <div class="yronefuture">
                        <?php
                            if(isset($objectives)) {
                                foreach($objectives as $row) {
                                    if (str_contains($row['objective_cdate'], '2020')) {
                                        echo '<div class ="obj-conta">';
                                        echo '<p><b style="font-size: 20px;">'. $row['objective_name'] .'</b>
                                        <span class="btns"><a href="obj_delete.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn.pixabay.com/photo/2021/02/19/14/44/delete-button-6030454_960_720.png" width="19px" height="19px" style="margin-left:18px; margin-right:8px;"></a>
                                        <a href="career.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn-icons-png.flaticon.com/512/93/93638.png" width="19px" height="19px"></a></span></p>';
                                        echo '<p>'. $row['objective_desc'] .'</p>';
                                        if (strlen($row['objective_reason']) > 1) {
                                            echo '<p><i><b>(Why?) </b>'. $row['objective_reason'] .'</i></p>';
                                        }
                                        if (strlen($row['objective_tdate']) > 1) {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_tdate'] .' - '. $row['objective_cdate'] . '</b></p>';
                                        }
                                        else {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_cdate'] . '</b></p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                    <div class="vhr"></div>

                    <p class="tlyrnext">2019</p>
                    <div class="yronefuture">
                        <?php
                            if(isset($objectives)) {
                                foreach($objectives as $row) {
                                    if (str_contains($row['objective_cdate'], '2019')) {
                                        echo '<div class ="obj-conta">';
                                        echo '<p><b style="font-size: 20px;">'. $row['objective_name'] .'</b>
                                        <span class="btns"><a href="obj_delete.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn.pixabay.com/photo/2021/02/19/14/44/delete-button-6030454_960_720.png" width="19px" height="19px" style="margin-left:18px; margin-right:8px;"></a>
                                        <a href="career.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn-icons-png.flaticon.com/512/93/93638.png" width="19px" height="19px"></a></span></p>';
                                        echo '<p>'. $row['objective_desc'] .'</p>';
                                        if (strlen($row['objective_reason']) > 1) {
                                            echo '<p><i><b>(Why?) </b>'. $row['objective_reason'] .'</i></p>';
                                        }
                                        if (strlen($row['objective_tdate']) > 1) {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_tdate'] .' - '. $row['objective_cdate'] . '</b></p>';
                                        }
                                        else {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_cdate'] . '</b></p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>
                    <div class="vhr"></div>

                    <p class="tlyrnext">2018</p>
                    <div class="yronefuture">
                        <?php
                            if(isset($objectives)) {
                                foreach($objectives as $row) {
                                    if (str_contains($row['objective_cdate'], '2018')) {
                                        echo '<div class ="obj-conta">';
                                        echo '<p><b style="font-size: 20px;">'. $row['objective_name'] .'</b>
                                        <span class="btns"><a href="obj_delete.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn.pixabay.com/photo/2021/02/19/14/44/delete-button-6030454_960_720.png" width="19px" height="19px" style="margin-left:18px; margin-right:8px;"></a>
                                        <a href="career.php?objective_id='. $row['objective_id'] .'"><img src="https://cdn-icons-png.flaticon.com/512/93/93638.png" width="19px" height="19px"></a></span></p>';
                                        echo '<p>'. $row['objective_desc'] .'</p>';
                                        if (strlen($row['objective_reason']) > 1) {
                                            echo '<p><i><b>(Why?) </b>'. $row['objective_reason'] .'</i></p>';
                                        }
                                        if (strlen($row['objective_tdate']) > 1) {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_tdate'] .' - '. $row['objective_cdate'] . '</b></p>';
                                        }
                                        else {
                                            echo '<p><b style="font-size: 14px; font-weight:600;">'. $row['objective_cdate'] . '</b></p>';
                                        }
                                        echo '</div>';
                                    }
                                }
                            }
                        ?>
                    </div>

                </div>
            </div>

            <div class="certheader">

                <div class="certheader-cont">
                    <p></p>
                    <b class="certtitle">Certifications</b>
                    <div class="rowone">
                        <div><b style="font-size:19px; margin-bottom:0">My Commitment To Growth: Lifelong Student Of My Craft</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">SkillFront</h4>
                        <a href="https://www.skillfront.com/Badges/11701181645248" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">IT Specialist - Network Security</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">Certiport - A Pearson VUE Business</h4>
                        <a href="https://www.credly.com/badges/7a24270a-3f98-4a05-8988-e4a60742dbdc?source=linked_in_profile" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">Microsoft PowerPoint (Microsoft 365 Apps and Office 2019)</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">Microsoft</h4>
                        <a href="https://www.credly.com/badges/8cb4b44f-e0bc-4b77-8f9b-710d1da52383?source=linked_in_profile" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                    </div>
                    
                    <div class="rowone">
                        <div><b style="font-size:19px; margin-bottom:0">Microsoft Word (Microsoft 365 Apps and Office 2019)</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">Microsoft</h4>
                        <a href="https://www.credly.com/badges/4f8f985a-b9e9-4547-8649-d74bdc57310a?source=linked_in_profile" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">ISO 27001 Foundation - Information Security Certification</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">SkillFront</h4>
                        <a href="https://www.skillfront.com/Badges/09802906747881" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">Microsoft Technology Associate: Security Fundamentals (MTA)</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">Microsoft</h4>
                        <a href="https://www.credly.com/badges/c05ad5ab-7c54-40a9-ab3a-e6e0b1d369e7/public_url" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                    </div>

                    <div class="rowone">
                        <div><b style="font-size:19px; margin-bottom:0">Introduction to Cybersecurity</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">Cisco</h4>
                        <a href="https://www.credly.com/badges/5448d9ca-5be2-4f2b-8a9e-049e6f4e2d92/public_url" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">Lifelong Learning</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">CertiProf</h4>
                        <a href="https://www.credly.com/badges/209355c0-b10c-445f-9729-5020486c323b?source=linked_in_profile" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">Scrum Foundation Professional Certificate SFPC</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">CertiProf</h4>
                        <a href="https://www.credly.com/badges/59bc3bb4-f9c4-42c9-908d-a0065903ee59/public_url" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                    </div>

                    <div class="rowone">
                        <div><b style="font-size:19px; margin-bottom:0">Remote Work & Virtual Collaboration Professional Cert.</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">CertiProf</h4>
                        <a href="https://www.credly.com/badges/007103a5-0a5f-489a-b919-3e593f5c5166/public_url" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
                        </div>
                        <div><b style="font-size:19px; margin-bottom:0">Cyber Security Foundation Professional Certificate - CSFPC™</b><h4 style="margin-top:5px; margin-bottom:5px; font-weight:400;">CertiProf</h4>
                        <a href="https://www.credly.com/badges/8f915557-8fbf-4efe-9eb3-60f6dcd97350/public_url" target="_blank" style="font-size:15px;font-weight:600;">View Certification →</a>
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

        <div class="updateObjForm" id="updateObjForm">
  
            <?php
            //updating
                $conn = mysqli_connect('localhost','root','','myprofile'); 

                if (isset($_POST['updates'])) 
                {
                    $objid = $_POST['obj_id'];
                    $objname = $_POST['objname'];
                    $objdesc = $_POST['objdesc'];
                    $objreason = $_POST['objreason'];
                    $objtdate = $_POST['objtdate'];
                    $objcdate = $_POST['objcdate'];

                    
                    $updateObj = mysqli_query($conn, "UPDATE objectives SET objective_name = '$objname', objective_desc = '$objdesc', objective_reason = '$objreason', objective_tdate = '$objtdate', objective_cdate = '$objcdate' WHERE objective_id = '$objid'");
                    if ($updateObj) {
                        echo '
                            <script type="text/javascript">
                                window.location.href="career.php";
                            </script>
                            ';
                    } else {
                    }
                        

                        
                }
            ?>
            <button type="button" class="closeAdd_btn" onclick="closeUpdatingForm()">
            <img src="https://cdn.iconscout.com/icon/free/png-256/cancel-221-475055.png" style="width: 25px; height: 25px;"/></button>
            <div class="blackbox_aa"></div>
                <div class = "AddFormCont" >
                    <?php

                    echo '<script type="text/javascript">
                        function updateObjectives() {
                        document.getElementById("updateObjForm").style.display = "block";
                        var containerElement = document.getElementById("limiter");
                        containerElement.setAttribute("class", "blur");
                        var containerElementS = document.getElementById("body");
                        containerElementS.setAttribute("class", "no_scroll");
                        }
                        function closeUpdatingForm() {
                        document.getElementById("updateObjForm").style.display = "none";
                        var containerElement = document.getElementById("limiter");
                        containerElement.setAttribute("class", "unblur");
                        var containerElementS = document.getElementById("body");
                        containerElementS.setAttribute("class", "scroll");
                        window.location.href="career.php";
                        }
                        </script>';

                    if(isset($objectivesOne)) {
                        
                        echo '<body onLoad="updateObjectives()">';
                        
                        foreach($objectivesOne as $row) {
                            
                            echo '<form method="POST" enctype="multipart/form-data">';
                            echo '<h2>Update Objective</h2>';
                            echo'<input style="margin-top:100px; margin-left: 20px; width: 92.5%" class="" type="text" placeholder="Name of Objective" name="objname" value="'.$row['objective_name'].'">';
                            echo'<textarea style="width: 92.5%; height:80px; margin-top:10px; margin-left: 20px;" placeholder="Description" name="objdesc">'.$row['objective_desc'].'</textarea>';
                            echo'<textarea style="width: 92.5%; height:60px; margin-top:10px; margin-left: 20px;" placeholder="Reason" name="objreason">'.$row['objective_reason'].'</textarea>';
                            echo'<input style="width: 190px; margin-top:10px; margin-left: 20px;" type="text" placeholder="Target Date (Month yyyy)" name="objtdate" value="'.$row['objective_tdate'].'">';
                            echo'<input style="width: 190px; margin-top:10px; margin-left: 8px;" type="text" placeholder="Completion Date (Month yyyy)" name="objcdate" value="'.$row['objective_cdate'].'">';
                            echo'<input type="hidden" name="obj_id" value="'.$row['objective_id'].'">';
                            echo'<button style ="width:95px; margin-left: 15px;" type="submit" class="" name="updates" required>UPDATE</button>';
                            echo'</form>';
                        }
                        
                    }
                    ?>
                </div>
        </div>        

                    
        <div class="addObjForm" id="addObjForm">
    
            <?php
            //adding
                $conn = mysqli_connect('localhost','root','','myprofile'); 

                if (isset($_POST['inputs'])) 
                {
                    $objname = $_POST['objname'];
                    $objdesc = $_POST['objdesc'];
                    $objreason = $_POST['objreason'];
                    $objtdate = $_POST['objtdate'];
                    $objcdate = $_POST['objcdate'];

                    $insertObj = mysqli_query($conn,"INSERT into objectives (objective_name, objective_desc, objective_reason, objective_tdate, objective_cdate) 
                                values ('$objname', '$objdesc', '$objreason', '$objtdate','$objcdate')");
                    
                    if ($insertObj) 
                        {
                        ?>
                            <script type="text/javascript">
                                window.location.href='career.php';
                            </script>
                        <?php
                        }
                }
            ?>
            <button type="button" class="closeAdd_btn" onclick="closeAddingForm()">
            <img src="https://cdn.iconscout.com/icon/free/png-256/cancel-221-475055.png" style="width: 25px; height: 25px;"/></button>
            <div class="blackbox_aa"></div>
                <div class = "AddFormCont" >
                    <form method="POST" enctype="multipart/form-data">
                        <h2>Add Objective</h2>
                        <input style="margin-top:100px; margin-left: 20px; width: 92.5%" class="" type="text" placeholder="Name of Objective" name="objname" required="">
                        <textarea style="width: 92.5%; height:80px; margin-top:10px; margin-left: 20px;" type="text" placeholder="Description" name="objdesc" required=""></textarea>
                        <textarea style="width: 92.5%; height:60px; margin-top:10px; margin-left: 20px;" type="text" placeholder="Reason" name="objreason" ></textarea>
                        <input style="width: 190px; margin-top:10px; margin-left: 20px;" type="text" placeholder="Target Date (Month yyyy)" name="objtdate" >
                        <input style="width: 190px; margin-top:10px; margin-left: 8px;" type="text" placeholder="Completion Date (Month yyyy)" name="objcdate" required="">
                        <button style ="width:93px; margin-left: 10px;" type="submit" class="" name="inputs" required>ADD</button>
                    </form>
                </div>
        </div>
    </body>

    <script type="text/javascript">
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href);
        }
        var i = '0'
        if(i == 0 || i===0)
        function addObjectives() {
        document.getElementById("addObjForm").style.display = "block";
        var containerElement = document.getElementById('limiter');
        containerElement.setAttribute('class', 'blur');
        var containerElementS = document.getElementById('body');
        containerElementS.setAttribute('class', 'no_scroll');
        }

        function closeAddingForm() {
        document.getElementById("addObjForm").style.display = "none";
        var containerElement = document.getElementById('limiter');
        containerElement.setAttribute('class', 'unblur');
        var containerElementS = document.getElementById('body');
        containerElementS.setAttribute('class', 'scroll');
        }

    </script>
</html>