@extends('layouts.master')


@section('content')

<div class="container">
<div class="row">
  <div class="col-md-12">
    <!-- <div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent.</strong></div>    -->
    <!-- <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check your inputs.</strong></div> -->
  </div>
  <form role="form" action="send_contact_form.php" method="post" name="htmlform">
    <div class="col-lg-6">
      <div class="form-group">
        <label for="InputName">Name</label>
        <div class="input-group">
          <input type="text" class="form-control" name="InputName" id="InputName" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
        </div>
      </div>
      <div class="form-group">
        <label for="InputEmail">Email Address</label>
        <div class="input-group">
          <input type="email" class="form-control" id="InputEmail" name="InputEmail" required>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <div class="form-group">
        <label for="InputMessage">Message</label>
        <div class="input-group">
          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
      </div>
      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right" onclick="validateAndSend();">
    </div>
  </form>
  <hr class="featurette-divider hidden-lg">
</div>
</div>

@stop