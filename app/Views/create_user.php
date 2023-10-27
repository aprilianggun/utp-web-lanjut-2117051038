<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url("asssets/css/utama.css") ?>">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="<?= base_url('/user/store') ?>" method="POST">
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Nama</label>
                <input type="text" name="nama" id="disabledTextInput" class="form-control" placeholder="Masukan Nama Lengkap">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">NPM</label>
                <input type="text" name="npm" id="disabledTextInput" class="form-control" placeholder="Masukan NPM Yang Valid">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Kelas</label>
                <input type="text" name="kelas" id="disabledTextInput" class="form-control" placeholder="Masukan Kelas">
            </div>
            <!-- <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                    <option>Disabled select</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>