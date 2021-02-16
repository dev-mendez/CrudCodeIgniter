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
            <button type="button" disabled class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>add</span>
            </button>

        </div>
    </nav>
    <div class="container mt-4"><a class="text-secondary" href="<?= site_url('CrudController'); ?>"> <i class="fa fa-home fa-2x" aria-hidden="true"></i></a></div>

    <!-- Modal -->

    <div class="container my-5">
        <form class="" method='post' action="<?= site_url('CrudController/update') ?>/<?= $row->id ?>">
            <div class="form-group py-1">
                <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                <input type="text" class="form-control" name="lastName" value="<?= $row->lastName ?>" id="exampleFormControlInput1" placeholder="Last name">
            </div>
            <div class="form-group py-1">
                <label for="exampleFormControlInput1" class="form-label">First name</label>
                <input type="text" class="form-control" name="firstName" value="<?= $row->firstName ?>" id="exampleFormControlInput1" placeholder="First name">
            </div>
            <div class="form-group py-1">
                <label for="exampleFormControlInput1" class="form-label">Birthdate</label>
                <input type="date" class="form-control" name="birthdate" value="<?= $row->birthdate ?>" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="form-group py-1">
                <label for="exampleFormControlInput1" class="form-label">Contact No</label>
                <input type="phone" class="form-control" name="contactNo" value="<?= $row->contactNo ?>" id="exampleFormControlInput1" placeholder="Phone No">

            </div>
            <div class="form-group py-1">
                <label for="exampleFormControlInput1" class="form-label">Bio</label>
                <input type="text" class="form-control" name="bio" value="<?= $row->bio ?>" id="exampleFormControlInput1" placeholder="About u">
            </div>
            <div class="py-4 text-center">
                <button type="submit" class="btn btn-success w-100" value="save">Update</button>
            </div>
        </form>
    </div>
    
</body>

</html>