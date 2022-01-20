<!doctype html>
<html lang="de">

<head>
  <meta charset="utf-8" />
  <title>Fasan</title>
  <meta name="description" content="VFH ICS WEBSTART" />
  <meta name="author" content="Friedrich Föll" />
  <link rel="stylesheet" href="./css/StyleNew.css" />
  <link rel="icon" href="./images/trees.png" />
</head>

<body>
  <header>
    <h1>Fasan (Phasianus colchicus)</h1>
    <button type="button" onclick="myFunction()">Zurück</button>
    <script>
      function myFunction() {
        history.back();
      }
    </script>
  </header>
  <br>
  <img src="./images/Fasan.jpg" alt="FasanenHahn" width="550" height="auto" />
  <section>
    <section>
      <h2>Kennzeichen</h2>
      <ul>
        <li>Größe: etwa wie ein Haushuhn.
        <li>Der Fasanen-Hahn und die Fasanen-Henne unterscheiden sich deutlich: Der Hahn ist sehr bunt gefärbt, Kopf und Hals sind dunkelgrün, über den Augen hat er rote Schwellkörper, der Schwanz ist lang und schmal. Er hat Sporen an der Hinterseite
          der Beine. Die Henne trägt ein schlicht braunes Tarnkleid und einen kürzeren Schwanz.
        <li>Die Färbung der Männchen variiert stark, da die heute in Deutschland vorkommenden Fasane Kreuzungen aus vielen verschiedenen Rassen sind.
      </ul>
    </section>
    <section>
      <h3>Verbreitung und Lebensraum</h3>
      <ul>
        <li>Der Fasan kommt heute fast in ganz Europa vor. Er fehlt in Portugal, Norwegen, Nordschweden, Nordfinnland, Island, im Norden Russlands, Sardinien, Süd-Italien und Griechenland.
        <li>Seine Urheimat ist Asien, die Römer brachten ihn nach Süd- und Mitteleuropa.
        <li>Optimal ist eine abwechslungsreiche Landschaft mit Feldern, Wiesen, Hecken, Feldgehölzen, Schilfzonen und Gewässern.
        <li>Fasane bevorzugen leichte, sandige Böden zum Scharren nach Magensteinchen und für Staubbäder zur Gefiederpflege.
        <li>Sonnige, vegetationsfreie Plätze brauchen sie zum Trocknen und Aufwärmen nach Regengüssen.
      </ul>
    </section>
    <section>
      <h4>Ernährung</h4>
      <ul>
        <li>In den ersten Wochen brauchen die Küken tierisches Eiweiß und fressen daher vor allem Insekten, deren Larven und Puppen.
        <li>Später ist die Nahrung gemischt: grüne Pflanzenteile, Getreide und Unkrautsamen, Insekten, Schnecken, Würmer und kleinere Wirbeltiere.
        <li>Der Fasan nimmt kleine Steinchen auf, die im Magen dazu dienen, die Nahrung zu zermahlen (Mahlsteine).
        <li>Er muss regelmäßig trinken.
      </ul>
    </section>
    <section>
      <h5>Lebensweise und Fortpflanzung</h5>
      <ul>
        <li>Der Fasan lebt gesellig, im Winter meist nach Geschlechtern getrennt.
          Balzzeit: ab März/April, die Hähne markieren ihre Reviere mit Doppelruf und Flügelwirbel.
        <li>Um den Platzhahn versammeln sich mehrere Hennen, der Fasan lebt polygam.
        <li>Der Fasan ist ein Bodenbrüter. In einem Nest in dichter Vegetation legt sie ab Ende April neun bis zwölf olivbraune Eier. Nur die Henne brütet.
        <li>Bei Verlust der Brut wird ein Nachgelege angelegt. Küken schlüpfen nach 23-25 Tagen, sie sind Nestflüchter. Bereits nach zwölf Tagen sind sie in der Lage einige Meter weit zu fliegen, nach acht Wochen sind sie selbständig.
        <li>Die Sterblichkeit ist im ersten Lebensjahr sehr hoch.
        <li>In freier Wildbahn wird der Fasan zwei bis drei Jahre alt, in Gefangenschaft acht bis zehn Jahre.
      </ul>
    </section>
    <section>

      <button onclick="KommentarKnopf('Kommentarfeld')">Kommentar verfassen</button>
      <br><br>

      <?php
  	   if (isset($_POST['Kommentarfeld'])) {
         file_put_contents('Kommentare.txt',"Fasan-Kommentar:".$_POST['Kommentarfeld']."\n",FILE_APPEND);
  	     echo "Kommentar gespeichert";}
      ?>
      <form name "test"  method="POST">
      <textarea id="Kommentarfeld" name="Kommentarfeld" rows="4" cols="50" font-size=large style="display:none" maxlength="500">
      </textarea>
      <input name=submit type="submit" name="speichern" value="speichern" />
      </form>

    </section>
    <h6>Quellen</h6>
    <ul>
      <li>Cramp, S. et al. (1987): Handbook of the Birds of Europe, the Middle East and North Africa. Vol. II Hawks to Bustards. Oxford University Press.
    </ul>

    <script src="./js/main.js"></script>
</body>

</html>
