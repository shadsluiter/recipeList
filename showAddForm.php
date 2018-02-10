<!-- 
 this is a partial page
 purpose is to show the "Add Recipe" form
 even though the file extension is .php, all of the code is html.
 -->

<div class="form-container">
<h2>Add a recipe</h2>
<p>Fill out all of the fields and submit</p>
<form action="processAddItem.php">
    Recipe Title:<input type="text" name="recipeTitle"></input><br>
    Recipe Ingredients:<textarea rows="5" cols="50" name="recipeIngredients"></textarea><br>
    Recipe Instructions:<textarea rows="5" cols="50" name="recipeInstructions"></textarea><br>
    <button type="submit">Add</button>
</form>
</div>
