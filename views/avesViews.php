<main>
    <div class="contenedor-select">
        <select name="animal" id="Animal" onchange="animals(this)">
            <option value="mamiferos">Mamiferos</option>
            <option value="aves" selected>Aves</option>
            <option value="reptiles">Reptiles</option>
            <option value="peces">Peces</option>
        </select>
    </div>
    <div class="container">
        <div class="container--card">
            <?php
            echo $torogos->Carta();
            echo $pin->Carta();
            echo $avestrus->Carta();
            
            ?>
        </div>
    </div>
</main>