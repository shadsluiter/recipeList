<!-- 
 this is a partial page
 purpose is to show a search form under the top menu
 even though the file extension is .php, all of the code on this page is html
 -->
 
 <div class="form-container">

<h2>Search for a recipe</h2>
<p>Fill out any of these fields and search</p>
<form action="searchRecipe.php">
Recipe Title:<input type="text" name="recipeName"></input><br>
Recipe Ingredients:<input type="text" name="recipeIngredients"></input><br>
Recipe Instructions:<input type="text" name="recipeInstructions"></input><br>
<button type="submit">Search</button>
</form>
</div>

