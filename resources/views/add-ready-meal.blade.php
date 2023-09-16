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
                <div class="col-sm-10 col-10">
                </div>
                <div class="col-sm-2 col-2 text-end">
                    <a href="{{ url('ready-meal') }}" class="btn btn-black btn-round btn-cross-lg">
                        <!-- <img src="img/icon/Close-light.png" alt=""> -->
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <form class="container recipe" method="post" action="/add-ready-meal" enctype="multipart/form-data">
        <div class="row my-4">
            <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-2">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="profile-title">Create ready meals</h2>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <div class="upload-btn-wrapper d-grid">
                            <button class="btn btn-round"><img src="img/upload-image.png" alt=""></button>
                            <input type="file" name="image" class="imageInput" data-preview="previewImage" />
                            <img id="previewImage" src="#" alt="Preview Image"
                                style="display: none; max-width:100%; max-height: 300px; object-fit: contain;">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <input type="text" name="title" class="form-control" id="" placeholder="Title">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="description" id="" rows="3" placeholder="Description"></textarea>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12 col-12 d-grid mt-2">
                        <button type="submit" class="btn btn-login">Create meal</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        const imageInputs = document.querySelectorAll('.imageInput');

        imageInputs.forEach(function(imageInput) {
            const previewId = imageInput.dataset.preview;
            const previewImage = document.getElementById(previewId);

            imageInput.addEventListener('change', function(event) {
                const file = event.target.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.addEventListener('load', function() {
                        previewImage.src = reader.result;
                        previewImage.style.display = 'block';
                    });

                    reader.readAsDataURL(file);
                } else {
                    previewImage.src = '#';
                    previewImage.style.display = 'none';
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>

</html>
