<?php
    include_once("./modelos/animal.php");
?>

<div class="container">
    <div class="row d-flex flex-grid justify-content-center">
        <div class="col-md-8">
            <div class="card card-color">
                <div class="card-header text-white bg-primary text-center">
                    añadir una mascota
                </div>

                <div class="card-body">
                    <div class="container col-sm-6">
                        <form method="POST" action="index.php?controlador=animales&accion=controladorCrearanimal">
                           

                            <div class = "form-group">
                                <label for="inputnombre"> <strong> Nombre del animal </strong></label>
                                <input type="text" name="txtnombre" class="form-control" id="inputnombre" placeholder="Digite el Nombre del animal">
                            </div>

                            <div class = "form-group">
                                <label for="inputsexo"> <strong> Sexo </strong></label>
                                <input type="text" name="txtsexo" class="form-control" id="inputsexo" placeholder="Digite el sexo">
                            </div>

                            <div class = "form-group">
                                <label for="inputedad"> <strong> Edad </strong></label>
                                <input type="text" name="txtedad" class="form-control" id="inputedad" placeholder="Digite la edad">
                            </div>

                            <div class = "form-group">
                                <label for="inputespecie"> <strong> Especie del animal </strong></label>
                                <input type="text" name="txtespecie" class="form-control" id="inputespecie" placeholder="Digite la especie del animal">
                            </div>

                            <div class = "form-group">
                                <label for="inputhistorial_med"> <strong> Estado del animal </strong></label>
                                <input type="text" name="txthistorial" class="form-control" id="inputhistorial_med" placeholder="Digite el estado de su mascota">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary"> Añadir animal  </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
