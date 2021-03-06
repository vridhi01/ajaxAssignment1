<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="modalform.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary buttonstyle" data-toggle="modal" data-target="#exampleModal">
  Form modal
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        <h3 class="modal-title" id="exampleModalLabel">Form</h3>
       
      </div>
      <!-- modalbody -->
      <div class="modal-body">
      <form id="form">
      <div id="sucfailmsg" style="color:green"></div>
     
     <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-name">name</label>
          <input type="text" id="name" class="form-control validate">
        
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">email</label>
          <input type="email" id="email" class="form-control validate">
          
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-email">Message</label>
          <textarea rows = "5" cols = "10" name ="message" id ="message"  class="form-control validate"></textarea>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="orangeForm-pass">date</label>
          <input type="date" id="date" class="form-control validate">
        </div>
      </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button"   id="submit"  class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

<script src="modalform.js"></script>
</body>
</html>
