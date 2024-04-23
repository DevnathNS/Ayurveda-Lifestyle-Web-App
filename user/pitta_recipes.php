<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pitta Recipes</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .carousel-item img {
            width: 100%;
            height: auto;
            max-height: 400px; /* Adjust max-height as needed */
            object-fit: cover;
        }

        .modal-body img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
        }

        .modal-content {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>pitta-Pacifying Recipes</h2>
    <div id="pittaCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pitta_recipe1.jpg" class="d-block w-100" alt="Recipe 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Recipe 1 Title</h5>
                    <p>Short description of Recipe 1</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recipeModal1">
                        View Recipe
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pitta_recipe2.jpg" class="d-block w-100" alt="Recipe 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Recipe 2 Title</h5>
                    <p>Short description of Recipe 2</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recipeModal2">
                        View Recipe
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pitta_recipe3.jpg" class="d-block w-100" alt="Recipe 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Recipe 3 Title</h5>
                    <p>Short description of Recipe 3</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recipeModal3">
                        View Recipe
                    </button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#pittaCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#pittaCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="modal fade" id="recipeModal1" tabindex="-1" role="dialog" aria-labelledby="recipeModal1Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModal1Label">Recipe 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="pitta_recipe1.jpg" class="d-block mx-auto mb-3" alt="Recipe 1 Full">
                <p>Full Recipe 1 details here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="recipeModal2" tabindex="-1" role="dialog" aria-labelledby="recipeModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModal2Label">Recipe 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="pitta_recipe2.jpg" class="d-block mx-auto mb-3" alt="Recipe 2 Full">
                <p>Full Recipe 2 details here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="recipeModal3" tabindex="-1" role="dialog" aria-labelledby="recipeModal3Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="recipeModal3Label">Recipe 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="pitta_recipe3.jpg" class="d-block mx-auto mb-3" alt="Recipe 3 Full">
                <p>Full Recipe 3 details here...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
