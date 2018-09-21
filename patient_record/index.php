<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="../Libraries/bulma.css">
    <link rel="stylesheet" type="text/css" href="../Libraries/css/main.css">

    <script src="../Libraries/js/ajax-3.1.1.js"></script>
    <script src="../Libraries/js/jquery-1.12.4.js"></script>

    <title>Malasig-Benitez</title>

  </head>

  <body class="backgroundcolor">
    <section class="columns">
      <aside class="column is-one-fifth menu leftcolor" >
        <ul class="menu-list is-size-6">
          <li>
            <a href="index.php" class="has-text-grey-darker has-text-weight-bold has-background-white-bis">Patient Records</a>
            <ul>
              <li>
                <a href="add_patient.php">Add Patient</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="../appointments/index.php">Appointments</a>
            <ul>
              <li>
                <a href="../appointments/add_appointment.php">Add Appointment</a>
              </li>
            </ul>
          </li>
        </ul>
      </aside>
      <!--RIGHT CONTENT OF THE PAGE!-->
      <!--RIGHT CONTENT OF THE PAGE!-->
      <!--RIGHT CONTENT OF THE PAGE!-->
      <div class="column">
        <div class="container container-of-add-patient">
          <div class="card has-margin-top-3 has-background-white-bis has-border has-text-grey-darker">

            <header class="card-header">
              <p class="card-header-title is-centered card-header-font">
                LIST OF PATIENTS
              </p>
            </header>

            <div class="card-content">
              <div class="field has-addons">
                <div class="control">
                  <input class="input" type="text" placeholder="Enter name here...">
                </div> <br>
                <div class="control">
                  <a class="button">Search</a>
                </div>
              </div>
              <table class="table is-bordered is-hoverable is-fullwidth">
                <tbody>
                  <tr>
                    <td colspan="3"> Lalala </td>
                    <td>
                      <div class="buttons has-addons is-right">
                        <a class="button">Edit</a>
                        <a class="button">Delete</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3" class="colspan1"> Lala </td>
                    <td class="colspan2">
                      <div class="buttons has-addons is-right">
                        <a class="button">Edit</a>
                        <a class="button">Delete</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="3"> La </td>
                    <td>
                      <div class="buttons has-addons is-right">
                        <a class="button">Edit</a>
                        <a class="button">Delete</a>
                     </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

</html>
