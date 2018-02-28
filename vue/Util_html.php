<?php


class Util_html{


	public static function headerGen(){

		return "";
	}

	public static function navbarGen(){
		return '<!--nav permet de faire la barre de navigation du haut-->
<!--navbar-fixed-top et sticky permet de la garder en haut lors du scroll-->
<nav class="navbar navbar-inverse navbar-fixed-top " style="background:black">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <p class=\"navbar-brand\" href=\"#\"><a href=\"index.html\"><img src="images/logo.png" style=\"max-width:250px; margin-left: 40px; margin-top: -51px;\"/></a></p>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family:"lobster"; font-size: 17px;" >
      <ul class="nav navbar-nav">
		<li><a href="index.php?lesNouveaux=OK">Les Nouveaux</a></li>
        <li><a href="index.php?lesTops=OK">Les Tops</a></li>
        <li><a href="index.php?lesFlops=OK">Les Flops</a></li>
        <li><a href="index.php?Randoms=OK">Randoms</a></li>
        <li><a href="index.php?Video=OK">Vidéos</a></li>
        <li><a href="index.php?soummettre=OK">Soumettre</a></li>
      </ul>

		<!-- Autocomplete pour la recherche du plutoto -->
        <div class="nav navbar-nav">
	    	<form method="POST">
		   		<input type="text" id="input_plutoto" autocomplete="off" onkeyup="autocomplet_plutoto()" value="" ></input><button class="btn btn-default btn-sm" type="button" onClick="go_to_plutoto()">Rechercher ! <span class="glyphicon glyphicon-search"></span></button>
				<ul class="ul_autocomplet_item" id="ul_autocomplet_plutoto"></ul>
			</form>
    	</div>
    	<!-- /.autocomplete -->



      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">A propos</a></li>
          <li><a href="#">Suggestion</a></li>
          <li><a href="index.php?moderation=OK">Moderation</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>';
	}

	public static function navbarGenAdmin(){
		return '<!--nav permet de faire la barre de navigation du haut-->
<!--navbar-fixed-top et sticky permet de la garder en haut lors du scroll-->
<nav class="navbar navbar-inverse navbar-fixed-top " style="background:black">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <p class=\"navbar-brand\" href=\"#\"><a href=\"index.html\"><img src="images/logo.png" style=\"max-width:250px; margin-left: 40px; margin-top: -51px;\"/></a></p>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="font-family:"lobster"; font-size: 17px;" >
      <ul class="nav navbar-nav">

        <li><a href="index.php?param=OK">Paramètres</a></li>
        <li><a href="index.php?valid=OK">Validation</a></li>
        <li><a href="index.php?deconnex=OK">Déconnexion</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">A propos</a></li>
          <li><a href="#">Suggestion</a></li>
          <li><a href="#">Moderation</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>';
	}

	public static function bottomGen(){
		echo '</body>';
		echo '</html>';
	}	

	public static function div_title($title){
		return '<div class="jumbotron" style="background:#B6C0B6; margin-top : 70px; margin-bottom: 3px; font-family: lobster; font-style: italic;">
		<div class="text-center pagination-centered">
		<div class="page-header">
		  <h1>Plutoto<small>'.$title.'</small></h1>
		</div>
		</div>
		</div>';
	}

	public static function div_plutoto($plutoto){
		echo '<div class="jumbotron" style="background:#E6E6E6; ">
			<a href=#><div class="row">
				<div class="col-md-12" style="color: Black; text-align:left ">
					<p class="lead"><a href="#" title='.$plutoto->get_id().' class="jaime" >J&rsquo;aime</a></p>
				</div>
				<div class="col-md-8">
					<p class="lead">'.$plutoto->get_sentence().'<span class="glyphicon glyphicon-arrow-right"></span></p>
				</div>
				<div class="col-md-4">
					<p class="lead">'.$plutoto->get_name().'</p>
				</div>
				<a href=#>
					<div class="col-md-2">
					<span class="glyphicon glyphicon-chevron-up"></span>
					</div>
				</a>
				<a href=#>
				<div class="col-md-2">
					<span class="glyphicon glyphicon-chevron-down"></span>
				</div>
				</a>
					<a href="index.php?lesCommentaires=OK&id='.$plutoto->get_id().'">
				<div class="col-md-2">
						<span class="glyphicon glyphicon-comment"></span>
				</div>
					</a>

			</div></div></a>';
	}

