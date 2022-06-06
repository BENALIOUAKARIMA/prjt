<?php
if (isset($_POST['submit'])) { //pour add
     
$newMalade = new PaymentController();
// cree objt mn class maladecontroller 
$newMalade->addPay(); // recuperer les malades
} 
?>

<h1 class="text-center my-3"><span style="color:#0c96f1">'</span>Payment Of Patient<span style="color:#0c96f1">'</span></h1>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body bg-light">
                    <a href="<?php echo BASE_URL;?>" class="btn btn-sm btn-secondary mr-2 mb-2">
                    <i class="fas fa-home"></i>
                </a>
                <form  method="POST">
                <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="" class="form-control" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="" class="form-control" placeholder="Email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="" class="form-control" placeholder="Phone" required>
    </div>
    <div class="form-group">
        <label for="montant">Montant</label>
        <input type="number" name="montant" id="" class="form-control" placeholder="montant" required>
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="" class="form-control" placeholder="Date" required>
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





