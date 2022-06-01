<?php
// recuperer le maladie recuperer avec id et afficher dans form donc id dans input type hidden dans la page home pour une fois nkiki 3la update ola delete imchi nafs id li fe input hidden ghadi imchi lupdate ghadi recuperih o nsifto lcontroller li ghadi isifto lmodel pour recuperer le maladie o itzad fe update 1erement go to model et ajouter fonction update
if (isset($_POST['id'])) { //pour add et update

    $exitMalade = new MaladeController(); //exit ya3ni wach kayn ola la
    // cree objt mn class maladecontroller 
    $malade = $exitMalade->getOneMalade(); // recuperer les malades
}else {
    Redirect::to('home'); 
}
if (isset($_POST['submit'])) {
    $exitMalade = new MaladeController();
    $malade =$exitMalade->updateMalade(); 
}
?>

<h1 class="text-center my-3"><span style="color:#0c96f1">'</span>Update Patients
    <span style="color:#0c96f1">'</span>
</h1>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="Name" value="<?php echo $malade->name; ?>">
                            <input type="hidden" name="id" value="<?php echo $malade->id;?>"> 

                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Email" value="<?php echo $malade->email; ?>">
                        </div> 
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" id="" class="form-control" placeholder="Phone" value="<?php echo $malade->phone; ?>">
                        </div>
                        <div class="form-group">
                            <label for="maladie">Type de Maladie</label>
                            <input type="text" name="type" id="" class="form-control" placeholder="Type" value="<?php echo $malade->type; ?>">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="" class="form-control" placeholder="Date" value="<?php echo $malade->date; ?>">
                        </div>
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-3" name="submit">Valider</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</div>