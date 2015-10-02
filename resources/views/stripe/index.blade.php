<form action="{{url('pay')}}" method="POST">
  <script
    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
    data-key="{{Config::get('stripe.stripe.public')}}"
    data-amount="2000"
    data-name="Demo Laravel Site"
    data-description="2 scoops of ice cream ($20.00)"
    data-image="/128x128.png">
  </script>
  <input name="_token" type="hidden" value="tXjTVK04r98J04ahUVSU55kpcxdrTfKNSLSUGMXW">
</form>
 <div class="create-payment-form-view"><form class="form">
  <div class="error form_error form_message">
  </div>
  <div class="success form_message">
  </div>
  
  <div class="fields normal"><div class="currency-dropdown-search-field-view form-row currency" style="display: block;"><label for="currency" class="default-label">Currency:</label>
<div class="dropdown-search-widget-view currency">
<div class="select2-container field" id="s2id_ov14nbli5vm6xbt9" style="width: auto;"><a href="#" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-437">USD - United States Dollar</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen437" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-437" id="s2id_autogen437"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen437_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-437" id="s2id_autogen437_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-437">   </ul></div></div><input id="ov14nbli5vm6xbt9" class="field select2-offscreen" type="hidden" name="currency" tabindex="-1" title="" value="usd">
</div>
<span class="tooltip_placeholder"></span>
<span id="currency_error" class="field_error "></span>
<span id="currency_success" class="field_success"></span>
</div><div class="currency-amount-field-view form-row amount required"><label for="amount" class="default-label">Amount:</label>
<div class="currency-amount-input-widget-view amount"><span class="currency">$</span> <input class="field" type="text" name="amount" placeholder="9.99" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==); background-attachment: scroll; background-position: 100% 50%; background-repeat: no-repeat;">
</div>
<span class="tooltip_placeholder"></span>
<span id="amount_error" class="field_error "></span>
<span id="amount_success" class="field_success"></span>
</div><div class="form-field-view form-row card[number] required"><label for="card[number]" class="default-label">Card number:</label>
<div class="text-widget-view card[number]">
<input id="m4ranw3lfke7y14i" class="field" type="text" name="card[number]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[number]_error" class="field_error "></span>
<span id="card[number]_success" class="field_success"></span>
</div><div class="form-field-view form-row card[cvc]"><label for="card[cvc]" class="default-label">CVC:</label>
<div class="text-widget-view card[cvc]">
<input id="m1jh6ded7w17zaor" class="field" type="text" name="card[cvc]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[cvc]_error" class="field_error "></span>
<span id="card[cvc]_success" class="field_success"></span>
</div><div class="month-dropdown-view form-row card[exp_month] required"><label for="card[exp_month]" class="default-label">Exp. month:</label>
<div class="dropdown-widget-view card[exp_month]"><select name="card[exp_month]" class="field">
  

  
  	
  	  <option value="1">01</option>
  	
  	  <option value="2">02</option>
  	
  	  <option value="3">03</option>
  	
  	  <option value="4">04</option>
  	
  	  <option value="5">05</option>
  	
  	  <option value="6">06</option>
  	
  	  <option value="7">07</option>
  	
  	  <option value="8">08</option>
  	
  	  <option value="9">09</option>
  	
  	  <option value="10" selected="selected">10</option>
  	
  	  <option value="11">11</option>
  	
  	  <option value="12">12</option>
  	
  
