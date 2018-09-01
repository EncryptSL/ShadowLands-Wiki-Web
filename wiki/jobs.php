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
    <h1 class="ui header">Jobs Návod</h1>
    <div class="ui vertical stripe segment">
      <div class="ui center aligned list">
      <h3>Jak se zaměstnat ?</p>
        <p>Zaměstnas se už nemusíte, na našem serveru máme vlastní plugin na práce.
        Který funguje na lehkém principu, připoj se zaregistruj a hrej těž, Jednoduché ne ?
        Dále se dozvýte více informací k pracím a jejich výdělku, Všichni hráči na levelu 30 dostávají méně peněž o 50%.</p>
      <h3>Seznam prací a jejich výdělky !</h3>
        <li>Práce 1. Zahrnuje bloky (GRASS_BLOCk, DIRT, SAND, RED_SAND, STONE, DIORITE, ANDESITE, GRAVEL, GRANITE, A všechny terracoty) - 450 money za jeden blok, 30 level -> 225 money</li>
        <li>Práce 2. Zahrnuje bloky (Všechna Dřeva, STONE_BRICKS, MOSSY_COBLLE, MOSSY_STONE) - 500 za jeden block, 30 level -> 250 money</li>
        <li>Práce 3. Zahrnuje Bloky (Všechny Ore + Spawner) - 750 money za jeden vykopaný block, 30 level -> 375 money.</li>
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
