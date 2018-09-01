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
    <h1 class="ui header">Vlastní Recepty Návod</h1>
    <div class="ui vertical stripe segment">
    <div class="ui center aligned list">
      <h3>Jak si vyrobit itemy které nejdou vyrobit ?</p>
        <p>Aktuálně náš server nabízí své vlastní recepty.
          Které nikde na jiném serveru nenajdete.
          U nás na serveru si můžete vyrobit i zlaté enchantované jablko,
          nebo i sedlo které se dá pouze nalést.</p>
      <h3>Seznam Receptu</h3>
        <b>Enchantované Jablko Recept</b>
        <img class="ui centered medium image" src="/assets/img/recepty/enchantovane_jablko.png">
        <b>Sedlo na koně</b>
        <img class="ui centered medium image" src="/assets/img/recepty/sedlo.png">
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
