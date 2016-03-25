<!DOCTYPE html>
<html>
<head>
	<title>Add News</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">New title</label>
				<input type="text" name="news-title" class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="">News date</label>
				<input type="date" name="news-date" class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="">News image</label>
				<input type="file" name="news-image" class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="">News description</label>
				<input type="text" name="news-desc" class="form-control"></input>
			</div>
			<div class="form-group">
				<label for="">News text</label>
				<textarea name="news-text" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label for="">Status</label>
				<div class="radio">
					<label><input type="radio" value="1" name="status">Saytda gosterilsin</label>
				</div>
				<div class="radio">
					<label><input type="radio" value="0" name="status">Saytda gosterilmesin</label>
				</div>
			</div>
			<button type="submit" name="addSubmit" class="btn btn-primary">Əlavə et</button>
		</form>
	</div>
	

</body>
</html>
<?php 
include 'class/model.php';
if(isset($_POST['addSubmit'])){
	$myDb = new Database("localhost","root","","codeadmin");
	$myNews = new News($myDb->conn,$_POST['news-title'],$_POST['news-date'],$_FILES['news-image'],$_POST['news-text'],$_POST['news-desc'],$_POST['status']);
}
?>