</select></div>
<span class="tooltip_placeholder"></span>
<span id="card[exp_month]_error" class="field_error "></span>
<span id="card[exp_month]_success" class="field_success"></span>
</div><div class="year-dropdown-view form-row card[exp_year] required"><label for="card[exp_year]" class="default-label">Exp. year:</label>
<div class="dropdown-widget-view card[exp_year]"><select name="card[exp_year]" class="field">
  

  
  	
  	  <option value="2015">2015</option>
  	
  	  <option value="2016" selected="selected">2016</option>
  	
  	  <option value="2017">2017</option>
  	
  	  <option value="2018">2018</option>
  	
  	  <option value="2019">2019</option>
  	
  	  <option value="2020">2020</option>
  	
  	  <option value="2021">2021</option>
  	
  	  <option value="2022">2022</option>
  	
  	  <option value="2023">2023</option>
  	
  	  <option value="2024">2024</option>
  	
  	  <option value="2025">2025</option>
  	
  	  <option value="2026">2026</option>
  	
  	  <option value="2027">2027</option>
  	
  	  <option value="2028">2028</option>
  	
  	  <option value="2029">2029</option>
  	
  
</select></div>
<span class="tooltip_placeholder"></span>
<span id="card[exp_year]_error" class="field_error "></span>
<span id="card[exp_year]_success" class="field_success"></span>
</div><div class="form-field-view form-row description"><label for="description" class="default-label">Description:</label>
<div class="text-widget-view description">
<input id="qwsxwuqr8z7iudi" class="field" type="text" name="description">
</div>
<span class="tooltip_placeholder"></span>
<span id="description_error" class="field_error "></span>
<span id="description_success" class="field_success"></span>
</div><div class="form-field-view form-row statement_descriptor"><label for="statement_descriptor" class="default-label">Statement desc:</label>
<div class="statement-description-widget-view statement_descriptor"><input class="field" type="text" name="statement_descriptor">
<div class="icon"></div>
</div>
<span class="tooltip_placeholder"></span>
<span id="statement_descriptor_error" class="field_error "></span>
<span id="statement_descriptor_success" class="field_success"></span>
</div></div>
  
  <div class="advanced-fields-container" style="">
    <hr>
    <div class="show-advanced-fields-control"><div class="disclosure-triangle-view"><a><span></span> More options</a></div></div>
    <div class="fields advanced" style="display:none"><div class="form-field-view form-row card[name]"><label for="card[name]" class="default-label">Cardholder name:</label>
