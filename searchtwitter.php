<head><link rel="stylesheet" type="text/css" href="css/searchtwitter.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous"></head>

<div class="search__twitter">
<h2>Search<span> Twitter</span> for Essential <span>Resources</span></h2>

<div class="twitter__search__form">

<form action="twitterresult.php" method="post">
<ul class="ks-cboxtags" style="padding:0;">
 <li> <input type="checkbox" id="beds" name="services[]" value="beds" checked>
  <label for="beds">Beds</label></li>
  <li><input type="checkbox" id="plasma" name="services[]" value="plasma">
  <label for="plasma">Plasma</label></li>
  <li><input type="checkbox" id="oxygen" name="services[]" value="oxygen" checked>
  <label for="oxygen">Oxygen</label></li>
  <li><input type="checkbox" id="injections" name="services[]" value="injections">
  <label for="injections">Injections</label></li>
  <li> <input type="checkbox" id="icu" name="services[]" value="icu">
  <label for="icu">ICU</label></li>
  <li><input type="checkbox" id="ventilators" name="services[]" value="ventilators" checked>
  <label for="ventilators">Ventilators</label></li>
  <li><input type="checkbox" id="fabiflu" name="services[]" value="fabiflu">
  <label for="fabiflu">Fabiflu</label></li>
  <li><input type="checkbox" id="remdesivir" name="services[]" value="remdesivir">
  <label for="remdesivir">Remdesivir</label></li>
  <li><input type="checkbox" id="favipiravir" name="services[]" value="favipiravir">
  <label for="favipiravir">Favipiravir</label></li>
  <li> <input type="checkbox" id="tocilizumab" name="services[]" value="tocilizumab">
  <label for="tocilizumab">Tocilizumab</label></li>
  <li><input type="checkbox" id="tiffin" name="services[]" value="tiffin">
  <label for="tiffin">Tiffin</label></li>
  <li><input type="checkbox" id="medicines" name="services[]" value="medicines">
  <label for="medicines">Medicines</label></li>
 <input class="services" type="text" id="services" name="servicesstring" placeholder="Search other services!"><br><br>
 <div class="city__container">
 <label class="city__label" for="city">CITY:</label>
  <input class="city__input" type="text" id="city" name="city" placeholder="Enter only one city!">
 </div><br><br>
  <input class="twitter__submit" type="submit">
  
  
</form>
</div>
</div>