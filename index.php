<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolgozat</title>
</head>
<body>
    <?php
        $sofor = array("Horváth Piroska", "Nagy Ágnes", "Szabó József", "Cserepes Lajos");
        $varos = array("Badapest", "Győr", "Nagykanizsa", "Siófok");
        $szamok = array();
        for ($i=0; $i < 4; $i++){
            $i = random_int(1, 200);
            $i.array_push($szamok);
        }

        echo 
        "<table>
            <tr>
                <th>Név</th>
                <th>Város neve</th>
                <th>Busz sorszáma</th>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
        </table>";
    ?>
</body>
</html>