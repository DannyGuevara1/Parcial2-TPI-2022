
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
            echo $perro->Carta();
            echo $gato->Carta();
            echo $elefante->Carta();
            ?>
        </div>
    </div>
</main>