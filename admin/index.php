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

  <title>Log-in</title>
</head>

<body>

    <section>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="boxmargin">
                            <img src="../Assets/logowhitecrop.jpg">
                            <h3 class="loginfont has-text-black is-bold"> MALASIG-BENITEZ DENTAL </h3> <br>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-small input-50 is-fullwidth" type="username" placeholder="Enter Username" id="uname">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-small input-50 is-fullwidth" type="password" placeholder="Enter Password" id="pword">
                                </div>
                            </div>
                            <div class="buttons is-centered">
                            <button class="button is-block is-small is-fullwidth is-black" name="loginbutton"><b>LOG-IN</b></button>
                          </div>
                        </form>
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


	$('button[name=loginbutton]').click(function(e){

    e.preventDefault();

    var unamex = myTrim($('#uname').val());
    var pwordx = myTrim($('#pword').val());

    $.ajax({

      url: "../php/login.php",
      type: "POST",
      data: {func: 1, unamex:unamex, pwordx:pwordx},
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
