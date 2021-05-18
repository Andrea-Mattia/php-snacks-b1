<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>
<body>
    
    <header>
        <h1>PHP Snacks</h1>
    </header>

    <main>
        <section>
            <h2>Snack 1</h2>

            <?php
            /**
             * PHP Snack 1:
             * Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario.
             * Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
             * Stampiamo a schermo tutte le partite con questo schema: Olimpia Milano - Cantù | 55-60
             */

            $matches = [
                [
                    'team_casa' => 'Olimpia Milano',
                    'team_ospite' => 'Cantù',
                    'pt_casa' => 55,
                    'pt_ospite' => 60
                ],
                [
                    'team_casa' => 'Bari',
                    'team_ospite' => 'Foggia',
                    'pt_casa' => 12,
                    'pt_ospite' => 16
                ],
                [
                    'team_casa' => 'Verona',
                    'team_ospite' => 'Bingo Cowboys',
                    'pt_casa' => 112,
                    'pt_ospite' => 30
                ],
                [
                    'team_casa' => 'Frascati Junior',
                    'team_ospite' => 'CIS Garbatella',
                    'pt_casa' => 44,
                    'pt_ospite' => 48
                ],
                [
                    'team_casa' => 'Forlì',
                    'team_ospite' => 'Sgurgola',
                    'pt_casa' => 118,
                    'pt_ospite' => 118
                ],
            ];
            ?>

            <dl>
                <?php for ($i=0; $i < count($matches); $i++) : ?>
                    <dt><strong>Partita <?php echo $i + 1; ?></strong></dt>
                    <dd>
                        <?php echo $matches[$i]['team_casa']?> - <?php echo $matches[$i]['team_ospite']?>
                         | 
                        <?php echo $matches[$i]['pt_casa']?>-<?php echo $matches[$i]['pt_ospite']?>
                    </dd>
                <?php endfor; ?>
            </dl>

        </section>

        <section>
            <h2>Snack 2</h2>

            <?php
            /**
             * PHP Snack 2:
             * Passare come parametri GET (query string) name, mail e age
             * verificare (cercando i metodi che non conosciamo nella documentazione) che:
             * 1. name sia più lungo di 3 caratteri
             * 2. che mail contenga un punto e una chiocciola
             * 3. che age sia un numero.
             * Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
             */

            
            ?>

        </section>
    </main>

</body>
</html>