<?php require "partials/head.php" ?>
<br>

<div class="card position-absolute top-50 start-50 translate-middle" style="width: 60rem;">
        <div class="card-body bg-dark rounded-3">
                <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item bg-secondary bg-gradient ">
                                <h1 class="text-center">Selezione della Lista</h1>
                        </li>
                        <li class="list-group-item bg-secondary bg-gradient">
                                <h5 class="card-title">Scelga la lista a cui assegnare il suo voto nell'elenco a comparsa qui sotto</h5>
                                <br>
                                <p>
                                        Dopo l'invio sarà proposto l'elenco dei candidati di quella lista
                                </p>
                        </li>
                        <li class="list-group-item bg-dark d-grid gap-2 col-6 mx-auto">
                                <br>
                                <form method="GET" action="selezioneCandidato">

                                        <div class="input-group">
                                                <select class="form-select" name="id_lista">
                                                        <?php
                                                        foreach ($liste as $lista)
                                                                echo "<option value='{$lista->id}'>{$lista->nome}</option>";
                                                        ?>
                                                </select>
                                                <button type="submit" class="btn btn-outline-primary" type="button">Invia</button>
                                        </div>
                                </form>
                        </li>
                </ul>
        </div>
</div>

<?php require "partials/footer.php"; ?>