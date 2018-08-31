<?php include ($_SERVER['DOCUMENT_ROOT']."/app/controller/api/server_status.php"); ?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="MineCraft herní český server." />

  <!-- Site Properties -->
  <title>ShadowLands Wikki | Survival CZ/SK</title>
  <link rel="stylesheet" type="text/css" href="/css/components/reset.css">
  <link rel="stylesheet" type="text/css" href="/css/components/site.css">

  <link rel="stylesheet" type="text/css" href="/css/components/container.css">
  <link rel="stylesheet" type="text/css" href="/css/components/grid.css">
  <link rel="stylesheet" type="text/css" href="/css/components/header.css">
  <link rel="stylesheet" type="text/css" href="/css/components/image.css">
  <link rel="stylesheet" type="text/css" href="/css/components/menu.css">

  <link rel="stylesheet" type="text/css" href="/css/components/divider.css">
  <link rel="stylesheet" type="text/css" href="/css/components/list.css">
  <link rel="stylesheet" type="text/css" href="/css/components/segment.css">
  <link rel="stylesheet" type="text/css" href="/css/components/dropdown.css">
  <link rel="stylesheet" type="text/css" href="/css/components/icon.css">

  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    /*position: fixed; */
    margin: 5em 0em 0em;
    padding: 5em 0em;
    bottom: 0;
    width: 100%;
  }
  </style>
</head>
<body>
<!-- Page Contents -->
  <?php include($_SERVER['DOCUMENT_ROOT']."/app/includes/following_menu/main_wiki_menu.php"); ?>


  <div class="ui main center aligned text container">
    <h1 class="ui header">Residence Návod</h1>
    <div class="ui vertical stripe segment">
      <div class="ui center aligned list">
      <h3>Jak vytvořit residenci ?</h3>
        <p>Na našem serveru se vytváři residence stickem. Jak vlastně jí vytvořit ?
          Vezme te si stick a klikneme prvně pravým tlačítkem myši,
          poté levým tlačítkem a napíšete /res select vert - Což vám označí maximální možný výběr od bedrocku až po nebe.
          Poslední krok napíšete příkaz /res create jmeno_resky - Jakékoliv jméno které chcete je to na vás.</p>
      <h3>Seznam Základních Vlajek pro Hráče</h3>
        <li>/res help - Vypíšení všechny příkazy</li>
        <li>/res select vert - Označí nahoru až do bedrocku </li>
		<li>/res create [jméno_resky] - Vytváří rezidenci </li>
		<li>/res set - Davá opravnění všem lidem v resce </li>
		<li>/res info - Informace o rezidenci </li>
		<li>/res pset [jméno_hráče] - Dává právo určenému hráči </li>
		<li>/res tpset - Nastavuje pozici telportaci v rezidenci </li>
        <li>/res limits - Zobrazuje moje limity </li>
        <li>/res tp - Telportuje se do residence </li>
		<li>/res remove[jméno_resky] - Odstranění rezidence </li>
		<li>/res confirm [jméno_resky] - Potvrzuje odstranění rezidence </li>
		<li>/res give [jméno_resky] [jméno_hráče] -  Darovat residence Hráčovi </li>
		<li>/res kick [jméno_hráče] - vyhodí hráče z residence </li>
		<li></li>
      </div>
  </div>
</div>
<?php include($_SERVER['DOCUMENT_ROOT']."/app/includes/footer.php"); ?>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../css/components/visibility.js"></script>
<script src="../css/components/sidebar.js"></script>
<script src="../css/components/transition.js"></script>

</html>
