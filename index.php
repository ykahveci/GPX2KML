<?php

//Copyright (C) 2019 Yunus Kahveci
//Have a look at the README.md and LICENSE files!
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iOverlander to KML converter</title>
    <meta name="description"
          content="Easily and painlessly convert iOverlander downloaded files to the KML format which is supported by maps.me"/>
    <meta name="keywords" content="KML format, iOverlander, maps.me, OpenStreetMaps, converter, POIs"/>
    <meta name="author" content="Yunus Kahveci"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/mainLayout.css"/>

    <!-- remove this if you use Modernizr -->
    <script>(function (e, t, n) {
            var r = e.querySelectorAll("html")[0];
            r.className = r.className.replace(/(^|\s)no-js(\s|$)/, "$1js$2")
        })(document, window, 0);</script>

</head>
<body>
<div class="container">
    <header class="header">
        <h1>GPX to KML converter</h1>
        <p>Convert <strong><a href="http://app.ioverlander.com/countries/places_by_country">iOverlander</a>
                .gpx</strong> files to the <strong>KML</strong> format for use with
            <strong><a href="http://maps.me">maps.me</a></strong> the easy way. Also, you can find this WebApp on <a href="https://github.com/ykahveci/GPX2KML/">GitHub</a>!</p>
    </header>
    <div class="content">
        <div class="box">
            <form action="convert.php" enctype="multipart/form-data" method="post">
                <h2>Step 1: Upload .gpx File</h2>
                <div class="uploadButtonContainer">
                    <script src="js/select.js"></script>
                    <input type="file" name="file" id="file-1" class="inputfile inputfile-1" accept=".gpx"/>
                    <label class="inputFileLabelContent" for="file-1">
                        <svg class="inputFileLabelContent" xmlns="http://www.w3.org/2000/svg" width="20" height="17"
                             viewBox="0 0 20 17">
                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                        </svg>
                        <span class="inputFileLabelContent">Choose a file&hellip;</span></label></div>

                <h2>Step 2: Select Categories</h2>
                <div class="checkboxes">
                    <ul class="categories">
                        <li><input type="button" class="checkbox selectButtons" id="selectAll"
                                   name="selectAll" onclick="select_all()"><label
                                    for="selectAll"><img
                                        class="checkboxIcon" src="img/categoryIcons/all.png"><span
                                        class="checkboxLabel"> Select All </span></label></li>
                        <li><input type="button" class="checkbox selectButtons" id="selectNone"
                                   name="selectNone" onclick="select_none();"><label
                                    for="selectNone"><img
                                        class="checkboxIcon" src="img/categoryIcons/none.png"><span
                                        class="checkboxLabel"> Select None </span></label></li>
                        <br></br>


                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxOne"
                                   name="categories[]" value="Established Campground"><label
                                    for="checkboxOne"><img
                                        class="checkboxIcon" src="img/categoryIcons/established_campground.png"><span
                                        class="checkboxLabel"> Established
                                Campgrounds </span></label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwo"
                                   name="categories[]" value="Informal Campsite"><label
                                    for="checkboxTwo"><img
                                        class="checkboxIcon" src="img/categoryIcons/informal_campsite.png"><span
                                        class="checkboxLabel"> Informal
                            Campsites </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxThree"
                                   name="categories[]" value="Wild Camping"><label
                                    for="checkboxThree"><img
                                        class="checkboxIcon" src="img/categoryIcons/wild_camping.png"><span
                                        class="checkboxLabel"> Wild Camping </label>
                        </li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxFour" name="categories[]" value="Hotel"
                                  ><label
                                    for="checkboxFour"><img
                                        class="checkboxIcon" src="img/categoryIcons/hotel.png"><span
                                        class="checkboxLabel"> Hotels
                            </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxFive"
                                   name="categories[]" value="Hostel"><label
                                    for="checkboxFive"><img
                                        class="checkboxIcon" src="img/categoryIcons/hostel.png"><span
                                        class="checkboxLabel"> Hostels
                            </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxSix"
                                   name="categories[]" value="Fuel Station"><label
                                    for="checkboxSix"><img
                                        class="checkboxIcon" src="img/categoryIcons/fuel.png"><span
                                        class="checkboxLabel"> Fuel Stations
                            </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxSeven"
                                   name="categories[]" value="Propane"><label
                                    for="checkboxSeven"><img
                                        class="checkboxIcon" src="img/categoryIcons/propane.png"><span
                                        class="checkboxLabel"> Propane </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxEight"
                                   name="categories[]" value="Mechanic and Parts"><label
                                    for="checkboxEight"><img
                                        class="checkboxIcon" src="img/categoryIcons/mechanic.png"><span
                                        class="checkboxLabel"> Mechanics and
                            Parts </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxNine" name="categories[]" value="Water"
                                  ><label
                                    for="checkboxNine"><img
                                        class="checkboxIcon" src="img/categoryIcons/water.png"><span
                                        class="checkboxLabel"> Water
                            </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTen"
                                   name="categories[]" value="Sanitation Dump Station"><label
                                    for="checkboxTen"><img class="checkboxIcon" src="img/categoryIcons/dump.png"><span
                                        class="checkboxLabel"> Sanitation
                            Dump Stations </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxEleven"
                                   name="categories[]" value="Restaurant"><label
                                    for="checkboxEleven"><img
                                        class="checkboxIcon" src="img/categoryIcons/restaurant.png"><span
                                        class="checkboxLabel"> Restaurants </label>
                        </li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwelve"
                                   name="categories[]" value="Tourist Attraction"><label
                                    for="checkboxTwelve"><img class="checkboxIcon"
                                                              src="img/categoryIcons/tourist_attraction.png"><span
                                        class="checkboxLabel"> Tourist
                            Attractions </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxThirteen"
                                   name="categories[]" value="Shopping"><label
                                    for="checkboxThirteen"><img
                                        class="checkboxIcon" src="img/categoryIcons/shopping.png"><span
                                        class="checkboxLabel"> Shopping </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxFourteen"
                                   name="categories[]" value="Medical"><label
                                    for="checkboxFourteen"><img
                                        class="checkboxIcon" src="img/categoryIcons/medical.png"><span
                                        class="checkboxLabel"> Medical </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxFifteen"
                                   name="categories[]" value="Pet Services"><label
                                    for="checkboxFifteen"><img class="checkboxIcon"
                                                               src="img/categoryIcons/pet_services.png"><span
                                        class="checkboxLabel"> Pet
                            Services </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxSixteen"
                                   name="categories[]" value="Laundromat"><label
                                    for="checkboxSixteen"><img
                                        class="checkboxIcon" src="img/categoryIcons/laundromat.png"><span
                                        class="checkboxLabel"> Laundromats </label>
                        </li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxSeventeen"
                                   name="categories[]" value="Customs and Immigration"><label
                                    for="checkboxSeventeen"><img class="checkboxIcon"
                                                                 src="img/categoryIcons/customs_and_immigration.png"><span
                                        class="checkboxLabel">
                            Customs and Immigration </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxNineteen"
                                   name="categories[]" value="Checkpoint"><label
                                    for="checkboxNineteen"><img class="checkboxIcon"
                                                                src="img/categoryIcons/checkpoint.png"><span
                                        class="checkboxLabel">
                            Checkpoints </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwenty"
                                   name="categories[]" value="Consulate / Embassy"><label
                                    for="checkboxTwenty"><img class="checkboxIcon"
                                                              src="img/categoryIcons/consulate.png"><span
                                        class="checkboxLabel">
                            Consulates / Embassys </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwentyone"
                                   name="categories[]" value="Vehicle Insurance"><label
                                    for="checkboxTwentyone"><img class="checkboxIcon"
                                                                 src="img/categoryIcons/vehicle_insurance.png"><span
                                        class="checkboxLabel"> Vehicle
                            Insurance </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwentytwo"
                                   name="categories[]" value="Vehicle Shipping"><label
                                    for="checkboxTwentytwo"><img class="checkboxIcon"
                                                                 src="img/categoryIcons/vehicle_shipping.png"><span
                                        class="checkboxLabel"> Vehicle
                            Shipping </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwentythree"
                                   name="categories[]" value="Vehicle Storage"><label
                                    for="checkboxTwentythree"><img class="checkboxIcon"
                                                                   src="img/categoryIcons/vehicle_storage.png"><span
                                        class="checkboxLabel"> Vehicle
                            Storage </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwentyfour"
                                   name="categories[]" value="Warning"><label
                                    for="checkboxTwentyfour"><img class="checkboxIcon"
                                                                  src="img/categoryIcons/warning.png"><span
                                        class="checkboxLabel">
                            Warnings </label></li>
                        <li><input checked type="checkbox" class="checkbox selectButtonActionMod" id="checkboxTwentyfive"
                                   name="categories[]" value="Other"><label
                                    for="checkboxTwentyfive"><img class="checkboxIcon"
                                                                  src="img/categoryIcons/other.png"><span
                                        class="checkboxLabel">
                            Others </label></li>
                    </ul>
                </div>
                <h2>Step 3: Download .kml file</h2>
                <div class="uploadButtonContainer">
                    <input type="submit" name="submit" id="submit" class="inputfile inputfile-1"/>
                    <label class="inputFileLabelContent" for="submit">
                        <svg class="inputFileLabelContent" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                             viewBox="0 0 20 17">
                            <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/>
                        </svg>
                        <span class="inputFileLabelContent">Convert</span></label></div>
            </form>
        </div>
    </div>
</div><!-- /container -->

<script src="js/fileInput.js"></script>

</body>
</html>
