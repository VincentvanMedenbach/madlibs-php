<?php require_once('Menu.php');
$kunnen = $_REQUEST['kunnen']; //1
$persoon = $_REQUEST['persoon']; //2
$getal = $_REQUEST['getal'];    //3
$vakantie = $_REQUEST['vakantie']; //4
$beste = $_REQUEST['beste'];    //5
$slechste = $_REQUEST['slechste']; //6
$overkomen = $_REQUEST['overkomen']; //7
?>

<section id="TextArea">
    <article>
        <h1>onkunde</h1>
        <p>Er zijn veel mensen die niet kunnen <?php echo $kunnen; ?>. Neem
            nou <?php echo $persoon; ?>. Zelfs met de hulp van een <?php echo $vakantie; ?> of
            zelfs <?php echo $getal; ?> kan <?php echo $persoon; ?>
            niet <?php echo $kunnen; ?>. Dat heeft niet te maken met een gebrek
            aan <?php echo $beste; ?>, maar met een te veel aan <?php echo $slechste; ?>. Te
            veel <?php echo $slechste; ?> leidt tot <?php echo $overkomen; ?> en dat is niet goed als je
            wilt <?php echo $kunnen; ?>. Helaas voor <?php echo $persoon; ?>.</p>
        </p>

    </article>

</section>
<footer>
    Thank you for visiting our web site.
</footer>
</main>
</body>
</html>



