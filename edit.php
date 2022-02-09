<?php
require "connect.php";

$tipe_kamar = $_GET['TipeKamar'];

$sql = "select * from jumlah_kamar where TipeKamar = '$tipe_kamar' "; 
$result = $conn->query($sql); 


if ($result->num_rows > 0) {

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Jumlah Kamar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Edit Data Jumlah Kamar</div>
                <div class="card-body">
                    <form method="post" action="action_input.php">
                    <?php
                            while ($row = $result->fetch_assoc()) {
                    ?>
                    <label for="tipe_kamar">Tipe Kamar</label><br/>
                    <select class="form-select form-select-mb-3" name="tipe_kamar" >
                    <option value="<?php echo $row ['TipeKamar']; ?>"><?php echo $row ['TipeKamar']; ?></option>
                    <option value="Superior">Superior</option>
                    <option value="Deluxe">Deluxe</option>
                    </select>
                    <div class="form-group">
                        <label for="jumlah_kamar">Jumlah Kamar</label>
                        <input type="int" class="form-control" name="jumlah_kamar" value="<?php echo $row['JumlahKamar'] ?>">
                    </div><br/>
                    <input type="submit" name = "submit" value="Simpan Perubahan" class='btn btn-primary stretched-link'/>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
}
    }else{
        echo "Maaf, data tidak ada";
    }
        $conn->close();
?>