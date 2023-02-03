<?php
include 'DataEncryptionStandard.php';
?>

<!doctype html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Data Encryption Standard (DES) with PHP</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&family=Outfit&family=Roboto:wght@300&display=swap');

    body {
        /* font-family: "Open Sans", sans-serif; */
        /* font-family: 'Roboto', sans-serif; */
        font-family: 'Inter', sans-serif;
        color: #444444;
    }

    a {
        color: #006fbe;
        text-decoration: none;
    }

    a:hover {
        color: #008df1;
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        /* font-family: "Raleway", sans-serif; */
        font-family: 'Outfit', sans-serif;
        /* font-weight: 600; */
        color: rgb(24 28 49 / var(--tw-text-opacity));
    }

    #about h3 {
        font-weight: 700;
        font-family: Butler;
        padding: 0;
        margin: 0 0 0 0;
    }
</style>

<body>
    <div class="container mt-5 px-0">
        <h1 class="display-5 text-center"><strong>Data Encryption Standard (DES) using PHP</strong></h1>
        <!-- <h5 class="text-center mb-3" style="color: #6c757d;">(Kelompok 1)</h5> -->
        <!-- Button trigger modal -->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#exampleModal">
                Kelompok 1
            </button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Anggota Kelompok</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul type="square">
                            <li>19104410017 | Derry Jourdan Perdana</li>
                            <li>19104410012 | Firdaus Ramadhan</li>
                            <li>19104410023 | Farkhan Adfiansyah</li>
                            <li>19104410042 | Dino Esza Puji Utama</li>
                            <li>17104410002 | Adam Bachtiar</li>
                        </ul>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Encrypt DES algorithm</h3>
                    </div>
                    <div class="card-body">
                        <form method="post">
                            <div class="form-group mb-3">
                                <label for="message" class="form-label">Message</label>
                                <input type="text" class="form-control" id="message" name="message"
                                    value="<?php echo (isset($_POST['message']))? $_POST['message'] : ''; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="key" class="form-label">Key</label>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-auto mb-3">
                                    <input type="text" class="form-control" id="key" name="key"
                                        value="<?php echo (isset($_POST['key']))? $_POST['key'] : ''; ?>" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Encrypt</button>

                            <button type="reset" class="btn btn-danger">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">
                        <h3 class="card-title">Result</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        if(isset($_POST['message']) && isset($_POST['key'])) {
                        $message = $_POST['message'];
                        $key 	   = $_POST['key'];

                        $des  = new CryptoDES(); 
                        $res  = $des->enkripsiDES($message, $key);
                        $dec =  $des->dekripsiDES($res, $key);
                        ?>
                        <table class="table table-bordered table-hover text-center">
                            <tr>
                                <td>Message</td>
                                <td><strong><?php echo $message; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Key</td>
                                <td><strong><?php echo $key; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Encrypted</td>
                                <td><strong><?php echo $res; ?></strong></td>
                            </tr>
                            <tr>
                                <td>Descrypted</td>
                                <td><strong><?php echo $dec; ?></strong></td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 px-0">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center"><strong>ANGGOTA KELOMPOK 1</strong> </h3>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        ALGORITMA DATA ENCRYPTION STANDARD
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <section id="about" class="px-1 py-4 mb-3"
                                            style="background-color: #900000; color: black;">
                                            <div class="container">
                                                <div class="row g-4">
                                                    <div class="col-sm-6 col-xl-5 offset-xl-1">
                                                        <div class="card bg-light">
                                                            <div class="card-body text-center px-2">
                                                                <img src="img/farkhan.jpg"
                                                                    class="w-50 rounded-circle mb-3" alt="farkhan" />
                                                                <h3 class="card-title mb-1">Farkhan Adfiansyah</h3>
                                                                <p class="card-text">19104410023</p>
                                                                <p class="fst-italic">Bagian : <a class="text-decoration-none" href="#" target="_blank">Pembuatan Coding</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-5">
                                                        <div class="card bg-light">
                                                            <div class="card-body text-center px-2">
                                                                <img src="img/adam.jpg"
                                                                    class="w-50 rounded-circle mb-3" alt="derry"">
                                                                <h3 class=" card-title mb-1">Adam Bachtiar</h3>
                                                                <p class="card-text">17104410002</p>
                                                                <p class="fst-italic">Bagian : <a class="text-decoration-none" href="#" target="_blank">Penjelasan Program</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="card bg-light">
                                                            <div class="card-body text-center px-2">
                                                                <img src="img/derry.jpg"
                                                                    class="w-50 rounded-circle mb-3" alt="derry"">
                                                                <h3 class=" card-title mb-1">Derry Jourdan P.</h3>
                                                                <p class="card-text">19104410017</p>
                                                                <p class="fst-italic">Bagian : <a class="text-decoration-none" href="#" target="_blank">Penjelasan PPT part.1</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4">
                                                        <div class="card bg-light">
                                                            <div class="card-body text-center px-2">
                                                                <img src="img/dino.jpg"
                                                                    class="w-50 rounded-circle mb-3" alt="firdaus" />
                                                                <h3 class="card-title mb-1">Dino Esza Puji Utama</h3>
                                                                <p class="card-text">19104410042</p>
                                                                <p class="fst-italic">Bagian : <a class="text-decoration-none" href="#" target="_blank">Penjelasan PPT part.2</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xl-4 ">
                                                        <div class="card bg-light">
                                                            <div class="card-body text-center px-2">
                                                                <img src="img/firdaus.jpg"
                                                                    class="w-50 rounded-circle mb-3" alt="firdaus" />
                                                                <h3 class="card-title mb-1">Firdaus Ramadhan</h3>
                                                                <p class="card-text">19104410012</p>
                                                                <p class="fst-italic">Bagian : <a class="text-decoration-none" href="#" target="_blank">Penjelasan PPT part.3</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"> -->
    </script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>