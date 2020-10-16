<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Form</h2>
  <form id=form>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
    <label for="email">Message:</label>
        <textarea rows = "5" cols = "40" name ="message" id ="message"  class="form-control"></textarea>
    </div>
    <div class="form-group">
      <label for="email">Date:</label>
      <input type="date"  name="date" id="date"  class="form-control" min="2020-01-01" max="2020-12-31">
    </div>
    <button type="button" id="submit" class="btn btn-danger">Submit</button>
  </form>
</div>
 <script src="adddata.js"></script>
</body>
</html>
