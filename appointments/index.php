<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="../Libraries/bulma.css">
    <link rel="stylesheet" type="text/css" href="../Libraries/css/main.css">
    <link href="bulma-calendar-master/dist/css/bulma-calendar.min.css" rel="stylesheet">

    <script src="../Libraries/js/ajax-3.1.1.js"></script>
    <script src="../Libraries/js/jquery-1.12.4.js"></script>
    <script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>

    <title>Malasig-Benitez</title>
  </head>

  <body>

    <section class="columns is-fullheight">
      <aside class="column is-one-fifth menu" >
        <ul class="menu-list is-size-6">

          <li>
            <a href="../patient_record/index.php">Patient Records</a>
            <ul>
              <li>
                <a href="../patient_record/add_patient.php">Add Patient</a>
              </li>
            </ul>
          </li>

          <li>
            <a href="index.php" class="has-text-grey-darker has-text-weight-bold has-background-white-bis">Appointments</a>
            <ul>
              <li>
                <a href="add_appointment.php">Add Appointment</a>
              </li>
            </ul>
          </li>

        </ul>
      </aside>
      <!--RIGHT CONTENT!-->
      <!--RIGHT CONTENT!-->
      <!--RIGHT CONTENT!-->
      <div class="column">
        <div class="container container-of-add-patient">
          <div class="card has-margin-top-3 has-background-white-bis has-border has-text-grey-darker">

            <header class="card-header">
              <p class="card-header-title is-centered card-header-font">
                APPOINTMENTS
              </p>
            </header>

            <div class="card-content">

              <table class="table is-bordered is-hoverable is-fullwidth">
                <thead>
          <tr>
            <th>DATE</th>
            <th>TIME</th>
            <th>SERVICE</th>
            <th>NAME</th>
            <th>CONTACT NO.</th>
            <th>EDIT</th>
            <th>DELETE</th>
          </tr>
        </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="button">Edit</a>
                    </td>
                    <td>
                        <a class="button">Delete</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="button">Edit</a>
                    </td>
                    <td>
                        <a class="button">Delete</a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <a class="button">Edit</a>
                    </td>
                    <td>
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
