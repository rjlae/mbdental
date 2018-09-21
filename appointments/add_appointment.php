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
        <!--<p class="menu-label is-size-6 has-text-black has-text-centered has-text-weight-semibold leftmargintop">
          Malasig-Benitez Dental
        </p>!-->
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
            <a href="index.php">Appointments</a>
            <ul>
              <li>
                <a href="add_appointment.php" class="has-text-grey-darker has-text-weight-bold has-background-white-bis">Add Appointment</a>
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
                                    ADD APPOINTMENT
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
                                         <input class="input input-75 is-small" type="text" id="name"/>
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
                                           <input class="input input-75 is-small" type="text" id="contactno"/>
                                         </p>
                                       </div>
                                     </div>
                              </div>

                              <div class="field is-horizontal">
                                     <div class="field-label is-small has-font-family">
                                       <label class="label"> Date: </label>
                                     </div>

                                     <div class="field-body">
                                       <div class="field">
                                         <p class="control">
                                           <input class="input input-40 is-small" type="date" id="date" value="2000-31-12"/>
                                         </p>
                                       </div>
                                     </div>
                              </div>


                              <div class="field is-horizontal">
                                     <div class="field-label is-small has-font-family">
                                       <label class="label"> Time: </label>
                                     </div>

                                     <div class="field-body">
                                       <div class="field">
                                         <p class="control">
                                           <input class="input input-20 is-small" type="time" id="time"/>
                                         </p>
                                       </div>
                                     </div>
                              </div>

                              <div class="field is-horizontal">
                             <div class="field-label is-small">
                               <label class="label"> Service: </label>
                             </div>

                             <div class="field-body">
                               <div class="field">
                                 <p class="control">
                                   <div class="select is-small">
                                     <select multiple id="service" size="4">
                                      <option value="oral_exam">Oral Exam</option>
                                      <option value="tooth_extraction">Tooth Extraction</option>
                                      <option value="tooth_filling">Tooth Filling</option>
                                      <option value="oral_prophylaxis">Oral Prophylaxis</option>
                                      <option value="denture">Denture</option>
                                      <option value="jacket_crown">Jacket Crown</option>
                                      <option value="braces">Braces</option>
                                      <option value="obturator">Obturator</option>
                                      <option value="retainers">Retainers</option>
                                      <option value="impaction">Impaction</option>
                                      <option value="implant">Implant</option>
                                    </select>
                                   </div>
                                 </p>
                               </div>
                             </div>
                           </div>

                              <div class="buttons is-centered">
                                <button class="button is-small has-font-family" type="submit" value="Add Appointment" name="addappointmentbtn">
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


  $('button[name=addappointmentbtn]').click(function(e){

    e.preventDefault();

  var datex = document.getElementById("date").value;
  var servicex = $('#service').val();


  var namex = myTrim($('#name').val());
  var contactnox = myTrim($('#contactno').val());
  var timex = myTrim($('#time').val());


  $.ajax({

    url: "../php/appointment.php",
    type: "POST",
    data: {func: 1, namex:namex, contactnox:contactnox, timex:timex, datex:datex, servicex:servicex},
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
