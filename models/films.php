<?php
// Получение фильмов из БД
	function films_all($link) {
	$query = "SELECT * FROM `films`";
	$film = array();
	$result = mysqli_query($link, $query);
		if( $result = mysqli_query($link, $query) ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$film[] = $row;
			}
		}
		return $film;
	}
?>
<?php 
	function new_film($link, $title, $genre, $year, $description) {
		$query = "INSERT INTO `films` (`name`, `type`, `year`, `description`) VALUES ('" 
		.mysqli_real_escape_string($link, $title) . "','"
		.mysqli_real_escape_string($link, $genre) . "','"
		.mysqli_real_escape_string($link, $year) . "','"
		.mysqli_real_escape_string($link, $description) . "'
		) ";
		$result = mysqli_query($link, $query);
		if( $result ) {
			?>
			<script>
				window.open('index.php');
			</script>
		<?php
	} else {
			echo "<p>Фильм не добавлен. Проверьте введенные данные</p>";
		}
		return $result;
	}
?>
<?php 
	function get_film($link, $id ){
		$query = "SELECT * FROM `films` WHERE `id` = '" . mysqli_real_escape_string($link, $id) . "'";
		$film = array();
		$result = mysqli_query($link, $query);
		if( $result = mysqli_query($link, $query) ) {
			while ( $row = mysqli_fetch_array( $result ) ) {
				$film[] = $row;
			}
		}
		return $film;
	}
?>

<?php 
	function film_update($link, $title, $genre, $year, $description, $photo, $id) {
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";
		if ($_FILES['photo']['name'] != '' && $_FILES['photo']['tmp_name'] != '' ) {
			$fileName = $_FILES['photo']['name'];
			$fileTempLoc = $_FILES['photo']['tmp_name'];
			$fileType = $_FILES['photo']['type'];
			$fileSize = $_FILES['photo']['size'];
			$fileErrorMsg = $_FILES['photo']['error'];
			$kaboom = explode(".", $fileName);
			$fileExt = end($kaboom);
			$photoFolderLocation = ROOT . 'data/films/';
			$photoFolderLocationMin = ROOT . 'data/films/min/';
			$photoFolderLocationFull = ROOT . 'data/films/full/';
			list($width, $height) = getimagesize($fileTempLoc);
			if( $width < 10 || $height < 10 ) {
				$errors[] = "Это изображение некорректное";
			}
			$db_file_name = rand(100000000000, 999999999999) . "." . $fileExt;
			if ( $fileSize > 10485760 ) {
				$errors[] = "Изображение слишком большое";
			} else if( !preg_match("/\.(gif|jpg|png)$/i", $fileName) ) {
				$errors = "Загружено изображение неизвестного расширения";
			} else if( $fileErrorMsg == 1 ) {
				$errors = "Неизвестная ошибка";
			}
			$uploadFile = $photoFolderLocation . $db_file_name;
			$moveResult = move_uploaded_file($fileTempLoc, $db_file_name);
			if ($moveResult != true) {
				$errors[] = "Загрузка файла не удалась";
			}
			require_once("functions/image_resize_imagick.php");
			$targetFile = $photoFolderLocation . $db_file_name;
			$resizedFile = $photoFolderLocationMin . $db_file_name;
			$wmax = 135;
			$hmax = 200;
			$img = createThumbnail($targetFile, $wmax, $hmax);
			$img->writeImage($resizedFile);
		}
			$query = "UPDATE films SET
			name = '" . mysqli_real_escape_string($link, $title) . "',
			type = '" . mysqli_real_escape_string($link, $genre) . "',
			year = '" . mysqli_real_escape_string($link, $year) . "',
			description = '" . mysqli_real_escape_string($link, $description) . "',
			photo = '" . mysqli_real_escape_string($link, $db_file_name) . "'
			WHERE id = '" .mysqli_real_escape_string($link, $id) . "'";
			if( mysqli_query($link, $query) ) {
				$result = true;
			} else {
				$result = false;
			}
			return $result;
	}
?>
<?php  
function  delete_film($link, $id){
	if ( @$_GET['action'] == 'delete' ) {
		$query = "DELETE FROM `films` WHERE `id` = '" . mysqli_real_escape_string($link, $id) . "'LIMIT 1";
		mysqli_query($link, $query);
		if( mysqli_affected_rows($link) > 0 ) 
		{
			$result = true;
			?> 
			<script>
				window.open('index.php');
			</script>
			<?php
		} else {
			$result = false;
		}
	}
}
?>