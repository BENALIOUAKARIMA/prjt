<?php
// recuperer le maladie recuperer avec id et afficher dans form donc id dans input type hidden dans la page home pour une fois nkiki 3la update ola delete imchi nafs id li fe input hidden ghadi imchi lupdate ghadi recuperih o nsifto lcontroller li ghadi isifto lmodel pour recuperer le maladie o itzad fe update 1erement go to model et ajouter fonction update
if (isset($_POST['id'])) { //pour add et update

    $exitMalade = new ContactController(); //exit ya3ni wach kayn ola la
    // cree objt mn class maladecontroller 
    $exitMalade->deleteMalade(); // recuperer les malades
}

?>  