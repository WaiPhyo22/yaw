<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
  </head>
  <body>
    <section class="container">
      <header>Registration Confirm Form</header>
      <form method="post" action="register-complete" class="form">
        @csrf
      <table class="table table-borderless">
        <tbody>
            <tr>
                <th width="300">Full Name</th>
                <th width="">:</th>
                <td width="200">{{ session('customerDataInfo.customerName') }}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <th>:</th>
                <td>{{ session('customerDataInfo.mailAddress') }}</td>
            </tr>
            <tr>
                <th>Phone Numbe</th>
                <th>:</th>
                <td>{{ session('customerDataInfo.phone') }}</td>
            </tr>
            <tr>
                <th>Birth Date</th>
                <th>:</th>
                <td>{{ session('customerDataInfo.birthday') }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <th>:</th>
                <td>{{ session('customerDataInfo.gender') }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <th>:</th>
                <td>{{ session('customerDataInfo.city') }} {{ session('customerDataInfo.address') }}</td>
            </tr>
        </tbody>
      </table>
      <div class="column">
        <button type="submit" name="action" value="btnBack">back</button>
        <button type="submit">save</button>
      </div>
      </form>
    </section>
  </body>
</html>