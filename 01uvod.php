<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>peter</p>
    <?php
        /*
        // Jednoriadkový komentár
        // Vytvorenie premennej a definovanie hodnoty
        $premenna = "text";
        $meno = "Jozef";
        
        Viacriadkový komentár
        Znak "." sa v PHP používa na spájanie stringov
        

        echo "<p>Ahoj, moje meno je " . $meno . "</p>";

        $vysledok = 4 + 6;
        echo $vysledok;

        if($vysledok == 10) {
            echo "<p>Vysledok je 10</p>";
        } else {
            echo "<p>Vysledok nie je 10</p>";
        }

        for($i = 0; $i < 6; $i++) 
            if($i == 5) {
                echo $i;
            } else {
            echo $i. ", ";

            // 1. cyk.: $i = 0
            // 2. cyk.: $i = 1
        }

        
        Vytvorte cyklus v ktorom vypíšete všetky čísla od 0 po náhodné číslo od 0 do 1000 pričom 
        - ak náhodné číslo bude párne, tak chceme chceme vypísať párne čísla od 0 po náhodné číslo
        - ak náhodné číslo bude nepárne, tak chceme vypístať všetky nepárne čísla od 0 náhodné číslo 

        NADSTAVBA resp. bonus :)
        Každé piate číslo mať náhodnú veľkosť a farbu.

        
        
        */
        
        $nahodne_cislo = random_int(0, 1000);
        $counter = 1;
        


        if($nahodne_cislo % 2 == 0){
            for($i = 0; $i <= $nahodne_cislo; $i+=2){
                $nahodnaVelkost = rand(10,50);
                $nahodnaFarba1 = rand(0,255);
                $nahodnaFarba2 = rand(0,255);
                $nahodnaFarba3 = rand(0,255);
                if($counter % 5 == 0){
                    echo "<span style='font-size: {$nahodnaVelkost}px; color: rgb($nahodnaFarba1, $nahodnaFarba2, $nahodnaFarba3);'>$i</span>" . ", ";
                }else{
                    echo $i. ", ";
                }
                $counter ++;
            }
        }
        else {
            for($i = 1; $i <= $nahodne_cislo; $i+=2){
                $nahodnaVelkost = rand(10,50);
                $nahodnaFarba1 = rand(0,255);
                $nahodnaFarba2 = rand(0,255);
                $nahodnaFarba3 = rand(0,255);
                if($counter % 5 == 0){
                    echo "<span style='font-size: {$nahodnaVelkost}px; color: rgb($nahodnaFarba1, $nahodnaFarba2, $nahodnaFarba3);'>$i</span>" . ", ";
                }else{
                    echo $i. ", ";
                }
                $counter ++;
            }t
        }


    ?>

</body>
</html>