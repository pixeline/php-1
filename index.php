 <!DOCTYPE html>
<html lang="fr">
	<head>

		<title>La fusée de Daddy</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="_styles/reset.css"/>
		<link rel="stylesheet" href="_styles/styles.css"/>
		

	</head>

	<body>
        
        <main>
           
           <div class="left">
               
               <h1>Daddy, prête moi ta fusée !</h1>
               
               <p>Essaye de convaincre ton Daddy de te prêter sa fusée Porsche.</p>
			
                <form method="GET">

                    <fieldset>

                        <legend>Je paierai quelqu'un pour ranger ma chambre en rentrant</legend>

                            <input type="radio" id="q1o" name="q1" value="true" checked <?php if( $_GET['q1']=='true'){ echo 'checked="checked"';} ?>  required>
                            <label for="q1o" class="oui">Oui</label>

                            <input type="radio" id="q1n" name="q1" value="false" <?php if( $_GET['q1']=='false'){ echo 'checked="checked"';} ?> required >
                            <label for="q1n" class="non">Non</label>

                    </fieldset>

                    <fieldset>

                        <legend>Je boirai du champagne à volonté sur Neptune</legend>

                            <input type="radio" id="q2o" name="q2" value="true" checked <?php if( $_GET['q2']=='true'){ echo 'checked="checked"';} ?> required>
                            <label for="q2o" class="oui">Oui</label>

                            <input type="radio" id="q2n" name="q2" value="false" <?php if( $_GET['q2']=='false'){ echo 'checked="checked"';} ?> required>
                            <label for="q2n" class="non">Non</label>

                    </fieldset>

                    <fieldset>

                        <legend>J'irai faire la bise à Papy sur Mars (et il me donnera un petit billet)</legend>

                            <input type="radio" id="q3o" name="q3" value="true" checked <?php if( $_GET['q3']=='true'){ echo 'checked="checked"';} ?> required>
                            <label for="q3o" class="oui">Oui</label>

                            <input type="radio" id="q3n" name="q3" value="false" <?php if( $_GET['q3']=='false'){ echo 'checked="checked"';} ?> required>
                            <label for="q3n" class="non">Non</label>

                    </fieldset>

                    <fieldset>

                        <legend>J'irais faire le plein</legend>

                            <input type="radio" id="q4o" name="q4" value="true" checked <?php if( $_GET['q4']=='true'){ echo 'checked="checked"';} ?> required>
                            <label for="q4o" class="oui">Oui</label>

                            <input type="radio" id="q4n" name="q4" value="false" <?php if( $_GET['q4']=='false'){ echo 'checked="checked"';} ?> required>
                            <label for="q4n" class="non">Non</label>

                    </fieldset>

                    <fieldset>

                        <legend>Je l'utiliserai pour aller acheter de l'uranium sur Mercure</legend>

                            <input type="radio" id="q5o" name="q5" value="true" checked <?php if( $_GET['q5']=='true'){ echo 'checked="checked"';} ?> required>
                            <label for="q5o" class="oui">Oui</label>

                            <input type="radio" id="q5n" name="q5" value="false" <?php if( $_GET['q5']=='false'){ echo 'checked="checked"';} ?> required>
                            <label for="q5n" class="non">Non</label>

                    </fieldset>

                    <fieldset>

                        <legend>Je volerai à max 30km/s</legend>

                            <input type="radio" id="q6o" name="q6" value="true" checked <?php if( $_GET['q6']=='true'){ echo 'checked="checked"';} ?> required>
                            <label for="q6o" class="oui">Oui</label>

                            <input type="radio" id="q6n" name="q6" value="false" <?php if( $_GET['q6']=='false'){ echo 'checked="checked"';} ?> required>
                            <label for="q6n" class="non">Non</label>

                    </fieldset>

                    <input type="submit" name="submit" value="La réponse de Daddy" class="submit">

                </form>
           
               
           </div>
            
            
           <div class="right">
               
               <?php 

                    if(isset($_GET['submit'])){

                        // Transforme la value en booleenne
                        function boolean($argument){ return $argument = $argument == 'true' ? true : false;};

                        $q1 = boolean($_GET['q1']);
                        $q2 = boolean($_GET['q2']);
                        $q3 = boolean($_GET['q3']);
                        $q4 = boolean($_GET['q4']);
                        $q5 = boolean($_GET['q5']);
                        $q6 = boolean($_GET['q6']);


                        if ($q1 == true && $q2 == false && $q3 == true && $q4 == true && $q5 == false && $q6 == true){
                            echo "<div class='reponse'><img src='_images/porsche.svg'/><p>&quot;Prend la Porsche mon fils&quot;</p></div>";
                         } else {
                            if ($q2 == true || $qu5 == true){
                                echo "<div class='reponse'><img id='bus' src='_images/bus.svg'/><p>&quot;Prend le bus cher enfant&quot;<p></div>";
                            }else{
                                if ($q1 == true && $q2 == false && $q3 == true && $q4 == false && $q5 == false && $q6 == true){
                                    echo "<div class='reponse'><img src='_images/porsche.svg'/><p>&quot;Prend la Porsche mon fils, mais tu iras faire le plein&quot;</p></div>";
                                } else {
                                    echo "<div class='reponse'><img src='_images/bmw.svg'/><p>&quot;D'accord, mais tu prends la BMW et pas la Porsche&quot;<p></div>";
                                }
                                
                            }
                        }
                    }

                ?>
               
           </div>
            
            
        </main>
        
        <footer>
            <p>Réalisé par Victor Grégoire - <a href="">Github</a></p>
        </footer>


        
	</body>
</html>
