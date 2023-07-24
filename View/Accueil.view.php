<?php ob_start();

?>
<div class="container d-flex justify-content-between">
<button type="button" class="btn btn-outline-success">Sciences Naturelles</button>
<button type="button" class="btn btn-outline-warning">Mathematiques</button>
<button type="button" class="btn btn-outline-danger">Physique</button>
</div>
<div class="container d-flex justify-content-between">
    <div class="row">
            <div class="card text-white bg-success mb-3 " style="max-width: 20rem;margin: 10px 10px 10px 13px;">
            <div class="card-body">
                <h4 class="card-title ">Sciences Naturelles</h4>
                <p class="card-text d-flex justify-content-center">
                    Découvre le monde fascinant des sciences naturelles ,explore les merveilles de la vie, de la biodiversité et de l'univers qui t'entoure. 
                    En apprenant les sciences naturelles, tu comprendras mieux notre planète,
                     les êtres vivants et les phénomènes qui façonnent notre environnement</p>
            </div>
            </div>
            </div>
            <div class="card text-white bg-warning mb-3 d-flex justify-content-center " style="max-width: 20rem;margin: 10px 10px 10px 189px;">
            <div class="card-body">
                <h4 class="card-title d-flex justify-content-center">Mathematiques</h4>
                <p class="card-text d-flex justify-content-center">
                Cette discipline explore les structures,les modèles et les relations abstraites. 
                Les mathématiques sont un langage universel qui permet de résoudre des problèmes, 
                de prendre des décisions éclairées et de comprendre le monde qui nous entoure.
                tu développeras des compétences logiques, 
                analytiques et de résolution de problèmes
                
                </p>
            </div>
            </div>
            <div class="card text-white bg-danger mb-3 " style="max-width: 20rem;margin: 10px 10px 10px 99px;">
            <div class="card-body">
                <h4 class="card-title d-flex justify-content-center">Physique</h4>
                <p class="card-text d-flex justify-content-end text-right">
                    La physique est une discipline passionnante qui explore les lois fondamentales de l'univers, 
                    de la plus petite particule aux vastes étendues de l'espace. En apprenant la physique, tu découvriras les principes qui régissent le mouvement,
                    l'énergie, la lumière, l'électricité et bien d'autres phénomènes essentiels à notre compréhension du monde.
                </p>

            </div>
            </div>

</div>
</div>
<?php
$content = ob_get_clean();
$titre="Les livres de sciences,representent la connaissance ";
require "Template.php"
?>