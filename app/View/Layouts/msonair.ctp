<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('msonair');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>
</head>
<body>
<div id="container">
    <div id="header">
        <h3>navigation</h3>
        <nav>
            <a href="home">Startseite</a>
            <a href="konzept">Konzept</a>
            <a href="team">Team</a>
            <a href="dozenten">Dozenten</a>
            <a href="instrumente">Instrumente</a>
            <a href="news">News</a>
            <a href="hilfsmittel">Hilsmittel</a>
            <a href="buchung">Buchung</a>
            <a href="kontakt">Kontakt</a>
        </nav>
    </div>
    <div id="content">
        <h3>Content der <?php echo $title_for_layout ?> - Page</h3>
        <?php echo $this->fetch('content'); ?>
    </div>
    <div id="footer">
        <h3>Footer</h3>
    </div>
</div>
</body>
</html>
