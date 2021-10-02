<!DOCTYPE html>
<html lang="en">

<style>
#warkop {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

#warkop td,
#warkop th {
    border: 1px solid #ddd;
    padding: 8px;
}

#warkop tr:nth-child(even) {
    background-color: #f2f2f2;
}

#warkop tr:hover {
    background-color: #ddd;
}

#warkop th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #7942ae;
    color: white;
}

button {
    margin-top: 10px;
    background-color: #7942ae;
    border: none;
    width: 70px;
    height: 30px;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #7942ee;
}

p {
    border: 1px solid black;
}

h3 {
    margin-top: -5px;
}

div {
    box-shadow: 5px 4px 12px 0px rgba(0, 0, 0, 0.6);
    color: white;
    display: inline-block;
    font-family: Arial, Helvetica, sans-serif;
    border: 1px solid black;
    margin: 5px 5px auto;
    padding: 10px 10px 10px 10px;
    border-radius: 5px;
    border-color: #7942ee;
    background-color: #7942ea;
}
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warkop</title>
</head>
<?php
$data_warkop = array(
    1 => ["makanan" => "Nasi & Ikan Nila Bakar", "minuman" => "Es Teh"],
    2 => ["makanan" => "Nasi & Ikan Lele Bakar", "minuman" => "Es Jeruk"],
    3 => ["makanan" => "Nasi & Ayam Goreng", "minuman" => "Jeruk Panas"],
    4 => ["makanan" => "Nasi & Bebek Goreng", "minuman" => "Teh Panas"]
    // "makanan" => "Nasi & Ikan Nila Bakar", "Nasi & Ikan Lele Bakar", "Nasi & Ayam Goreng", "Nasi & Bebek Goreng",
    // "minuman" => "Es Teh", "Es Jeruk", "Jeruk Panas", "Teh Panas"
    // [1=>["makanan"=>"Nasi & Ikan Nila Baka"],
    // 2=>["makanan"=>"Nasi & Ikan Lele Bakar"],
    // 3=>["makanan"=> "Nasi & Ayam Goreng"],
    // 4=>["makanan"=>"Nasi & Bebek Goreng"]],
    // [1=>["minuman"=>"Es Teh"],
    // 2=>["minuman"=>"Es Jeruk"],
    // 3=>["minuman"=>"Jeruk Panas"],
    // 4=>["minuman"=>"Teh Panas"]]

); ?>


<body>
    <form action="" method="POST">
        <table id="warkop">
            <tr>
                <th>Makanan</th>
                <th>Minuman</th>
            </tr>
            <?php $i = 1;
            foreach ($data_warkop as $key => $value) :  ?>
            <tr>
                <td><input type="checkbox" name="warkop[]"
                        value="<?= $value["makanan"]; ?>"><?= $key . ". "; ?><?= $value["makanan"]; ?>
                </td>

                <td><input type="checkbox" name="warkop[]"
                        value="<?= $value["minuman"]; ?>"><?= $key  . ". "; ?><?= $value["minuman"]; ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>

        <button type="submit" value="submit" name="submit">PILIH</button>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['warkop'])) {

            $warkop = $_POST['warkop'];
            echo "<br>";
            echo "<div>";
            echo "<h3>Pesanan Anda :</h3>";
            for ($i = 0; $i < count($warkop); $i++) {
                echo $i + 1 . ". ";
                echo $warkop[$i] . "<br>";
            }
            echo "</div>";
        }
    }; ?>
</body>

</html>