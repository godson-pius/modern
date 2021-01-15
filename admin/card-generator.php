<?php
require_once 'inc/functions/config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Generator</title>
</head>
<style>
    page {
        background: red;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    }

    page[size="A4"] {
        background: red;
        width: 21cm;
        min-height: 29.7cm;
    }

    #e6_1 {
        box-shadow: 0px 12px 33px rgba(71.18750050663948, 68.2213568687439, 68.2213568687439, 1);
        background-color: rgba(255, 255, 255, 1);
        opacity: 1;
        width: 10.4cm;
        height: 220px;
        display: inline-block;
        padding: 10px;
    }

    #e6_3 {
        box-shadow: 0px 1px 11px rgba(40.37499949336052, 37.8515625, 37.8515625, 0.25);
        border-radius: 500px;
        background-color: rgba(160.43749898672104, 159.76900845766068, 159.76900845766068, 1);
        opacity: 1;
        border: 6px solid rgba(255, 255, 255, 1);
        width: 100px;
        height: 100px;
    }

    #e6_8 {
        /* box-shadow:0px 4px 5px rgba(255, 255, 255, 1); */
        color: rgba(0, 0, 0, 0.7900000214576721);
        opacity: 1;
        width: 556px;
        height: 102px;
        font-family: Overpass;
        text-align: center;
        font-size: 20px;
        text-justify: newspaper;
        position: absolute;
        font-weight: bold;
        letter-spacing: 0;
        top: 50px;
        left: 524px;
        /* line-height:106.70000314712524; */
    }



    /* back */

    #e6_13 {
        /* box-shadow: 0px 12px 33px rgba(71.18750050663948, 68.2213568687439, 68.2213568687439, 1); */
        background: linear-gradient(163.68deg, #626C67 8.28%, #FFFFFF 91.39%);
        opacity: 1;
        width: 9.9cm;
        height: 220px;
        display: inline-block;
        padding: 10px;
    }

    #e6_19 {
        width: 0.7%;
        height: 274px;
        margin-top: -181px;
        margin-left: 209px;
        background-color: #1d523a;

        transform: rotate(30deg);
    }

    h4 {
        color: #FFFFFF;
        text-decoration: underline;
    }

    li {
        font-weight: 500;
    }

    .back .name {
        margin-left: 55px;
        font-size: 30px;
        font-weight: bold;
        margin-top: -83px;
        margin-left: 39px;
        color: #1d523a;
    }

    .back .name2 {
        font-size: 30px;
        font-weight: bold;
        margin-top: -152px;
        margin-left: 262px;
        color: #1d523a;
    }

    .scratch_pin {
        background-color: #C4C4C4;
        width: 180px;
        font-weight: bold;
        text-align: center;
        padding: 10px;
        margin-left: 175px;
        margin-top: 90px;
    }

    button {
        padding: 10px;
        font-weight: bold;
    }
</style>




<body>
    <form action="" method="post">
        <button name="generate">Generate Pin</button>
    </form>
    <!-- <div class="front">
        <page size="A4">
            <div id="e6_1">
                <div id="e6_3"></div>
                <span id="e6_8">MODERN NURSERY AND <br>
                    PRIMARY SCHOOL</span>
            </div>
        </page>
    </div> -->






    <div class="back">
        <page size="A4">

            <?php
            if (isset($_POST['generate'])) {
                generate();
            }

            function generate()
            {
                global $link;

                for ($i = 1; $i <= 10; $i++) {
                    $sql1 = "SELECT * FROM academic_years WHERE active = 1";
                    $query1 = mysqli_query($link, $sql1);

                    if ($query1) {
                        foreach ($query1 as $acad_year) {
                        }

                        $pintmp = "mnps/" . $acad_year['academic_year'] . "/" . rand(null, 5000000);

                        if (!check_duplicate("student_cards", "card_pin", $pintmp)) {
                            $pin = $pintmp;
                        } else {
                            $pin = "mnps/" . $acad_year['academic_year'] . "/" . rand(null, 5000000);
                        }
                        $acad_id = $acad_year['id'];

                        $sql2 = "INSERT INTO student_cards (card_pin, acad_year_id, created_at) VALUES ('$pin', '$acad_id', now())";
                        $query2 = mysqli_query($link, $sql2);

                        if ($query2) { ?>
                            <div id="e6_13">
                                <h4>HOW TO CHECK YOUR RESULT</h4>

                                <ol>
                                    <li>Login to your dashboard.</li>
                                    <li>Click on view result.</li>
                                    <li>Input your username & <br>
                                        your scratch pin.</li>
                                </ol>
                                <div id="e6_19"></div>
                                <div class="name">MNPS</div>
                                <div class="name2">MNPS</div>
                                <div class="scratch_pin"><?= $pin; ?></div>
                            </div>
            <?php } else {
                            echo "failed";
                        }
                    }
                }
            }

            ?>


        </page>
    </div>
</body>

</html>