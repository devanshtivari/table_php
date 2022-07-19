<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- cdn for bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"></script>
    <!---->
    <link rel="stylesheet" href="style.css">
    <title>User Complaint Form</title>
</head>
<body>
    <div class="container">
    <h1>Complaint Form</h1>
        <form action="database/complainant.php" method="post">
        <div class="row">
        <div class="col-md-6  mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name"  name="name" required>
          </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email"  name="email" required>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">          
            <label for="exampleFormControlInput1" class="form-label" >Medical Speciality</label>
            <select class="form-control" id="exampleFormControlInput1" name="medical_speciality" required>
                <option selected>-- Select --</option>
                <option value="1">Cardiology</option>
                <option value="2">Neurology</option>
                <option value="3">Gastroentrology</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">
            <label for="exampleFormControlInput1" class="form-label" >Year</label>
            <select class="form-control" id="exampleFormControlInput1" name="year" required>
                <option selected>-- Select --</option>
                <option value="1">1950</option>
                <option value="2">1951</option>
                <option value="3">1952</option>
                <option value="4">1953</option>
                <option value="5">1954</option>
                <option value="6">1955</option>
                <option value="7">1956</option>
                <option value="8">1957</option>
                <option value="9">1958</option>
                <option value="10">1959</option>
                <option value="11">1960</option>
                <option value="12">1961</option>
                <option value="13">1962</option>
                <option value="14">1963</option>
                <option value="15">1964</option>
                <option value="16">1965</option>
                <option value="17">1966</option>
                <option value="18">1967</option>
                <option value="19">1968</option>
                <option value="20">1969</option>
                <option value="21">1970</option>
                <option value="22">1971</option>
                <option value="23">1972</option>
                <option value="24">1973</option>
                <option value="25">1974</option>
                <option value="26">1975</option>	
                <option value="27">1976</option>
                <option value="28">1977</option>
                <option value="29">1978</option>
                <option value="30">1979</option>
                <option value="31">1980</option>
                <option value="32">1981</option>
                <option value="33">1982</option>
                <option value="34">1983</option>
                <option value="35">1984</option>
                <option value="36">1985</option>
                <option value="37">1986</option>
                <option value="38">1987</option>
                <option value="39">1988</option>
                <option value="40">1989</option>
                <option value="41">1990</option>
                <option value="42">1991</option>
                <option value="43">1992</option>
                <option value="44">1993</option>
                <option value="45">1994</option>
                <option value="46">1995</option>
                <option value="47">1996</option>
                <option value="48">1997</option>
                <option value="49">1998</option>
                <option value="50">1999</option>
                <option value="51">2000</option>
                <option value="52">2001</option>
                <option value="53">2002</option>
                <option value="54">2003</option>
                <option value="55">2004</option>
                <option value="56">2005</option>
                <option value="57">2006</option>
                <option value="58">2007</option>
                <option value="59">2008</option>
                <option value="60">2009</option>
                <option value="61">2010</option>
                <option value="62">2011</option>
                <option value="63">2012</option>
                <option value="64">2013</option>
                <option value="65">2014</option>
                <option value="66">2015</option>
                <option value="67">2016</option>
                <option value="68">2017</option>
                <option value="69">2018</option>
                <option value="70">2019</option>
                <option value="71">2020</option>
                <option value="72">2021</option>
                <option value="73">2022</option>
              </select>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">          
            <label for="exampleFormControlInput1" class="form-label" >Court</label>
            <select class="form-control" id="exampleFormControlInput1" name="court" required>
                <option selected>-- Select --</option>
                <option value="1">Supreme Court</option>
                <option value="2">High Court</option>
                <option value="3">Other</option>
            </select>
        </div>
        <div class="col-md-6 mb-3">          
            <label for="exampleFormControlInput1" class="form-label" >Case Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="case_title" required>
        </div>
        </div>
        <div class="row">
        <div class="col-md-12 mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" >Case Summary</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="case_summary" required></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mb-3" style="margin-top: 25px;">          
            <input type="submit" class="form-control" id="submit" value="Submit" name="submit">
        </div>
    </div>
    </form>
</div>
</body>
</html>