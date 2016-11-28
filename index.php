<?php
  include 'lib/meekrodb.2.3.class.php';
  include 'db-config.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Jquery! -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Roboto+Condensed:400,700" rel="stylesheet">
    <style media="screen">
      body {
        font-family: Roboto, sans-serif;
      }
      h1,h2,h3,h4,h5,h6 {
        font-family: "Roboto Condensed", sans-serif;
        font-weight: 700;
        text-transform: uppercase;;
      }
    </style>


    <title>Opt-Out of Paperless Giving Records</title>

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Opt-Out of Paperless Giving Statements.</h1>
          <hr>

        </div>
      </div>
      <div class="row">

        <div class="col-lg-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Info</h3>
            </div>
            <div class="panel-body">
              <p class="lead">
                Northland's finance team is going paperless!
              </p>
              This will allow us to accomplish a few things:
              <ul>
                <li><strong>To be better stewards of creation.</strong></li>
                <li><strong>Save money!</strong> Not sending 7000 giving statements is a significant cost savings.</li>
                <li><strong>Save time</strong> by not having to spend labor hours on print, stuffing and sending mailings.</li>
              </ul>
              <em>If this sounds great, feel free to close this window. We will automatically send you electronic giving statements.</em>
              If you still prefer to have paper statements printed and mailed to you, fill out this form and submit it.
            </div>
          </div>
        </div>


        <div class="col-lg-8">
          <form action="submitted.php" method="get" id="optout">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">First Name</label>
                  <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Jane" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lastname">Last Name</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Smith" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phonenumber">Phone Number</label>
                  <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="800-555-1212" pattern="^\d{3}-\d{3}-\d{4}$" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="youremail@example.com" required>
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="streetaddr1">Street Address 1</label>
                  <input type="text" class="form-control" id="streetaddr1" name="streetaddr1" placeholder="Street Address 1" required>
                </div>

              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="streetaddr2">Street Address 2</label>
                  <input type="text" class="form-control" id="streetaddr2" name="streetaddr2" placeholder="Street Address 2">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="state">State</label>
                  <select id="state" name="state" class="form-control" required>
          					<option value="AL">Alabama</option>
          					<option value="AK">Alaska</option>
          					<option value="AZ">Arizona</option>
          					<option value="AR">Arkansas</option>
          					<option value="CA">California</option>
          					<option value="CO">Colorado</option>
          					<option value="CT">Connecticut</option>
          					<option value="DE">Delaware</option>
          					<option value="DC">District Of Columbia</option>
          					<option value="FL" selected="selected">Florida</option>
          					<option value="GA">Georgia</option>
          					<option value="HI">Hawaii</option>
          					<option value="ID">Idaho</option>
          					<option value="IL">Illinois</option>
          					<option value="IN">Indiana</option>
          					<option value="IA">Iowa</option>
          					<option value="KS">Kansas</option>
          					<option value="KY">Kentucky</option>
          					<option value="LA">Louisiana</option>
          					<option value="ME">Maine</option>
          					<option value="MD">Maryland</option>
          					<option value="MA">Massachusetts</option>
          					<option value="MI">Michigan</option>
          					<option value="MN">Minnesota</option>
          					<option value="MS">Mississippi</option>
          					<option value="MO">Missouri</option>
          					<option value="MT">Montana</option>
          					<option value="NE">Nebraska</option>
          					<option value="NV">Nevada</option>
          					<option value="NH">New Hampshire</option>
          					<option value="NJ">New Jersey</option>
          					<option value="NM">New Mexico</option>
          					<option value="NY">New York</option>
          					<option value="NC">North Carolina</option>
          					<option value="ND">North Dakota</option>
          					<option value="OH">Ohio</option>
          					<option value="OK">Oklahoma</option>
          					<option value="OR">Oregon</option>
          					<option value="PA">Pennsylvania</option>
          					<option value="RI">Rhode Island</option>
          					<option value="SC">South Carolina</option>
          					<option value="SD">South Dakota</option>
          					<option value="TN">Tennessee</option>
          					<option value="TX">Texas</option>
          					<option value="UT">Utah</option>
          					<option value="VT">Vermont</option>
          					<option value="VA">Virginia</option>
          					<option value="WA">Washington</option>
          					<option value="WV">West Virginia</option>
          					<option value="WI">Wisconsin</option>
          					<option value="WY">Wyoming</option>
          				</select>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="zipcode">Zipcode</label>
                  <input type="number" class="form-control" id="zipcode" name="zipcode" placeholder="32750" min="0" max="99999" required>
                </div>
              </div>
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="agree" required> I understand that I will receive a printed giving statement in the mail.
              </label>
            </div>
            <p id="results"></p>
            <p>
              <button id="optout-btn" type="submit" class="btn btn-warning">Opt-Out of Paperless Statements</button>
            </p>
          </form>
        </div>
      </div>
    </div>
    <script type="text/javascript">
      $( document ).ready(function() {
        // This validates the data in the commitment form and also changes
        // the button to "Thank you" when it is clicked.
        $("#optout").submit(
        function( event ) {
          $("#results").load( "submitted.php", $("#optout").serialize(), function() {
            if ($("#results").html() != '<strong style=\"color:red;\">Required information is missing or incorrect.</strong>') {
              $("#optout-btn").html("Submitted");
              $('#optout-btn').attr("disabled", true);
            }
          });
          event.preventDefault();
        });
      });
    </script>
  </body>
</html>
