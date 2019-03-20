<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP*/
	if(3 > 5){
		echo "ciao";

	}elseif(10 > 9){
		echo "I love PHP" . "<br>";
	}else{
		echo "ciao ciao";
	}


/*Step 2: Make a forloop  that displays 10 numbers*/
	for($i = 0; $i <= 10; $i++){
		echo $i . "<br>";
	}

/*Step 3 : Make a switch Statement that test againts one condition with 5 cases*/

	$name = "Scarlett";

	switch($name){
		case "Carl":
			echo "hi";
			break;
		case "Color":
			echo "hi";
			break;
		case "Scarlett":
			echo "hi Scarlett!";
			break;
		case "Lett":
			echo "hi";
			break;
		case "Scarlett":
			echo "hi";
			break;
		default:
			echo "name";

	}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
