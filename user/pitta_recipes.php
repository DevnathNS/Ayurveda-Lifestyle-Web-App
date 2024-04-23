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
            max-height: 400px;
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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recipeModal1">
                        View Recipe
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pitta_recipe2.jpg" class="d-block w-100" alt="Recipe 2">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#recipeModal2">
                        View Recipe
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pitta_recipe3.jpg" class="d-block w-100" alt="Recipe 3">
                <div class="carousel-caption d-none d-md-block">
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
                <h5 class="modal-title" id="recipeModal1Label">Cucumber-Mint Raita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="pitta_recipe1.jpg" class="d-block mx-auto mb-3" alt="Recipe 1 Full">
                <p>Ingredients: Yogurt, cucumber, fresh mint, cumin seeds, salt.<br><br>Directions: Grate cucumber and chop mint. Mix with yogurt, toasted cumin seeds, and a pinch of salt. Serve chilled.</p>
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
                <h5 class="modal-title" id="recipeModal2Label">Watermelon Salad</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="pitta_recipe2.jpg" class="d-block mx-auto mb-3" alt="Recipe 2 Full">
                <p>Ingredients: Watermelon cubes, feta cheese, fresh basil, lime juice, olive oil.<br><br>Directions: Toss watermelon cubes with crumbled feta, torn basil leaves, lime juice, and a drizzle of olive oil.</p>
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
                <h5 class="modal-title" id="recipeModal3Label">Coconut-Curry Lentils</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="pitta_recipe3.jpg" class="d-block mx-auto mb-3" alt="Recipe 3 Full">
                <p>Ingredients: Red lentils, coconut milk, curry powder, fresh cilantro, lime.<br><br>Directions: Cook lentils in coconut milk with curry powder until soft. Garnish with chopped cilantro and a squeeze of lime.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
