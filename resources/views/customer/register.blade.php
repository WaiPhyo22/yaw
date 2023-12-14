<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form method="post" action="register-confirm" class="form" autocomplete="on">
        @csrf
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="customerName" required />
        </div>
        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="mailAddress" required />
        </div>
        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter phone number" name="phone" required>
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="birthday" required>
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="1" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" name="gender" value="2" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" name="gender" value="3" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Address</label>
          <div class="select-box">
            <select name="city">
              <option hidden>City</option>
              <option value="Yangon">Yangon</option>
              <option value="Mandalay">Mandalay</option>
              <option value="TaungGyi">TaungGyi</option>
              <option value="Pakokku">Pakokku</option>
            </select>
          </div>
          <input type="text" placeholder="Enter street address" name="address" required />
        </div>
        <button>Confirm</button>
      </form>
    </section>
  </body>
</html>