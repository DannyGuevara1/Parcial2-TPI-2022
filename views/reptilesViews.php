<main>
    <div class="contenedor-select">
        <select name="animal" id="Animal" onchange="animals(this)">
            <option value="mamiferos">Mamiferos</option>
            <option value="aves">Aves</option>
            <option value="reptiles" selected>Reptiles</option>
            <option value="peces">Peces</option>
        </select>
    </div>
    <div class="container">
        <div class="container--card">
            <?php
            echo $ana->Carta();
            echo $rana->Carta();
            echo $tor->Carta();
            ?>
        </div>
    </div>
</main>