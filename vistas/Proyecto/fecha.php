<!DOCTYPE html>

<html lang="en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <title>Password Verification</title>


<script>

$(document).ready(function() {
  var longitud = false,
    minuscula = false,
    numero = false,
    mayuscula = false;
  $('input[type=password]').keyup(function() {
    var pswd = $(this).val();
    if (pswd.length < 8) {
      $('#length').removeClass('valid').addClass('invalid');
      longitud = false;
    } else {
      $('#length').removeClass('invalid').addClass('valid');
      longitud = true;
    }

    //validate letter
    if (pswd.match(/[A-z]/)) {
      $('#letter').removeClass('invalid').addClass('valid');
      minuscula = true;
    } else {
      $('#letter').removeClass('valid').addClass('invalid');
      minuscula = false;
    }

    //validate capital letter
    if (pswd.match(/[A-Z]/)) {
      $('#capital').removeClass('invalid').addClass('valid');
      mayuscula = true;
    } else {
      $('#capital').removeClass('valid').addClass('invalid');
      mayuscula = false;
    }

    //validate number
    if (pswd.match(/\d/)) {
      $('#number').removeClass('invalid').addClass('valid');
      numero = true;
    } else {
      $('#number').removeClass('valid').addClass('invalid');
      numero = false;
    }
  }).focus(function() {
    $('#pswd_info').show();
  }).blur(function() {
    $('#pswd_info').hide();
  });

  $("#registro").submit(function(event) {
    alert("hola");
    if(longitud && minuscula && numero && mayuscula){
      alert("password correcto");
      $("#registro").submit();
     
    }else{
      alert("Password invalido.");
      event.preventDefault();
    }
    
  });
});
</script>
<style>
body {
  background: #edf1f4 url(bg.jpg);
  font-family: "Segoe UI", Candara, "Bitstream Vera Sans", "DejaVu Sans", "Bitstream Vera Sans", "Trebuchet MS", Verdana, "Verdana Ref", sans serif;
  font-size: 16px;
  color: #444;
}
ul,
li {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
#container {
  width: 400px;
  padding: 0px;
  background: #fefefe;
  margin: 0 auto;
  border: 1px solid #c4cddb;
  border-top-color: #d3dbde;
  border-bottom-color: #bfc9dc;
  box-shadow: 0 1px 1px #ccc;
  border-radius: 5px;
  position: relative;
}
h1 {
  margin: 0;
  padding: 10px 0;
  font-size: 24px;
  text-align: center;
  background: #eff4f7;
  border-bottom: 1px solid #dde0e7;
  box-shadow: 0 -1px 0 #fff inset;
  border-radius: 5px 5px 0 0;
  /* otherwise we get some uncut corners with container div */
  text-shadow: 1px 1px 0 #fff;
}
form ul li {
  margin: 10px 20px;
}
form ul li:last-child {
  text-align: center;
  margin: 20px 0 25px 0;
}
input {
  padding: 10px 10px;
  border: 1px solid #d5d9da;
  border-radius: 5px;
  box-shadow: 0 0 5px #e8e9eb inset;
  width: 328px;
  /* 400 (#container) - 40 (li margins) -  10 (span paddings) - 20 (input paddings) - 2 (input borders) */
  font-size: 1em;
  outline: 0;
  /* remove webkit focus styles */
}
input:focus {
  border: 1px solid #b9d4e9;
  border-top-color: #b6d5ea;
  border-bottom-color: #b8d4ea;
  box-shadow: 0 0 5px #b9d4e9;
}
label {
  color: #555;
}
#container span {
  background: #f6f6f6;
  padding: 3px 5px;
  display: block;
  border-radius: 5px;
  margin-top: 5px;
}
button {
  background: #57a9eb;
  /* Old browsers */
  background: -moz-linear-gradient(top, #57a9eb 0%, #3a76c4 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #57a9eb), color-stop(100%, #3a76c4));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #57a9eb 0%, #3a76c4 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #57a9eb 0%, #3a76c4 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #57a9eb 0%, #3a76c4 100%);
  /* IE10+ */
  background: linear-gradient(top, #57a9eb 0%, #3a76c4 100%);
  /* W3C */
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#57a9eb', endColorstr='#3a76c4', GradientType=0);
  /* IE6-9 */
  border: 1px solid #326fa9;
  border-top-color: #3e80b1;
  border-bottom-color: #1e549d;
  color: #fff;
  text-shadow: 0 1px 0 #1e3c5e;
  font-size: .875em;
  padding: 8px 15px;
  width: 150px;
  border-radius: 20px;
  box-shadow: 0 1px 0 #bbb, 0 1px 0 #9cccf3 inset;
}
button:active {
  background: #3a76c4;
  /* Old browsers */
  background: -moz-linear-gradient(top, #3a76c4 0%, #57a9eb 100%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3a76c4), color-stop(100%, #57a9eb));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #3a76c4 0%, #57a9eb 100%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #3a76c4 0%, #57a9eb 100%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #3a76c4 0%, #57a9eb 100%);
  /* IE10+ */
  background: linear-gradient(top, #3a76c4 0%, #57a9eb 100%);
  /* W3C */
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#3a76c4', endColorstr='#57a9eb', GradientType=0);
  /* IE6-9 */
  box-shadow: none;
  text-shadow: 0 -1px 0 #1e3c5e;
}
#pswd_info {
  position: absolute;
  bottom: -75px;
  bottom: -115px\9;
  /* IE Specific */
  right: 55px;
  width: 250px;
  padding: 15px;
  background: #fefefe;
  font-size: .875em;
  border-radius: 5px;
  box-shadow: 0 1px 3px #ccc;
  border: 1px solid #ddd;
}
#pswd_info h4 {
  margin: 0 0 10px 0;
  padding: 0;
  font-weight: normal;
}
#pswd_info::before {
  content: "\25B2";
  position: absolute;
  top: -12px;
  left: 45%;
  font-size: 14px;
  line-height: 14px;
  color: #ddd;
  text-shadow: none;
  display: block;
}
.invalid {
  background: url(../images/invalid.png) no-repeat 0 50%;
  padding-left: 22px;
  line-height: 24px;
  color: #ec3f41;
}
.valid {
  background: url(../images/valid.png) no-repeat 0 50%;
  padding-left: 22px;
  line-height: 24px;
  color: #3a7d34;
}
#pswd_info {
  display: none;
}
</style>
</head>

<body>
  <div id="container">
    <h1>Password Verification</h1>
    <form id="registro">
      <ul>
        <li>
          <label for="username">Username:</label>
          <span><input id="username" name="username" type="text" /></span>
        </li>
        <li>
          <label for="pswd">Password:</label>
          <span><input id="pswd" type="password" name="pswd" /></span>
        </li>
        <li>
          <button type="submit">Register</button>
        </li>
      </ul>
    </form>
  </div>
  <div id="pswd_info">
    <h4>Password must meet the following requirements:</h4>
    <ul>
      <li id="letter" class="invalid">At least <strong>one letter</strong>
      </li>
      <li id="capital" class="invalid">At least <strong>one capital letter</strong>
      </li>
      <li id="number" class="invalid">At least <strong>one number</strong>
      </li>
      <li id="length" class="invalid">Be at least <strong>8 characters</strong>
      </li>
    </ul>
  </div>
</body>

</html>
 EjecutarEsconder resultados