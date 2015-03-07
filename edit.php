<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div id="recipe_create">
      <h2>Recipe Form</h2>
      <form role="form">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="title" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label for="prep_time">Prep Time:</label>
          <input type="text" class="form-control" id="prep_time" placeholder="Enter Prep Time">
        </div>
        <div class="form-group">
          <label for="cook_time">Cook Time:</label>
          <input type="text" class="form-control" id="cook_time" placeholder="Enter Cook Time">
        </div>
        <div class="form-group">
          <label for="total_time">Total Time:</label>
          <input type="text" class="form-control" id="total_time" placeholder="Enter Total Time">
        </div>
        <div class="form-group">
          <label for="yield">Yield:</label>
          <input type="text" class="form-control" id="yield" placeholder="Enter Yield Amount">
        </div>

        <div class="form-group">
          <label for="description">Description:</label>
          <textarea cols="40" class="form-control" id="description" name="description" rows="10">
          </textarea>
        </div>
        <div class="form-group">
          <label for="ingredients">Ingredients:</label>
          <textarea cols="40" class="form-control" id="ingredients" name="ingredients" rows="10">
          </textarea>
        </div>
        <div class="form-group">
          <label for="instructions">Instructions:</label>
          <textarea cols="40" class="form-control" id="instructions" name="instructions" rows="10">
          </textarea>
        </div>

        <div class="form-group">
          <label for="comments">Comments:</label>
          <textarea cols="40" class="form-control" id="comments" name="comments" rows="10">
          </textarea>
        </div>

        <div class="form-group">
          <label for="category">Category:</label>
          <select class="form-control" id="category" name="category">
            <option value=""></option>
            <option value="breakfast">Breakfast</option>
            <option value="lunch">Lunch</option>
            <option value="dinner">Dinner</option>
            <option value="dessert">Dessert</option>
            <option value="appetizer">Appetizer</option>
            <option value="snack">Snack</option>
            <option value="other">Other</option>
          </select>          
        </div>

        <div class="form-group">
          <label for="source">Source:</label>
          <input type="text" class="form-control" id="source" placeholder="Enter who or where you got this recipe from">
        </div>


        <button type="submit" class="btn btn-default">Submit</button>
      </form>

    </div>
  </div>
</body>