	public static function div_commentaires($comments,$plutoto){
		echo '<div class="jumbotron" style="background:#E6E6E6; margin-top : 70px; margin-bottom: 3px; font-family: lobster; font-style: italic;">
			<div class="text-center pagination-centered">
				<div class="page-header">
<div class="jumbotron" style="background:#E6E6E6; ">
			<a href=#><div class="row">
				<div class="col-md-12" style="color: Black; text-align:left ">
					<p class="lead"><a href="#" title='.$plutoto->get_id().' class="jaime" >J&rsquo;aime</a></p>
				</div>
				<div class="col-md-8">
					<p class="lead">'.$plutoto->get_sentence().'<span class="glyphicon glyphicon-arrow-right"></span></p>
				</div>
				<div class="col-md-4">
					<p class="lead">'.$plutoto->get_name().'</p>
				</div>
				<a href=#>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-chevron-up"></span>
					</div>
				</a>
				<a href=#>
					<div class="col-md-2">
						<span class="glyphicon glyphicon-chevron-down"></span>
					</div>
				</a>
				<a href="index.php?lesCommentaires=OK&id='.$plutoto->get_id().'">
					<div class="col-md-2">
					<span class="glyphicon glyphicon-comment"></span>
					</div>
				</a>
			</div></div></a>
		  			<h1><small>Les commentaires</small></h1>
				</div>
			</div>
			<form action="#" method="GET">
				Votre nom : <input type="text" name="name" value=""/>
				</br>
				Votre commentaire : <input style="lenght:250px" type="text" name="comment" value=""/>
				</br>
				<input type="hidden" name="id" value='.$plutoto->get_id().'
				</br>
				<button type="submit" value ="">soumettre</button>
			</form></br>
			';
			if($comments != null){
				echo "<ul>";
      			foreach ($comments as $comment){
      			echo "<li>";
        		echo $comment["name"]." : ";
        		echo $comment["comment"];
        		echo "</li>";
      			}
      			echo "</ul>";
    		}
    		else{
      			echo "Toujours pas de commentaire !!! ajoutez le votre";
    		}
		echo '</div>';
	}

	public static function div_plutoto_admin($plutoto){
		echo '<div class="jumbotron" style="background:#E6E6E6; ">
			<a href=#><div class="row">
				<div class="col-md-12" style="color: Black; text-align:left ">
					<p class="lead"><a href="#" title='.$plutoto->get_id().' class="jaime" >J&rsquo;aime</a></p>
				</div>
				<div class="col-md-8">
					<p class="lead">'.$plutoto->get_sentence().'<span class="glyphicon glyphicon-arrow-right"></span></p>
				</div>
				<div class="col-md-4">
					<p class="lead">'.$plutoto->get_name().'</p>
				</div>
				<a href=#>
					<div class="col-md-2">
					<span class="glyphicon glyphicon-chevron-up"></span>
					</div>
				</a>
				<a href=#>
				<div class="col-md-2">
					<span class="glyphicon glyphicon-chevron-down"></span>
				</div>
				</a>
				<a href=#>
				<div class="col-md-2">
					<span class="glyphicon glyphicon-comment"></span>
				</div>
				</a>

			</div></div></a>';
	}

	public static function div_list(){
		return '<div style=" text-align:center; padding-top: 5px; padding-bottom: 0px; margin: 0px; padding: 0px; ">
			<ul class="pagination"   >
				<li>
				<a href="#" aria-label="Previous" >
					<span aria-hidden="true">&laquo;</span>
				</a>
				</li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
				<a href="#" aria-label="Next">
					<span aria-hidden="true">&raquo;</span>
				</a>
				</li>
			</ul>
		</div>';
	}

	

}
