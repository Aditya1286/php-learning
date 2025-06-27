<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Library System</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $bookName = $_POST['book_name'];
    $authorName = $_POST['author_name'];
    $pubYear = $_POST['pub_year'];
    $condition = $_POST['condition'];

    echo '<div class="alert alert-success alert-dismissible fade show m-3" role="alert">
      <strong>Book Submitted!</strong><br>
      Book Name: <strong>' . htmlspecialchars($bookName) . '</strong><br>
      Author: <strong>' . htmlspecialchars($authorName) . '</strong><br>
      Year: <strong>' . htmlspecialchars($pubYear) . '</strong><br>
      Condition: <strong>' . htmlspecialchars($condition) . '</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>

<div class="container mt-4">
  <h2 class="text-center mb-4">Add Book to Library</h2>
  <form method="post">
    <div class="mb-3">
      <label for="book_name" class="form-label">Book Name</label>
      <input type="text" class="form-control" id="book_name" name="book_name" required>
    </div>
    <div class="mb-3">
      <label for="author_name" class="form-label">Author Name</label>
      <input type="text" class="form-control" id="author_name" name="author_name" required>
    </div>
    <div class="mb-3">
      <label for="pub_year" class="form-label">Publication Year</label>
      <input type="number" class="form-control" id="pub_year" name="pub_year" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Condition</label><br>
      <input type="radio" id="new" name="condition" value="New" required>
      <label for="new" style="margin-right:10px;">New</label>
      <input type="radio" id="old" name="condition" value="Old">
      <label for="old">Old</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit Book</button>
  </form>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
