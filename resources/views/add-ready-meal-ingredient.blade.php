<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <a class="back" href="#">Back</a>
                </div>
                <div class="col-md-10">
                </div>
                <div class="col-md-1 text-end">
                    <a href="{{ url('read-meal') }}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div class="container recipe">
        <div class="row ">
            <div class="col-md-6 offset-md-3 mt-4">
                <h1 class="recipe-title">Add Ingredient</h1>
            </div>
            <!-- <div class="col-md-3 mt-5 text-start">
                <button type="button" class="btn btn-black btn-round btn-globe-lg">
                    <img src="img/icon/globe-light.png" alt="">
                </button>
            </div> -->
        </div>
        <div class="row my-4">
            <div class="col-md-6 offset-md-3">

                <div class="row">
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="" placeholder="Ingredient">
                    </div>
                    <div class="col-sm-5 mb-3">
                        <input type="text" class="form-control" id="" placeholder="Gram">
                    </div>
                    <div class="col-md-2 mb-3 text-end">
                        <button type="button" class="btn btn-black btn-round btn-cross-lg">
                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div class="tablebox">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Cheese</td>
                                        <td>300</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cheese</td>
                                        <td>300</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cheese</td>
                                        <td>300</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cheese</td>
                                        <td>300</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cheese</td>
                                        <td>300</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cheese</td>
                                        <td>300</td>
                                        <td>
                                            <a class="btn-delete btn" href="#">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-8 offset-sm-2 col-12 d-grid">
                        <a href="{{ url('ready-meal ') }}" class="btn btn-login">Upload</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
