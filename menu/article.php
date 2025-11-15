<?php
session_reset();
?>

<!DOCTYPE html>
<html lang="en">

<?php
include './components/header.php';
?>

<body class="outfit-thin overflow-x-hidden">

	<div class="w-full">
		<!-- NAVBAR -->
		<?php
		include './components/navbar.php';
		?>
		<!-- END NAVBAR -->

		<!-- ARTICLE -->
		<?php
		$queryArticle = "SELECT * FROM tb_artikel";
		$resultArticle = mysqli_query($con, $queryArticle);
		while ($rowArticle = mysqli_fetch_assoc($resultArticle)) {
			$articleId = $rowArticle['id'];
			$articleTitle = $rowArticle['judul'];
			$articleDescription = $rowArticle['deskripsi'];
			$articleImage = $rowArticle['gambar'];
		?>
			<div class=""></div>
		<?php
		}
		?>
		<!-- END ARTICLE -->

		<!-- FOOTER -->
		<?php
		include './components/footer.php';
		?>
		<!-- END FOOTER -->

		<script type="module" src="../scripts/index.js"></script>
</body>

</html>