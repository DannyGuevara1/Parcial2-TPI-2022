
<main>
    <div class="contenedor-select">
        <select name="animal" id="Animal" onchange="animals(this)">
            <option value="mamiferos" selected>Mamiferos</option>
            <option value="aves">Aves</option>
            <option value="reptiles">Reptiles</option>
            <option value="peces">Peces</option>
        </select>
    </div>
    <div class="container">
        <div class="container--card">
            <?php
            for ($i=0; $i <= 3 ; $i++) { 
                $randNum = mt_rand(0,$mamiferoSize-1);
                    echo $mamiferoArr[$randNum]->Carta(); 
            }
            ?>
        </div>
    </div>
</main>
