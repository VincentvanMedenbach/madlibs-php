<?php require_once('Menu.php');
$dier = $_REQUEST['dier']; //ingevuld
$persoon = $_REQUEST['persoon'];
$land = $_REQUEST['land'];
$verveelt = $_REQUEST['verveelt'];
$speelgoed = $_REQUEST['speelgoed'];
$docent = $_REQUEST['docent'];
$geld = $_REQUEST['geld'];
$bezigheid = $_REQUEST['bezigheid'];
?>
<section id="TextArea">
    <article>
        <p>Er heerst paniek in het koninkrijk <?php echo $land; ?>. Koning
            <?php echo $docent; ?> is ten einde raad en als koning <?php echo $docent; ?>
            ten einde raad is, dan roept hij zijn ten-einde-raadsheer
            <?php echo $persoon; ?>.<br><br>

            "<?php echo $persoon; ?>! Het is een ramp! Het is een schande!"<br><br>  "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
            "Mijn <?php echo $dier; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net  <?php echo $speelgoed; ?> voor hem gekocht!"<br><br>
            "Majesteit, uw <?php echo $dier; ?> komt vast vanzelf weer terug?"<br><br>
            "Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid; ?> leren?"<br><br>
            "Maar Sire, daar kunt u toch uw <?php echo $geld; ?> voor gebruiken."<br><br>
            "<?php echo $persoon; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
            "<?php echo $verveelt; ?>, Sire."
        </p>

    </article>

</section>
<footer>
    Thank you for visiting our web site.
</footer>
</main>
</body>
</html>



