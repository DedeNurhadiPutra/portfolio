<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <title><?= $title ?></title>
</head>

<body id="home">
    <?= $this->include('layout/navbar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        // 1. tangkap element dengan class/id navbar
        const navbar = document.querySelector("#navbar");

        // 2. jika element dengan class/id navbar diklik
        navbar.addEventListener('click', function(e) {
            // 3. maka ambil element apa yang diklik oleh user
            const targetNavbar = e.target;

            // 4. lalu cek, jika element itu adalah link dengan class nav-link
            if (targetNavbar.classList.contains('nav-link')) {

                // 5. maka ambil menu link yang aktif
                const navbarLinkActive = document.querySelector("ul#navbar li a.active");

                // 6. lalu cek, Jika menu link active ada dan menu yang di klik user adalah menu yang tidak sama dengan menu yang aktif, (cara cek-nya yaitu dengan membandingkan value attribute href-nya)
                if (navbarLinkActive !== null && targetNavbar.getAttribute('href') !== navbarLinkActive.getAttribute('href')) {

                    // 7. maka hapus class active pada menu yang sedang aktif
                    navbarLinkActive.classList.remove('active');
                }

                // 8. terakhir tambahkan class active pada menu yang di klik oleh user
                targetNavbar.classList.add('active');
            }
        });
    </script>
</body>

<?= $this->include('layout/footer'); ?>

</html>