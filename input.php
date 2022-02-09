<!DOCTYPE html>
<html>

<head>
    <title>Input Jumlah Kamar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">Tambah Data Jumlah Kamar</div>
                <div class="card-body">
                    <form method="post" action="action_input.php">
                    <label for="tipe_kamar">Tipe Kamar</label><br/>
                    <select class="form-select form-select-mb-3" name="tipe_kamar">
                    <option selected>Pilih Tipe Kamar</option>
                    <option value="1">Superior</option>
                    <option value="2">Deluxe</option>
                    </select><br/>
                    <div class="form-group">
                        <label for="jumlah_kamar">Jumlah Kamar</label>
                        <input type="int" class="form-control" name="jumlah_kamar">
                    </div><br/>
                    <input type="submit" name = "submit" value="Submit" class='btn btn-primary stretched-link'/>
                </form>
            </div>
        </div>
    </div>
</body>

</html>