<!-- views/index.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

</head>


<body style="color: grey; background-color: #545351;">
    <?= $this->include('header') ?>
    <div>
        <div class="container mt-5" style="margin-top: 80px;">
            <!-- Tambahkan style="margin-top: 80px;" di sini -->
            <br><br>
            <?php if (session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Anda berhasil mendaftar</strong> infromasi selanjutnya akan diberitahukan melalui
                    email
                </div>
            <?php endif; ?>

        </div>
        <h1 class="text-center text-white">Data Peserta Bootcamp</h1><br>
        <table class="table text-white">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Program Studi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs): ?>
                    <tr>
                        <td>
                            <?= $mhs['nama'] ?>
                        </td>
                        <td>
                            <?= $mhs['npm'] ?>
                        </td>
                        <td>
                            <?= $mhs['prodi'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Tambahkan link Bootstrap JS di sini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>