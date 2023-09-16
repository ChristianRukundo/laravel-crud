<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restobar hotel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="css/lionbars.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .video-image {
        width: 100%;
        height: 500px;
        border-radius: 1rem;
        object-fit: contain;

    }
</style>

<body>

    <header class="fixed">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 col-2">
                    <a href="#" id="togglemenu" class="togglemenubar"><i class="fa fa-bars"
                            aria-hidden="true"></i> </a>
                </div>
                <div class="col-md-8 col-8 text-center">
                    <h2 class="pagetitle">Restobar hotel</h2>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid mtop">
        <div class="mainbox">
            <div id="sidemenubox" class="sidebarbox fixed">

            </div>
            <div class="contentbox">
                <div class="row mt-1">
                    <div class="col-md-2 col-2 text-start">
                        <!-- <button type="button" class="btn btn-yellow btn-round btn-add-lg" data-bs-toggle="modal" data-bs-target="#addnutritionModal">
                            <img src="img/icon/nutrition-light.png" alt="">
                        </button> -->
                    </div>
                    <div class="col-md-8 col-8 text-center">
                        <!-- <h2>Food Overview</h2> -->
                    </div>
                    <div class="col-md-2 col-2 text-end">
                        <a href="/add-ready-meal" class="btn btn-theme btn-round btn-add-lg">
                            <!-- <img src="img/icon/add-round.png" alt=""> -->
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="modal fade" id="viewMealInfoModal" tabindex="-1" aria-labelledby="viewVideoInfoModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewVideoInfoModalLabel">Ready Information</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="videoInfoContent"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editReadyMealModal" tabindex="-1"
                    aria-labelledby="uploadcategoryModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row" method="post" id="edit-form" action="/edit-readyMeal"
                                    enctype="multipart/form-data">
                                    <div class="col-sm-12 mb-4">
                                        <h1 class="modal-title fs-5 text-center">Upload Category</h1>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <div class="upload-btn-wrapper d-grid">
                                            <button class="btn btn-round"><img src="img/upload-image.png"
                                                    alt=""></button>
                                            <input type="file" name="image" class="imageInput"
                                                data-preview="previewImage" />
                                            <img id="previewImage" src="#" alt="Preview Image"
                                                style="display: none; max-width:100%; max-height: 300px; object-fit: contain;">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <input type="Text" name="title" class="form-control" id=""
                                            placeholder="Title">
                                    </div>
                                    <div class="col-sm-12 mb-3">
                                        <textarea class="form-control" name="description" placeholder="Description" id="" rows="3"></textarea>
                                    </div>
                                    <div class="col-sm-12 mb-2 d-grid">
                                        <button type="submit" class="btn btn-login" data-bs-dismiss="modal"
                                            aria-label="Close">Update ready-meal</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    @foreach ($meals as $meal)
                        <div class="col-md-4 my-2 food-container">
                            <div class="card food-overview">
                                <div class="card-body">
                                    <div class="card-inner">
                                        <div class="card-img">
                                            <img src="{{ $meal->imgUrl }}" alt="">
                                        </div>
                                        <div class="card-content">
                                            <h6 class="card-title mb-4">{{ $meal->title }}</h6>
                                            <a href="#" class="videoedit">
                                                <!-- <img src="img/icon/edit.png"> -->
                                                <i class="fa fa-pencil viewEditReadyMealModal"
                                                    data-modal-id="{{ $meal->id }}" data-bs-toggle="modal"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-eye-slash viewMealInfoModalBtn" data-bs-toggle="modal"
                                                    style="margin: 1rem;" data-modal-id="{{ $meal->id }}"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <form action="delete-ready-meal/{{ $meal->id }}" class="videodelete"
                                                method="delete">
                                                <button type="submit" style="border: none;" class="fa fa-trash-o"
                                                    aria-hidden="true"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script></script>
                    @endforeach

                </div>


            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="js/lionbars.js"></script>

    <script>
        function deleteMeal(event) {
            event.preventDefault();
            if (confirm('Are you sure you want to delete this video?')) {
                const link = $(event.currentTarget);
                const videoId = link.attr('data-video-id');
                const url = 'api/v1/readyMeals/' + videoId;

                const foodElement = link.closest('.card.food-overview');

                function adjustLayout() {

                    const videoContainer = $('.food-container');

                }

                foodElement.slideUp('fast', function() {

                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function() {

                            alert('Meal deleted!');

                            foodElement.remove();

                            adjustLayout();
                        },
                        error: function() {

                            alert('An error occurred while deleting the video.');
                        }
                    });
                });
            }
        }
        let meals = @json($meals); // Convert the PHP $videos array to JSON

        $('.viewMealInfoModalBtn').on("click", function() {
            let mealId = $(this).data('modal-id');
            let meal = meals.find(function(meal) {
                return meal.id === mealId;
            });
            let mealInfoContent =
                "<h3 class='text-align: center;'>Meal Image</h3>" +
                "<img src='" + meal.imgUrl + "' alt='meal Image'  class='video-image'>" +
                "ReadyMeal ID      : " + meal.id + "<br>" +
                "Title:   " + meal.title + "<br>" +
                "Description:     " + meal.description;
            $('#viewMealInfoModal .modal-body').html(mealInfoContent);
            $('#viewMealInfoModal').modal('show');
        });




        $('.viewEditReadyMealModal').on("click", function() {

            let readyMealId = $(this).data('modal-id');
            let readyMeal = meals.find(function(meal) {
                return meal.id === readyMealId;
            });

            $('#editReadyMealModal input[name="title"]').val(readyMeal.title);
            $('#editReadyMealModal textarea[name="description"]').val(readyMeal.description);
            $('#editReadyMealModal #edit-form').attr('action', '/edit-readyMeal/' + readyMeal.id);
            $('#editReadyMealModal').modal('show');
        });



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


    <script type="text/javascript">
        $("#togglemenu").click(function() {
            $("#sidemenubox").toggle(300);
        });
    </script>

</body>

</html>
