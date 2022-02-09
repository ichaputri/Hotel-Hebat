<title>Tabel Jumlah Kamar</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

require_once "connect.php"; 

$sql = "select * from jumlah_kamar"; 
$result = $conn->query($sql); 

if ($result->num_rows > 0) {

    

    echo '<h2 class="text-center"> Tabel Jumlah Kamar </h2> </br>';
    echo '<div class = "container-fluid">';
    echo "<a href='input.php' class='btn btn-success' stretched-link'>+Tambah Data</a>";
    echo '<br/> <br/>' ;
    echo '<table class="table table-success table-striped">';
    echo '<tr>';
    echo '<th scope="col">Tipe Kamar</th>';
    echo '<th scope="col">Jumlah Kamar</th>';
    echo '<th scope="col">Aksi</th>';
    
    

    while ($row = $result->fetch_assoc()) {

        echo '<tbody>';
        echo '<tr>';
        echo "<td>" . $row['TipeKamar'] . "</td>";
        echo "<td>" . $row['JumlahKamar'] . "</td>";
        
        ?>
        <td>
            <a href="edit.php?TipeKamar=<?php echo $row['TipeKamar'];?>">Edit </a>
        </td>

        <?php
        echo '</tr>';
        echo '</tbody>';
    }
    echo '</table>';
    echo '</div>';
} else {
    echo "0 results";
}

$conn->close();
