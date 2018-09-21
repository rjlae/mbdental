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

  <body>
    <section class="columns is-fullheight">
      <aside class="column is-one-fifth menu" >

        <ul class="menu-list is-size-6">
            <li>
              <a href="index.php">Patient Records</a>
              <ul>
                <li>
                  <a href="add_patient.php" class="has-text-grey-darker has-text-weight-bold has-background-white-bis">Add Patient</a>
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
                    PATIENT'S INFORMATION
                    </p>
                </header>

                <div class="card-content">
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Name: </label>
                      </div>
                          <div class="field-body">
                              <div class="field">
                                  <p class="control">
                                      <input class="input input-75 is-small" type="text" id="pname"/>
                                  </p>
                              </div>
                          </div>
                  </div>
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Address: </label>
                      </div>
                      <div class="field-body">
                          <div class="field">
                              <p class="control">
                                  <input class="input input-75 is-small" type="text" id="address"/>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Contact no: </label>
                      </div>
                      <div class="field-body">
                          <div class="field">
                              <p class="control">
                                <input class="input input-75 is-small" type="text" id="pcontactno"/>
                             </p>
                          </div>
                       </div>
                  </div>
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Age: </label>
                      </div>
                      <div class="field-body">
                          <div class="field">
                              <p class="control">
                                <input class="input input-20 is-small" type="text" id="age"/>
                              </p>
                          </div>
                          <div class="field-label is-small has-font-family">
                              <label class="label"> Gender: </label>
                          </div>
                          <div class="field has-field-padding">
                              <p class="control">
                                <label class="radio is-size-7">
                                      <input type="radio" name="male" id="m"/> Male
                                </label>
                                <label class="radio is-size-7">
                                      <input type="radio" name="female" id="f"/> Female
                                </label>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Blood Pressure: </label>
                      </div>
                      <div class="field-body">
                          <div class="field">
                              <p class="control">
                                <input class="input is-small input-20" type="text" id="bloodpress"/>
                              </p>
                          </div>
                          <div class="field-label is-small has-font-family">
                              <label class="label"> Temperature: </label>
                          </div>
                          <div class="field">
                              <p class="control">
                                <input class="input is-small input-20" type="text" id="temp"/>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Medical History: </label>
                      </div>
                      <div class="field-body">
                          <div class="field">
                              <p class="control input-75">
                                 <textarea class="textarea" id="medhist"> </textarea>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="field is-horizontal">
                      <div class="field-label is-small has-font-family">
                          <label class="label"> Referred by: </label>
                      </div>
                      <div class="field-body">
                          <div class="field">
                              <p class="control">
                                <input class="input is-small input-75" type="text" id="refby"/>
                              </p>
                          </div>
                      </div>
                 </div>
                <div class="buttons is-centered">
                    <button class="button is-small has-font-family" type="submit" value="Add Patient" name="addpatientbtn">
                </div>
          </div>
      </div>
  </div>
</div>
</section>
</body>

<script>
  function myTrim(x) {
  return x.replace(/^\s+|\s+$/gm,'');
  }


  $('button[name=addpatientbtn]').click(function(e){

    e.preventDefault();


  var pnamee = myTrim($('#pname').val());
  var paddress = myTrim($('#address').val());
  var pcontactno = myTrim($('#pcontactno').val());
  var page = myTrim($('#age').val());
  var pbloodpress = myTrim($('#bloodpress').val());
  var ptemp = myTrim($('#temp').val());
  var pmedhist = myTrim($('#medhist').val());
  var prefby = myTrim($('#refby').val());



  $.ajax({

    url: "../php/patient.php",
    type: "POST",
    data: {func: 1, pnamee:pnamee, paddress:paddress, pcontactno:pcontactno, page:page, pbloodpress:pbloodpress, ptemp:ptemp, pmedhist:pmedhist, prefby:prefby},
    success: function(result){

      alert(result)

      if(result == 1){
        alert("1")

      }else{
      alert("0")
      }

    }

      });
    });



</script>


</html>
