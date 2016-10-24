<?php
use yii\db\Command;

/* @var $this yii\web\View */

$this->title = 'Blog de Noticias';
$this->params['breadcrumbs'][] = $this->title;
$posts = Yii::$app->db->createCommand('SELECT tituloNoticia, contenidoNoticia FROM blognoticia WHERE estado=\'1\'')->queryAll();
$longitud = count($posts);
?>

<div class="blog-index">

    <h1>Blog</h1><br>

    <div class="body-content">
	
        <div class="row">
		<?php for($i=0; $i<$longitud; $i++)
		{
			$fila = $posts[$i];
			$titulo =$fila["tituloNoticia"];
			$contenido =$fila["contenidoNoticia"];
		?>
		<div class="col-lg-4">
                <div class="thumbnail">
				<img class="img-rounded" src="http://localhost/basic/web/images/Testing.jpg" alt="Testing">
					<div class="caption">
					<h2><?php echo $titulo?></h2>
					<p><?php echo $contenido?></p>
				</div>
			</div>       
            </div>
		<?php } ?>
        </div>
    </div>
</div>
