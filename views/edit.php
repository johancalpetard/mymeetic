<?php
include '../model/user_info.php';
include '../views/header.php';

session_start();

?>
  

  
  
  <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<section class="vh-100" style="background-color: #1abc9c;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="background-color : #eee;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> Edit</p>
                
                <form method="post" action="http://localhost:8000/model/editModel.php" class="mx-1 mx-md-4">


                    
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                   
                    <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Nom</label>
                      <input name="nom" type="text" id="form3Example1c" class="form-control" value='<?php echo $_SESSION["user_log"]->getName()?>' required />
                      
                    </div>
                  </div>
                  
                      <input name="id" type="hidden" id="form3Example1c" class="form-control" value='<?php echo $_SESSION["user_log"]->getId()?>' required />
                      
                   
                  


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c"> Prenom</label>
                      <input name="prenom" type="text" id="form3Example1c" class="form-control" value='<?php echo $_SESSION["user_log"]->getFirstname()?>'required />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Your Email</label>
                      <input name ="email" type="email" id="form3Example3c" class="form-control" value='<?php echo $_SESSION["user_log"]->getEmail()?>'required />
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Date de naissance</label>
                      <input name="date" type="date" id="form3Example3c" class="form-control" value='<?php echo $_SESSION["user_log"]->getDate()?>' required />
                      
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c"> Genre</label>
                      <input name="genre" type="text" id="form3Example1c" class="form-control" value='<?php echo $_SESSION["user_log"]->getGenre()?>' required />
                     
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example1c"> Ville</label>
                      <input name="ville" type="text" id="form3Example1c" class="form-control" value='<?php echo $_SESSION["user_log"]->getLocation()?>' required />
                      
                    </div>
                  </div>


                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4c">Password</label>
                      <input name ="password"type="password" id="form3Example4c" class="form-control" required />
                      
                    </div>
                  </div>

                 

                  

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button name="editbtn" type="submit" class="btn btn-primary btn-lg">Modifier</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>