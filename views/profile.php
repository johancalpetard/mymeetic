<style>body{background: #1abc9c;}</style>
<div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
    <div class="card p-4">
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> Profile de @<?php echo $_SESSION["user_log"]->getName()?></p>
        <div class=" image d-flex flex-column justify-content-center align-items-center"> <button class="btn btn-secondary"> <img src="https://i.imgur.com/wvxPV9S.png" height="100" width="100" /></button><span class="name mt-3"><b>Nom :</b> <?php echo $_SESSION["user_log"]->getName();?></span> <span class="idd"><b>Pseudo : @</b><?php echo $_SESSION["user_log"]->getFirstname();?></span>
            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1"><b>Genre :</b><?php echo $_SESSION["user_log"]->getGenre();?></span> <span><i class="fa fa-copy"></i></span> </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number"><b>Ville :</b><span class="follow"><?php echo $_SESSION["user_log"]->getLocation();?></span></span> </div>

            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number"><b>Email : </b><span class="follow"><?php echo $_SESSION["user_log"]->getEmail();?></span></span> </div>
            <div class="d-flex flex-row justify-content-center align-items-center mt-3"> <span class="number"><b>Date de naissance : </b><span class="follow"><?php echo $_SESSION["user_log"]->getDate();?></span></span> </div>
            <div class=" d-flex mt-2"> <button class="btn1 btn-dark"><a href="views/edit.php">Edit Profile</button></a></div>
            
            <div class="gap-3 mt-3 icons d-flex flex-row justify-content-center align-items-center"> <span><i class="fa fa-twitter"></i></span> <span><i class="fa fa-facebook-f"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
           
            <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c"></label>
                      <input name="id" type="hidden" id="form3Example1c" class="form-control" value='<?php echo $_SESSION["user_log"]->getId()?>'></input>
                      
                    </div>
                  </div>
        </div>
    </div>
</div>