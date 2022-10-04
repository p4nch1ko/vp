<!DOCTYPE html>
<html>
	<head></head>
	<body>
		<form method="POST">
			<label for="title_input">Filmi pealkiri</label>
			<input type="text" name="title_input" id="title_input" placeholder="filmi pealkiri">
			<span>
			</span>
			<br>
			<label for="year_input">Valmimisaasta</label>
			<input type="number" name="year_input" id="year_input" min="1912">
			<span>
			</span>
			<br>
			<label for="duration_input">Kestus</label>
			<input type="number" name="duration_input" id="duration_input" min="1" value="60" max="600">
			<span>
			</span>
			<br>
			<label for="genre_input">Filmi žanr</label>
			<input type="text" name="genre_input" id="genre_input" placeholder="žanr">
			<span>
			</span>
			<br>
			<label for="studio_input">Filmi tootja</label>
			<input type="text" name="studio_input" id="studio_input" placeholder="filmi tootja">
			<span>
			</span>
			<br>
			<label for="director_input">Filmi režissöör</label>
			<input type="text" name="director_input" id="director_input" placeholder="filmi režissöör">
			<span>
			</span>
			<br>
			<input type="submit" name="film_submit" value="Salvesta">
		</form>
	</body>
</html>