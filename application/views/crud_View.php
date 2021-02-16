<!doctype html>
<html lang="en">

<head>
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</head>

<body>
    <nav class="navbar navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-success" href="#">Code Igniter CRUD</a>
            <button type="button" class="btn btn-primary float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>add</span>
            </button>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Person</h5>
                    <button type="button" class="btn-close" name="" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <form class="" method='post' action="<?= site_url('CrudController/create') ?>">
                        <div class="form-group py-1">
                            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastName" id="exampleFormControlInput1" placeholder="Last name">
                        </div>
                        <div class="form-group py-1">
                            <label for="exampleFormControlInput1" class="form-label">First name</label>
                            <input type="text" class="form-control" name="firstName" id="exampleFormControlInput1" placeholder="First name">
                        </div>
                        <div class="form-group py-1">
                            <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                            <input type="date" class="form-control" name="birthdate" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group py-1">
                            <label for="exampleFormControlInput1" class="form-label">Contact No</label>
                            <input type="phone" class="form-control" name="contactNo" id="exampleFormControlInput1" placeholder="Phone No">

                        </div>
                        <div class="form-group py-1">
                            <label for="exampleFormControlInput1" class="form-label">Bio</label>
                            <input type="text" class="form-control" name="bio" id="exampleFormControlInput1" placeholder="About u">
                        </div>
                        <div class="py-1">
                            <button type="submit" class="btn btn-primary w-100" value="save">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- End Modal -->

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Birthday</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Bio</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <th scope="row"><?= $row->id ?></th>
                        <td><?= $row->lastName; ?></td>
                        <td><?= $row->firstName; ?></td>
                        <td><?= $row->birthdate; ?></td>
                        <td><?= $row->contactNo; ?></td>
                        <td><?= $row->bio; ?></td>
                        <td> <a href="<?= site_url('CrudController/edit'); ?>/<?= $row->id; ?>">Edit</a> |
                            <a class="text-danger" href="<?= site_url('CrudController/delete'); ?>/<?= $row->id; ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
        </table>
    </div>

</body>

</html>