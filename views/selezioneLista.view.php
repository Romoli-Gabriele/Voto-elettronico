<?php require "partials/head.php" ?>
<br>
<h1 class="text-center">Benvenuti nel nuovo Sistema Elettorale Elettronico</h1>
<div class="card position-absolute top-50 start-50 translate-middle" style="width: 60rem;">
        <div class="card-body bg-dark rounded-3">
                <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item bg-secondary bg-gradient ">
                                <p>
                                        Attraverso questo innovativo sistema è possibile indicare la propria preferenza di voto scegliendo uno dei candidati proposti da un menu di scorrimento.
                                        La definitiva conferma della della scelta operata equivale alla consegna della tradizionale scheda elettoraleal presidente del seggio: presti pertanto molta attenzione alle operazioni che sarà chiamato a svolgere per giungere alla compilazione della Sua scheda di voto
                                        e alla conferma della Sua effettiva scelta.
                                </p>
                        </li>
                        <li class="list-group-item bg-secondary bg-gradient">
                                <h5 class="card-title">L'operazione di voto si svolge in tre fasi (corrispondenti a 3 diverse pagine)</h5>
                                <br>
                                <ul>
                                        <li> selezione della lista elettorale da una casella combinata</li>
                                        <li> selezione del candidato appartenente alla suddetta lista</li>
                                        <li> conferma del voto o ritorno alla prima fase</li>
                                </ul>
                        </li>
                        <li class="list-group-item bg-dark d-grid gap-2 col-6 mx-auto">
                                <form method="GET" action="selezioneCandidato">
                                        <select class="form-select" aria-label="Default select example">
                                                <?php 
                                                foreach($liste as $lista)
                                                echo"<option>{$lista->nome}</option>"; 
                                                ?>
                                        </select>
                                </form>
                        </li>
                </ul>
        </div>
</div>

<?php require "partials/footer.php"; ?>