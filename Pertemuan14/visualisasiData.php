<!DOCTYPE html>

<?php
  // including FusionCharts PHP wrapper
  include("fusioncharts.php");
// print_r();
  // establishing DB connection
  $host= "host=localhost";
  // add values for below variables according to your system
  $port= "port=5432";
  $dbname="dbname=db_futsal";
  $dbuser="user=postgres";
  $dbpass="password=magnumfilter";

  // connection string (pg_connect() is native PHP method for Postgres)
  $dbconn = pg_connect("$host $port $dbname $dbuser $dbpass");

  // validating DB connection
  if(!$dbconn) {
    exit("There was an error establishing database connection");
  }

?>

<html>
   <head>
      <title>futsalCharts</title>

      <!-- including style and font css -->
      <link href='https://fonts.googleapis.com/css?family=Merriweather:300' rel='stylesheet' type='text/css'>
      <style>
        * {
          margin: 0;
          padding: 0;
          background-color: #FAF6F3;
        }
      </style>
jumlah_pemain, tahun
      <!-- FusionCharts core package JS files -->
      <script src="https://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
      <script src="https://static.fusioncharts.com/code/latest/fusioncharts.charts.js"></script>
      <script src="https://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js"></script>
   </head>
   <body>

<?php

  $result = pg_query($dbconn, "select count(date_part('year',tanggal_lahir)) as jumlah_pemain, date_part('year',tanggal_lahir) as tahun from tbpemain group by date_part('year',tanggal_lahir) order by tahun;") or exit("Error with quering database");

  if ($result) {

  // creating an associative array to store the chart attributes
  $arrData = array(
        "chart" => array(
            // caption and sub-caption customization
            "caption"=> "Data futsal",
            "captionFontSize"=> "24",
            "captionFontColor"=> "#4D394B",
            "captionPadding"=> "20",

            // font and text size customization
            "baseFont"=> "Merriweather, sans-serif",
            "baseFontColor"=> "#ABA39D",
            "outCnvBaseColor"=> "#ABA39D",
            "baseFontSize"=> "15",
            "outCnvBaseFontSize"=> "15",

            // div line customization
            "divLineColor"=> "#ABA39D",
            "divLineAlpha"=> "22",
            "numDivLines"=> "5",

            // y-axis scale customization
            "yAxisMinValue"=> "0",
            "yAxisMaxValue"=> "30",

            // tool-tip customization
            "toolTipBorderColor"=> "#ABA8B7",
            "toolTipBgColor"=> "#F5F3F1",
            "toolTipPadding"=> "13",
            "toolTipAlpha"=> "50",
            "toolTipBorderThickness"=> "2",
            "toolTipBorderAlpha"=> "30",
            "toolTipColor"=> "#4D394B",
            "plotToolText"=> "<div style='text-align: center; line-height: 1.5;'>\$label<br>\$value jumlah_pemain<div>",


            // other customizations
            "theme"=> "fint",
            "paletteColors"=> "#7B5A85",
            "showBorder"=> "0",
            "bgColor"=> "#FAF6F3",
            "canvasBgColor"=> "#FAF6F3",
            "bgAlpha"=> "100",
            "showValues"=> "0",
            "formatNumberScale"=> "0",
            "plotSpacePercent"=> "33",
            "showcanvasborder"=> "0",
            "showPlotBorder"=> "0"
          )
    );

  $arrData["data"] = array();

  // iterating over each data and pushing it into $arrData array
  while($row = pg_fetch_array($result)) {
    array_push($arrData["data"], array(
      "label" => $row["tahun"],
      "value" => $row["jumlah_pemain"]
      )
    );
  }

  $jsonEncodedData = json_encode($arrData);

  // creating FusionCharts instance
  $postgresChart = new FusionCharts("column2d", "topMedalChart" , '100%', '450', "postgres-chart", "json", $jsonEncodedData);

  // FusionCharts render method
  $postgresChart->render();

  // closing database connection
  pg_close($dbconn);

  }

?>
  <!-- creating chart container -->
  <center><div id="postgres-chart">A beautiful chart is on its way!</div></center>
   </body>
</html>
