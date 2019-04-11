<!DOCTYPE html>
<html>
<head>
  <title>JobLister</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/jumbotron-narrow.css">
</head>
<body>
  <div class="container">
    <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php">Create Listing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About As</a>
            </li>
            <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>

          </ul>
        </nav>
      </div>

  <?php displayMessage(); ?>
