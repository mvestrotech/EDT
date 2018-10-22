<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="Vanilla javascript plugin for building nice responsive timetables">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Timetable.js demo</title>
    <link rel="stylesheet" href="../vue/styleCSS/timetablejs.css">
    <link rel="stylesheet" href="../vue/styleCSS/demo.css">
</head>
<body>

<div class="hero-unit">
    <h1>EDT</h1>
</div>

<div class="timetable"></div>

<script src="../vue/scripts/timetable.js"></script>

<script>
    var timetable = new Timetable();

    timetable.setScope(0,23)
</script>

<?php
while ($matiere = $matieres->fetch()) {
    ?>
    <script>
        timetable.addLocations(['<?php echo $matiere['nom']; ?>']);

        //timetable.addEvent('Sightseeing', '<?php echo $matiere['nom']; ?>', new Date(2015, 7, 17, 9, 00), new Date(2015, 7, 17, 11, 30), {url: '#'});
    </script>
    <?php
}
?>
<script>
    var renderer = new Timetable.Renderer(timetable);
    renderer.draw('.timetable');
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-37417680-5');ga('send','pageview');
</script>

<div class="col">
    <?php
    ini_set('display_errors', 1);
    while ($periode = $periodes->fetch()) {
        echo "<p>" . date("d/m/y G:i:s", $periode['tDeb']) . " - " . date("d/m/y G:i:s",$periode['tFin']) . "</p>";
    }
    ?>
</div>
</body>
</html>
