<html>
<head>
    <title>Halaman Registrasi</title>
        <style>
            label {
                display : block;
            }
        </style>
</head>
<body>
    <h1>Halaman Registrasi</h1>

    <form action="<?php echo base_url()."index.php/login/daftar"; ?>" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <button type="submit" name="daftar">Daftar</button>
        </ul>
    </form>
</body>
</html>