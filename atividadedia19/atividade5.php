<?php
class Teste{
    function Main(){
        $Assistente_Administrativo2 = new Assistente_Administrativo("Jovem", null, "AD789");
        echo "<br>Assistente Administrativo:<br>";
        $Assistente_Administrativo2->exibeDados();

        $Assistente_Tecnico2 = new Assistente_Tecnico("Carlos", null, "T456");
        echo "<br>Assistente Técnico:<br>";
        $Assistente_Tecnico2->exibeDados(); 

        $Cachorrinho = new Cachorro("Fluffy", "Poodle");
        echo "<br>Cachorrinho:<br>";
        $Cachorrinho->late();
        $Cachorrinho->caminha();

        $Gatinho = new Gato("Mimi", "Persa");
        echo "<br>Gatinho:<br>";
        $Gatinho->mia();
        $Gatinho->caminha();

        $Rica2 = new Rica("Ana", 35);
        echo "<br>Rica:<br>";
        $Rica2->exibeDados();

        $Pobre2 = new Pobre("Pedro", 28);
        echo "<br>Pobre:<br>";
        $Pobre2->exibeDados();

        $Miseravel2 = new Miseravel("João", 45);
        echo "<br>Miserável:<br>";
        $Miseravel2->exibeDados();  

    }
}

$Teste = new Teste();
$Teste->Main();
?>