<div class="text-widget-view card[name]">
<input id="3l5j4chp8xvtpgb9" class="field" type="text" name="card[name]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[name]_error" class="field_error "></span>
<span id="card[name]_success" class="field_success"></span>
</div><div class="form-field-view form-row card[address_line1]"><label for="card[address_line1]" class="default-label">Street:</label>
<div class="text-widget-view card[address_line1]">
<input id="zkhvuebhwbem6lxr" class="field" type="text" name="card[address_line1]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[address_line1]_error" class="field_error "></span>
<span id="card[address_line1]_success" class="field_success"></span>
</div><div class="form-field-view form-row card[address_line2]"><label for="card[address_line2]" class="default-label">Street (line 2):</label>
<div class="text-widget-view card[address_line2]">
<input id="c438z2ui516k1emi" class="field" type="text" name="card[address_line2]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[address_line2]_error" class="field_error "></span>
<span id="card[address_line2]_success" class="field_success"></span>
</div><div class="form-field-view form-row card[address_city]"><label for="card[address_city]" class="default-label">City:</label>
<div class="text-widget-view card[address_city]">
<input id="4nci28t147odpldi" class="field" type="text" name="card[address_city]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[address_city]_error" class="field_error "></span>
<span id="card[address_city]_success" class="field_success"></span>
</div><div class="form-field-view form-row card[address_zip]"><label for="card[address_zip]" class="default-label">Zip/Postal:</label>
<div class="text-widget-view card[address_zip]">
<input id="4gkdsaegq5ylow29" class="field" type="text" name="card[address_zip]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[address_zip]_error" class="field_error "></span>
<span id="card[address_zip]_success" class="field_success"></span>
</div><div class="form-field-view form-row card[address_state]"><label for="card[address_state]" class="default-label">State/Province:</label>
<div class="text-widget-view card[address_state]">
<input id="p9vqjv14vqyhw7b9" class="field" type="text" name="card[address_state]">
</div>
<span class="tooltip_placeholder"></span>
<span id="card[address_state]_error" class="field_error "></span>
<span id="card[address_state]_success" class="field_success"></span>
</div><div class="dropdown-field-view form-row card[address_country]"><label for="card[address_country]" class="default-label">Country:</label>
<div class="dropdown-widget-view card[address_country]"><select name="card[address_country]" class="field">
  
    <option value=""> </option>
  

  
  	
  		
  		  <option value="AF">Afghanistan</option>
  		
  	
  		
  		  <option value="AX">Åland Islands</option>
  		
  	
  		
  		  <option value="AL">Albania</option>
  		
  	
  		
  		  <option value="DZ">Algeria</option>
  		
  	
  		
  		  <option value="AS">American Samoa</option>
  		
  	
  		
  		  <option value="AD">Andorra</option>
  		
  	
  		
  		  <option value="AO">Angola</option>
  		
  	
  		
  		  <option value="AI">Anguilla</option>
  		
  	
  		
  		  <option value="AQ">Antarctica</option>
  		
  	
  		
  		  <option value="AG">Antigua and Barbuda</option>
  		
  	
  		
  		  <option value="AR">Argentina</option>
  		
  	
  		
  		  <option value="AM">Armenia</option>
  		
  	
  		
  		  <option value="AW">Aruba</option>
  		
  	
  		
  		  <option value="AU">Australia</option>
  		
  	
  		
  		  <option value="AT">Austria</option>
  		
  	
  		
  		  <option value="AZ">Azerbaijan</option>
  		
  	
  		
  		  <option value="BS">Bahamas</option>
  		
  	
  		
  		  <option value="BH">Bahrain</option>
  		
  	
  		
  		  <option value="BD">Bangladesh</option>
  		
  	
  		
  		  <option value="BB">Barbados</option>
  		
  	
  		
  		  <option value="BY">Belarus</option>
  		
  	
  		
  		  <option value="BE">Belgium</option>
  		
  	
  		
  		  <option value="BZ">Belize</option>
  		
  	
  		
  		  <option value="BJ">Benin</option>
  		
  	
  		
  		  <option value="BM">Bermuda</option>
  		
  	
  		
  		  <option value="BT">Bhutan</option>
  		
  	
  		
  		  <option value="BO">Bolivia</option>
  		
  	
  		
  		  <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
  		
  	
  		
  		  <option value="BA">Bosnia and Herzegovina</option>
  		
  	
  		
  		  <option value="BW">Botswana</option>
  		
  	
  		
  		  <option value="BV">Bouvet Island</option>
  		
  	
  		
  		  <option value="BR">Brazil</option>
  		
  	
  		
  		  <option value="IO">British Indian Ocean Territory</option>
  		
  	
  		
  		  <option value="BN">Brunei Darussalam</option>
  		
  	
  		
  		  <option value="BG">Bulgaria</option>
  		
  	
  		
  		  <option value="BF">Burkina Faso</option>
  		
  	
  		
  		  <option value="BI">Burundi</option>
  		
  	
  		
  		  <option value="KH">Cambodia</option>
  		
  	
  		
  		  <option value="CM">Cameroon</option>
  		
  	
  		
  		  <option value="CA">Canada</option>
  		
  	
  		
  		  <option value="CV">Cape Verde</option>
  		
  	
  		
  		  <option value="KY">Cayman Islands</option>
  		
  	
  		
  		  <option value="CF">Central African Republic</option>
  		
  	
  		
  		  <option value="TD">Chad</option>
  		
  	
  		
  		  <option value="CL">Chile</option>
  		
  	
  		
  		  <option value="CN">China</option>
  		
  	
  		
  		  <option value="CX">Christmas Island</option>
  		
  	
  		
  		  <option value="CC">Cocos (Keeling) Islands</option>
  		
  	
  		
  		  <option value="CO">Colombia</option>
  		
  	
  		
  		  <option value="KM">Comoros</option>
  		
  	
  		
  		  <option value="CG">Congo</option>
  		
  	
  		
  		  <option value="CD">Congo, The Democratic Republic Of The</option>
  		
  	
  		
  		  <option value="CK">Cook Islands</option>
  		
  	
  		
  		  <option value="CR">Costa Rica</option>
  		
  	
  		
  		  <option value="CI">Côte D'Ivoire</option>
  		
  	
  		
  		  <option value="HR">Croatia</option>
  		
  	
  		
  		  <option value="CU">Cuba</option>
  		
  	
  		
  		  <option value="CW">Curaçao</option>
  		
  	
  		
  		  <option value="CY">Cyprus</option>
  		
  	
  		
  		  <option value="CZ">Czech Republic</option>
  		
  	
  		
  		  <option value="DK">Denmark</option>
  		
  	
  		
  		  <option value="DJ">Djibouti</option>
  		
  	
  		
  		  <option value="DM">Dominica</option>
  		
  	
  		
  		  <option value="DO">Dominican Republic</option>
  		
  	
  		
  		  <option value="EC">Ecuador</option>
  		
  	
  		
  		  <option value="EG">Egypt</option>
  		
  	
  		
  		  <option value="SV">El Salvador</option>
  		
  	
  		
  		  <option value="GQ">Equatorial Guinea</option>
  		
  	
  		
  		  <option value="ER">Eritrea</option>
  		
  	
  		
  		  <option value="EE">Estonia</option>
  		
  	
  		
  		  <option value="ET">Ethiopia</option>
  		
  	
  		
  		  <option value="FK">Falkland Islands (Malvinas)</option>
  		
  	
  		
  		  <option value="FO">Faroe Islands</option>
  		
  	
  		
  		  <option value="FJ">Fiji</option>
  		
  	
  		
  		  <option value="FI">Finland</option>
  		
  	
  		
  		  <option value="FR">France</option>
  		
  	
  		
  		  <option value="GF">French Guiana</option>
  		
  	
  		
  		  <option value="PF">French Polynesia</option>
  		
  	
  		
  		  <option value="TF">French Southern Territories</option>
  		
  	
  		
  		  <option value="GA">Gabon</option>
  		
  	
  		
  		  <option value="GM">Gambia</option>
  		
  	
  		
  		  <option value="GE">Georgia</option>
  		
  	
  		
  		  <option value="DE">Germany</option>
  		
  	
  		
  		  <option value="GH">Ghana</option>
  		
  	
  		
  		  <option value="GI">Gibraltar</option>
  		
  	
  		
  		  <option value="GR">Greece</option>
  		
  	
  		
  		  <option value="GL">Greenland</option>
  		
  	
  		
  		  <option value="GD">Grenada</option>
  		
  	
  		
  		  <option value="GP">Guadeloupe</option>
  		
  	
  		
  		  <option value="GU">Guam</option>
  		
  	
  		
  		  <option value="GT">Guatemala</option>
  		
  	
  		
  		  <option value="GG">Guernsey</option>
  		
  	
  		
  		  <option value="GN">Guinea</option>
  		
  	
  		
  		  <option value="GW">Guinea-Bissau</option>
  		
  	
  		
  		  <option value="GY">Guyana</option>
  		
  	
  		
  		  <option value="HT">Haiti</option>
  		
  	
  		
  		  <option value="HM">Heard and McDonald Islands</option>
  		
  	
  		
  		  <option value="VA">Holy See (Vatican City State)</option>
  		
  	
  		
  		  <option value="HN">Honduras</option>
  		
  	
  		
  		  <option value="HK">Hong Kong</option>
  		
  	
  		
  		  <option value="HU">Hungary</option>
  		
  	
  		
  		  <option value="IS">Iceland</option>
  		
  	
  		
  		  <option value="IN">India</option>
  		
  	
  		
  		  <option value="ID">Indonesia</option>
  		
  	
  		
  		  <option value="IR">Iran, Islamic Republic Of</option>
  		
  	
  		
  		  <option value="IQ">Iraq</option>
  		
  	
  		
  		  <option value="IE">Ireland</option>
  		
  	
  		
  		  <option value="IM">Isle of Man</option>
  		
  	
  		
  		  <option value="IL">Israel</option>
  		
  	
  		
  		  <option value="IT">Italy</option>
  		
  	
  		
  		  <option value="JM">Jamaica</option>
  		
  	
  		
  		  <option value="JP">Japan</option>
  		
  	
  		
  		  <option value="JE">Jersey</option>
  		
  	
  		
  		  <option value="JO">Jordan</option>
  		
  	
  		
  		  <option value="KZ">Kazakhstan</option>
  		
  	
  		
  		  <option value="KE">Kenya</option>
  		
  	
  		
  		  <option value="KI">Kiribati</option>
  		
  	
  		
  		  <option value="KP">Korea, Democratic People's Republic Of</option>
  		
  	
  		
  		  <option value="KR">Korea, Republic of</option>
  		
  	
  		
  		  <option value="KW">Kuwait</option>
  		
  	
  		
  		  <option value="KG">Kyrgyzstan</option>
  		
  	
  		
  		  <option value="LA">Lao People's Democratic Republic</option>
  		
  	
  		
  		  <option value="LV">Latvia</option>
  		
  	
  		
  		  <option value="LB">Lebanon</option>
  		
  	
  		
  		  <option value="LS">Lesotho</option>
  		
  	
  		
  		  <option value="LR">Liberia</option>
  		
  	
  		
  		  <option value="LY">Libya</option>
  		
  	
  		
  		  <option value="LI">Liechtenstein</option>
  		
  	
  		
  		  <option value="LT">Lithuania</option>
  		
  	
  		
  		  <option value="LU">Luxembourg</option>
  		
  	
  		
  		  <option value="MO">Macao</option>
  		
  	
  		
  		  <option value="MK">Macedonia, the Former Yugoslav Republic Of</option>
  		
  	
  		
  		  <option value="MG">Madagascar</option>
  		
  	
  		
  		  <option value="MW">Malawi</option>
  		
  	
  		
  		  <option value="MY">Malaysia</option>
  		
  	
  		
  		  <option value="MV">Maldives</option>
  		
  	
  		
  		  <option value="ML">Mali</option>
  		
  	
  		
  		  <option value="MT">Malta</option>
  		
  	
  		
  		  <option value="MH">Marshall Islands</option>
  		
  	
  		
  		  <option value="MQ">Martinique</option>
  		
  	
  		
  		  <option value="MR">Mauritania</option>
  		
  	
  		
  		  <option value="MU">Mauritius</option>
  		
  	
  		
  		  <option value="YT">Mayotte</option>
  		
  	
  		
  		  <option value="MX">Mexico</option>
  		
  	
  		
  		  <option value="FM">Micronesia, Federated States Of</option>
  		
  	
  		
  		  <option value="MD">Moldova, Republic of</option>
  		
  	
  		
  		  <option value="MC">Monaco</option>
  		
  	
  		
  		  <option value="MN">Mongolia</option>
  		
  	
  		
  		  <option value="ME">Montenegro</option>
  		
  	
  		
  		  <option value="MS">Montserrat</option>
  		
  	
  		
  		  <option value="MA">Morocco</option>
  		
  	
  		
  		  <option value="MZ">Mozambique</option>
  		
  	
  		
  		  <option value="MM">Myanmar</option>
  		
  	
  		
  		  <option value="NA">Namibia</option>
  		
  	
  		
  		  <option value="NR">Nauru</option>
  		
  	
  		
  		  <option value="NP">Nepal</option>
  		
  	
  		
  		  <option value="NL">Netherlands</option>
  		
  	
  		
  		  <option value="AN">Netherlands Antilles</option>
  		
  	
  		
  		  <option value="NC">New Caledonia</option>
  		
  	
  		
  		  <option value="NZ">New Zealand</option>
  		
  	
  		
  		  <option value="NI">Nicaragua</option>
  		
  	
  		
  		  <option value="NE">Niger</option>
  		
  	
  		
  		  <option value="NG">Nigeria</option>
  		
  	
  		
  		  <option value="NU">Niue</option>
  		
  	
  		
  		  <option value="NF">Norfolk Island</option>
  		
  	
  		
  		  <option value="MP">Northern Mariana Islands</option>
  		
  	
  		
  		  <option value="NO">Norway</option>
  		
  	
  		
  		  <option value="OM">Oman</option>
  		
  	
  		
  		  <option value="PK">Pakistan</option>
  		
  	
  		
  		  <option value="PW">Palau</option>
  		
  	
  		
  		  <option value="PS">Palestinian Territory, Occupied</option>
  		
  	
  		
  		  <option value="PA">Panama</option>
  		
  	
  		
  		  <option value="PG">Papua New Guinea</option>
  		
  	
  		
  		  <option value="PY">Paraguay</option>
  		
  	
  		
  		  <option value="PE">Peru</option>
  		
  	
  		
  		  <option value="PH">Philippines</option>
  		
  	
  		
  		  <option value="PN">Pitcairn</option>
  		
  	
  		
  		  <option value="PL">Poland</option>
  		
  	
  		
  		  <option value="PT">Portugal</option>
  		
  	
  		
  		  <option value="PR">Puerto Rico</option>
  		
  	
  		
  		  <option value="QA">Qatar</option>
  		
  	
  		
  		  <option value="RE">Réunion</option>
  		
  	
  		
  		  <option value="RO">Romania</option>
  		
  	
  		
  		  <option value="RU">Russian Federation</option>
  		
  	
  		
  		  <option value="RW">Rwanda</option>
  		
  	
  		
  		  <option value="BL">Saint Barthélemy</option>
  		
  	
  		
  		  <option value="SH">Saint Helena</option>
  		
  	
  		
  		  <option value="KN">Saint Kitts And Nevis</option>
  		
  	
  		
  		  <option value="LC">Saint Lucia</option>
  		
  	
  		
  		  <option value="MF">Saint Martin</option>
  		
  	
  		
  		  <option value="PM">Saint Pierre And Miquelon</option>
  		
  	
  		
  		  <option value="VC">Saint Vincent And The Grenedines</option>
  		
  	
  		
  		  <option value="WS">Samoa</option>
  		
  	
  		
  		  <option value="SM">San Marino</option>
  		
  	
  		
  		  <option value="ST">Sao Tome and Principe</option>
  		
  	
  		
  		  <option value="SA">Saudi Arabia</option>
  		
  	
  		
  		  <option value="SN">Senegal</option>
  		
  	
  		
  		  <option value="RS">Serbia</option>
  		
  	
  		
  		  <option value="SC">Seychelles</option>
  		
  	
  		
  		  <option value="SL">Sierra Leone</option>
  		
  	
  		
  		  <option value="SG">Singapore</option>
  		
  	
  		
  		  <option value="SX">Sint Maarten</option>
  		
  	
  		
  		  <option value="SK">Slovakia</option>
  		
  	
  		
  		  <option value="SI">Slovenia</option>
  		
  	
  		
  		  <option value="SB">Solomon Islands</option>
  		
  	
  		
  		  <option value="SO">Somalia</option>
  		
  	
  		
  		  <option value="ZA">South Africa</option>
  		
  	
  		
  		  <option value="GS">South Georgia and the South Sandwich Islands</option>
  		
  	
  		
  		  <option value="SS">South Sudan</option>
  		
  	
  		
  		  <option value="ES">Spain</option>
  		
  	
  		
  		  <option value="LK">Sri Lanka</option>
  		
  	
  		
  		  <option value="SD">Sudan</option>
  		
  	
  		
  		  <option value="SR">Suriname</option>
  		
  	
  		
  		  <option value="SJ">Svalbard And Jan Mayen</option>
  		
  	
  		
  		  <option value="SZ">Swaziland</option>
  		
  	
  		
  		  <option value="SE">Sweden</option>
  		
  	
  		
  		  <option value="CH">Switzerland</option>
  		
  	
  		
  		  <option value="SY">Syrian Arab Republic</option>
  		
  	
  		
  		  <option value="TW">Taiwan, Republic Of China</option>
  		
  	
  		
  		  <option value="TJ">Tajikistan</option>
  		
  	
  		
  		  <option value="TZ">Tanzania, United Republic of</option>
  		
  	
  		
  		  <option value="TH">Thailand</option>
  		
  	
  		
  		  <option value="TL">Timor-Leste</option>
  		
  	
  		
  		  <option value="TG">Togo</option>
  		
  	
  		
  		  <option value="TK">Tokelau</option>
  		
  	
  		
  		  <option value="TO">Tonga</option>
  		
  	
  		
  		  <option value="TT">Trinidad and Tobago</option>
  		
  	
  		
  		  <option value="TN">Tunisia</option>
  		
  	
  		
  		  <option value="TR">Turkey</option>
  		
  	
  		
  		  <option value="TM">Turkmenistan</option>
  		
  	
  		
  		  <option value="TC">Turks and Caicos Islands</option>
  		
  	
  		
  		  <option value="TV">Tuvalu</option>
  		
  	
  		
  		  <option value="UG">Uganda</option>
  		
  	
  		
  		  <option value="UA">Ukraine</option>
  		
  	
  		
  		  <option value="AE">United Arab Emirates</option>
  		
  	
  		
  		  <option value="GB">United Kingdom</option>
  		
  	
  		
  		  <option value="US">United States</option>
  		
  	
  		
  		  <option value="UM">United States Minor Outlying Islands</option>
  		
  	
  		
  		  <option value="UY">Uruguay</option>
  		
  	
  		
  		  <option value="UZ">Uzbekistan</option>
  		
  	
  		
  		  <option value="VU">Vanuatu</option>
  		
  	
  		
  		  <option value="VE">Venezuela, Bolivarian Republic of</option>
  		
  	
  		
  		  <option value="VN">Vietnam</option>
  		
  	
  		
  		  <option value="VG">Virgin Islands, British</option>
  		
  	
  		
  		  <option value="VI">Virgin Islands, U.S.</option>
  		
  	
  		
  		  <option value="WF">Wallis and Futuna</option>
  		
  	
  		
  		  <option value="EH">Western Sahara</option>
  		
  	
  		
  		  <option value="YE">Yemen</option>
  		
  	
  		
  		  <option value="ZM">Zambia</option>
  		
  	
  		
  		  <option value="ZW">Zimbabwe</option>
  		
  	
  
</select></div>
<span class="tooltip_placeholder"></span>
<span id="card[address_country]_error" class="field_error "></span>
<span id="card[address_country]_success" class="field_success"></span>
</div><div class="form-field-view form-row receipt_email"><label for="receipt_email" class="default-label">Email for receipt:</label>
<div class="text-widget-view receipt_email">
<input id="4b58otclmv3ac3di" class="field" type="text" name="receipt_email">
</div>
<span class="tooltip_placeholder"></span>
<span id="receipt_email_error" class="field_error "></span>
<span id="receipt_email_success" class="field_success"></span>
</div><div class="checkbox-field-view form-row capture"><label class="default-label" for="capture"><div class="checkbox-widget-view capture"><input class="edit_mode field" type="checkbox" name="capture" id="capture" value="">
</div>Capture this charge<div class="field-tooltip-view"><span class="field-tooltip capture_info" title="Unchecking this causes this payment to be processed as an authorization. You have up to 7 days to capture the authorized funds.">?</span>
</div></label>

<span id="capture_error" class="field_error "></span>
<span id="capture_success" class="field_success"></span></div></div>
  </div>
  
</form>


</div>