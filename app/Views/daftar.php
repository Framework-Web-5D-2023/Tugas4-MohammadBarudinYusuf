<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="hero-image">

        <?= $this->include('header') ?>

        <div class="row hero-text">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mb-4 text-white">Formulir Pendaftaran Bootcamp</h2>
                <div id="messageContainer"></div>

                <form method="post" action="/save">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="npm" class="form-label text-white">Masukkan NPM</label>
                        <input type="number" class="form-control" id="nik" placeholder="NPM" name="npm"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="form-label text-white">Masukkan Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label for="prodi" class="form-label text-white">Masukkan Prodi</label>
                        <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS and dependencies -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </div>
</body>

</html>