<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" id="pagesheet"/>
	<link rel='icon' type='image/icon' href='img/favicon.png?2' />
	<link rel='shortcut icon' type='image/x-icon' href='img/favicon.png?2' />
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/fonts.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<link rel="stylesheet" type="text/css" href="css/media.css"/>
</head>
<body>

<script src="js/jquery.2.2.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<?
    if ($_GET["page"] == "" || !isset($_GET["page"])){
        $index_page_class = "index-page";
    }else{
        $index_page_class = "index-page";
    }
?>


<div class="general_wrapper <? echo $index_page_class;?>">

    <? include ("part/header.php");?>



    <?

    switch ($_GET["page"]) {
        case "catalog": include ("part/catalog.php");
            break;
        case "contact": include ("part/contact.php");
            break;
        default:  include ("part/index.php");
    }

    ?>


    <? include ("part/footer.php");?>
</div>

</body>
</html>