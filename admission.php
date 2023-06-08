
<!DOCTYPE html>

<head>
    <title></title>
    <meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- CSRF Token -->
<link rel="apple-touch-icon" sizes="180x180" href="https://sis.fatima.edu.ph/assets/icons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://sis.fatima.edu.ph/assets/icons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://sis.fatima.edu.ph/assets/icons/favicon-16x16.png">
<link rel="manifest" href="https://sis.fatima.edu.ph/assets/icons/site.webmanifest">
<link rel="mask-icon" href="https://sis.fatima.edu.ph/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="https://sis.fatima.edu.ph/assets/icons/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-config" content="https://sis.fatima.edu.ph/assets/icons/browserconfig.xml">
<meta name="theme-color" content="#008C44">    <!-- CSRF Token -->
    <meta name="csrf-token" content="KWCNeMXFpq83f6vg6aJsgIXk4Rh5LZAAc0umXF0c">
    <link rel="stylesheet" href="https://sis.fatima.edu.ph/assets/css/admin/module.admin.page.login.min.css" />
    <link rel="stylesheet" href="https://sis.fatima.edu.ph/assets/css/admin/module.main.css" />
    

    <script src="https://sis.fatima.edu.ph/assets/components/library/jquery/jquery.min.js?v=v2.1.0"></script>
<script src="https://sis.fatima.edu.ph/assets/components/library/jquery/jquery-migrate.min.js?v=v2.1.0"></script>
<script src="https://sis.fatima.edu.ph/assets/components/library/modernizr/modernizr.js?v=v2.1.0"></script>
<script src="https://sis.fatima.edu.ph/assets/components/plugins/less-js/less.min.js?v=v2.1.0"></script>
<script src="https://sis.fatima.edu.ph/assets/components/modules/admin/charts/flot/assets/lib/excanvas.js?v=v2.1.0"></script>
<script src="https://sis.fatima.edu.ph/assets/components/plugins/browser/ie/ie.prototype.polyfill.js?v=v2.1.0"></script>  

<style>
    .text-darker{
        color: #111 !important;
    }
    .text-dark{
        color: #333 !important;
    }
    i::before{
        color: inherit !important;
    }
    .required-mark{
        color: red;
    }
    .error {
        color: red !important;
    }
    select.error,input.error {
        border: 1px solid red !important;
    }
</style>
<!-- Scripts -->
<script>
    window.Laravel = {"csrfToken":"KWCNeMXFpq83f6vg6aJsgIXk4Rh5LZAAc0umXF0c"};
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<style>
    body{
        background: #fff;
    }
	.garamond{
		font-family: 'EB Garamond', serif;
	}
	
</style>
<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
</head>
<body style=" background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(img/backgroundpic.png)">
    
    <!-- Wrapper -->
<div>
    <br><br>
    
    <div class="container">
    
        <div class="content-wrapper">
            
            <h2 class="text-dark text-center"><i class=""></i></h2>
            <br>
            <div class="alert alert-info">
                <div class="alert-body">
                    <h3 class="text-danger">NOTES:</h3>
                    <ul>
                        <li>Fields with asterisk (<span class="required-mark">*</span>) are required.</li>
                        <li>Put a WORKING e-mail, verification will be sent to your e-mail.</li>
                    </ul>
                </div>    
            </div>
            <div class="widget">
                <div class="widget-body">
                    <!-- Form -->
                    <form id='form_signup' method="post" action="https://sis.fatima.edu.ph/verifyapplication" autocomplete="off">
                    <input type="hidden" name="_token" value="KWCNeMXFpq83f6vg6aJsgIXk4Rh5LZAAc0umXF0c">
                        <input type="hidden" name="_token" value="KWCNeMXFpq83f6vg6aJsgIXk4Rh5LZAAc0umXF0c">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="text-success text-uppercase heading glyphicons book"><strong>Admission Form</strong></h4>
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Last Name</label>
                                    <input type="text" class="form-control" placeholder="Your Last Name" name='appLastName' value="" required/>  
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>First Name</label>
                                    <input type="text" class="form-control" placeholder="Your First Name" name='appFirstName' required/>  
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2">
                                <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" class="form-control" placeholder="Your Middle Name" name='appMiddleName' /> 
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2">
                                <div class="form-group">
                                    <label>Suffix</label>
                                    <input type="text" class="form-control" placeholder="Your Suffix" name='appSuffix' /> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group ">
        <label class=""><span class="required-mark">*</span>Date of Birth</label>
        <input type="text" class="form-control text-center"  name="appBDate" id="appBDate" placeholder="YYYY-MM-DD"/>
</div>                             </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Your Email Address" name='appEmailAddress' required/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label>Facebook Account</label>
                                    <input type="text" class="form-control" placeholder="Your Facebook Account" name='appFacebook' />  
                                </div>
                            </div>
                            <div class="col-sm-12"></div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Country Code</label>
                                    <select name="appCountryCode" id="appCountryCode" class="form-control" required>
<option value="1" data-area_code="+63" data-country_code="PH"  >+63 (PHILIPPINES)</option><option value="2" data-area_code="+93" data-country_code="AF"  >+93 (AFGHANISTAN)</option><option value="3" data-area_code="+355" data-country_code="Al"  >+355 (ALBANIA)</option><option value="4" data-area_code="+213" data-country_code="DZ"  >+213 (ALGERIA)</option><option value="6" data-area_code="+54" data-country_code="AR"  >+54 (ARGENTINA)</option><option value="7" data-area_code="+374" data-country_code="AM"  >+374 (ARMENIA)</option><option value="8" data-area_code="+61" data-country_code="AU"  >+61 (AUSTRALIA)</option><option value="9" data-area_code="+43" data-country_code="AT"  >+43 (AUSTRIA)</option><option value="10" data-area_code="+994" data-country_code="AZ"  >+994 (AZERBAIJAN)</option><option value="11" data-area_code="+1242" data-country_code="BS"  >+1242 (BAHAMAS)</option><option value="12" data-area_code="+973" data-country_code="BH"  >+973 (BAHRAIN)</option><option value="13" data-area_code="+1246" data-country_code="BB"  >+1246 (BARBADOS)</option><option value="14" data-area_code="+32" data-country_code="BE"  >+32 (BELGIUM)</option><option value="15" data-area_code="+975" data-country_code="BT"  >+975 (BHUTAN)</option><option value="16" data-area_code="+591" data-country_code=""  >+591 (BOLIVIA)</option><option value="17" data-area_code="+387" data-country_code=""  >+387 (BOSNIA & HERZEGOVINA)</option><option value="18" data-area_code="+55" data-country_code=""  >+55 (BRAZIL)</option><option value="19" data-area_code="+673" data-country_code=""  >+673 (BRUNEI)</option><option value="20" data-area_code="+359" data-country_code=""  >+359 (BULGARIA)</option><option value="21" data-area_code="+95" data-country_code=""  >+95 (BURMA)</option><option value="22" data-area_code="+855" data-country_code=""  >+855 (CAMBODIA)</option><option value="23" data-area_code="+237" data-country_code=""  >+237 (CAMEROON)</option><option value="24" data-area_code="+1" data-country_code=""  >+1 (CANADA)</option><option value="25" data-area_code="+236" data-country_code=""  >+236 (CENTRAL AFRICAN REPUBLIC)</option><option value="26" data-area_code="+56" data-country_code=""  >+56 (CHILE)</option><option value="27" data-area_code="+86" data-country_code=""  >+86 (CHINA)</option><option value="28" data-area_code="+57" data-country_code=""  >+57 (COLOMBIA)</option><option value="29" data-area_code="+242" data-country_code=""  >+242 (CONGO)</option><option value="30" data-area_code="+506" data-country_code=""  >+506 (COSTA RICA)</option><option value="31" data-area_code="+385" data-country_code=""  >+385 (CROATIA)</option><option value="32" data-area_code="+53" data-country_code=""  >+53 (CUBA)</option><option value="33" data-area_code="+357" data-country_code=""  >+357 (CYPRUS)</option><option value="34" data-area_code="+420" data-country_code=""  >+420 (CZECH REPUBLIC)</option><option value="35" data-area_code="+45" data-country_code=""  >+45 (DENMARK)</option><option value="36" data-area_code="+1809" data-country_code=""  >+1809 (DOMINICAN REPUBLIC)</option><option value="37" data-area_code="+593" data-country_code=""  >+593 (ECUADOR)</option><option value="38" data-area_code="+20" data-country_code=""  >+20 (EGYPT)</option><option value="39" data-area_code="+503" data-country_code=""  >+503 (EL SALVADOR)</option><option value="40" data-area_code="+372" data-country_code=""  >+372 (ESTONIA)</option><option value="41" data-area_code="+251" data-country_code=""  >+251 (ETHIOPIA)</option><option value="42" data-area_code="+679" data-country_code=""  >+679 (FIJI)</option><option value="43" data-area_code="+358" data-country_code=""  >+358 (FINLAND)</option><option value="44" data-area_code="+33" data-country_code=""  >+33 (FRANCE)</option><option value="45" data-area_code="+241" data-country_code=""  >+241 (GABON)</option><option value="46" data-area_code="+220" data-country_code=""  >+220 (GAMBIA)</option><option value="47" data-area_code="+995" data-country_code=""  >+995 (GEORGIA)</option><option value="48" data-area_code="+49" data-country_code=""  >+49 (GERMANY)</option><option value="49" data-area_code="+233" data-country_code=""  >+233 (GHANA)</option><option value="50" data-area_code="+30" data-country_code=""  >+30 (GREECE)</option><option value="51" data-area_code="+1473" data-country_code=""  >+1473 (GRENADA)</option><option value="52" data-area_code="+502" data-country_code=""  >+502 (GUATEMALA)</option><option value="53" data-area_code="+509" data-country_code=""  >+509 (HAITI)</option><option value="54" data-area_code="+852" data-country_code=""  >+852 (HONG KONG)</option><option value="55" data-area_code="+36" data-country_code=""  >+36 (HUNGARY)</option><option value="56" data-area_code="+354" data-country_code=""  >+354 (ICELAND)</option><option value="57" data-area_code="+91" data-country_code=""  >+91 (INDIA)</option><option value="58" data-area_code="+62" data-country_code=""  >+62 (INDONESIA)</option><option value="59" data-area_code="+98" data-country_code=""  >+98 (IRAN)</option><option value="60" data-area_code="+964" data-country_code=""  >+964 (IRAQ)</option><option value="61" data-area_code="+353" data-country_code=""  >+353 (IRELAND)</option><option value="62" data-area_code="+972" data-country_code=""  >+972 (ISRAEL)</option><option value="63" data-area_code="+39" data-country_code=""  >+39 (ITALY)</option><option value="64" data-area_code="+1876" data-country_code=""  >+1876 (JAMAICA)</option><option value="65" data-area_code="+81" data-country_code=""  >+81 (JAPAN)</option><option value="66" data-area_code="+962" data-country_code=""  >+962 (JORDAN)</option><option value="67" data-area_code="+7" data-country_code=""  >+7 (KAZAKHSTAN)</option><option value="68" data-area_code="+254" data-country_code=""  >+254 (KENYA)</option><option value="69" data-area_code="+850" data-country_code=""  >+850 (NORTH KOREA)</option><option value="70" data-area_code="+82" data-country_code=""  >+82 (SOUTH KOREA)</option><option value="71" data-area_code="+965" data-country_code=""  >+965 (KUWAIT)</option><option value="72" data-area_code="+996" data-country_code=""  >+996 (KYRGYZSTAN)</option><option value="73" data-area_code="+856" data-country_code=""  >+856 (LAOS)</option><option value="74" data-area_code="+961" data-country_code=""  >+961 (LEBANON)</option><option value="75" data-area_code="+231" data-country_code=""  >+231 (LIBERIA)</option><option value="76" data-area_code="+218" data-country_code=""  >+218 (LIBYA)</option><option value="77" data-area_code="+370" data-country_code=""  >+370 (LITHUANIA)</option><option value="78" data-area_code="+389" data-country_code=""  >+389 (MACEDONIA)</option><option value="79" data-area_code="+261" data-country_code=""  >+261 (MADAGASCAR)</option><option value="80" data-area_code="+60" data-country_code=""  >+60 (MALAYSIA)</option><option value="81" data-area_code="+356" data-country_code=""  >+356 (MALTA)</option><option value="82" data-area_code="+52" data-country_code=""  >+52 (MEXICO)</option><option value="83" data-area_code="+373" data-country_code=""  >+373 (MOLDOVA)</option><option value="84" data-area_code="+377" data-country_code=""  >+377 (MONACO)</option><option value="85" data-area_code="+976" data-country_code=""  >+976 (MONGOLIA)</option><option value="86" data-area_code="+212" data-country_code=""  >+212 (MOROCCO)</option><option value="87" data-area_code="+258" data-country_code=""  >+258 (MOZAMBIQUE)</option><option value="88" data-area_code="+95" data-country_code=""  >+95 (MYANMAR)</option><option value="89" data-area_code="+264" data-country_code=""  >+264 (NAMIBIA)</option><option value="91" data-area_code="+31" data-country_code=""  >+31 (NETHERLANDS)</option><option value="92" data-area_code="+687" data-country_code=""  >+687 (NEW CALEDONIA)</option><option value="93" data-area_code="+64" data-country_code=""  >+64 (NEW ZEALAND)</option><option value="94" data-area_code="+505" data-country_code=""  >+505 (NICARAGUA)</option><option value="95" data-area_code="+234" data-country_code=""  >+234 (NIGERIA)</option><option value="96" data-area_code="+47" data-country_code=""  >+47 (NORWAY)</option><option value="97" data-area_code="+968" data-country_code=""  >+968 (OMAN)</option><option value="98" data-area_code="+92" data-country_code=""  >+92 (PAKISTAN)</option><option value="99" data-area_code="+507" data-country_code=""  >+507 (PANAMA)</option><option value="100" data-area_code="+675" data-country_code=""  >+675 (PAPUA NEW GUINEA)</option><option value="101" data-area_code="+595" data-country_code=""  >+595 (PARAGUAY)</option><option value="103" data-area_code="+48" data-country_code=""  >+48 (POLAND)</option><option value="104" data-area_code="+351" data-country_code=""  >+351 (PORTUGAL)</option><option value="105" data-area_code="+1787" data-country_code=""  >+1787 (PUERTO RICO)</option><option value="106" data-area_code="+974" data-country_code=""  >+974 (QATAR)</option><option value="107" data-area_code="+40" data-country_code=""  >+40 (ROMANIA)</option><option value="108" data-area_code="+7" data-country_code=""  >+7 (RUSSIA)</option><option value="109" data-area_code="+250" data-country_code=""  >+250 (RWANDA)</option><option value="110" data-area_code="+685" data-country_code=""  >+685 (SAMOA)</option><option value="111" data-area_code="+966" data-country_code=""  >+966 (SAUDI ARABIA)</option><option value="112" data-area_code="+221" data-country_code=""  >+221 (SENEGAL)</option><option value="113" data-area_code="+381" data-country_code=""  >+381 (SERBIA)</option><option value="114" data-area_code="+65" data-country_code=""  >+65 (SINGAPORE)</option><option value="115" data-area_code="+421" data-country_code=""  >+421 (SLOVAKIA)</option><option value="116" data-area_code="+386" data-country_code=""  >+386 (SLOVENIA)</option><option value="117" data-area_code="+252" data-country_code=""  >+252 (SOMALIA)</option><option value="118" data-area_code="+27" data-country_code=""  >+27 (SOUTH AFRICA)</option><option value="119" data-area_code="+34" data-country_code=""  >+34 (SPAIN)</option><option value="120" data-area_code="+94" data-country_code=""  >+94 (SRI LANKA)</option><option value="121" data-area_code="+249" data-country_code=""  >+249 (SUDAN)</option><option value="122" data-area_code="+46" data-country_code=""  >+46 (SWEDEN)</option><option value="123" data-area_code="+41" data-country_code=""  >+41 (SWITZERLAND)</option><option value="124" data-area_code="+963" data-country_code=""  >+963 (SYRIA)</option><option value="125" data-area_code="+886" data-country_code=""  >+886 (TAIWAN)</option><option value="126" data-area_code="+992" data-country_code=""  >+992 (TAJIKISTAN)</option><option value="127" data-area_code="+255" data-country_code=""  >+255 (TANZANIA)</option><option value="128" data-area_code="+66" data-country_code=""  >+66 (THAILAND)</option><option value="129" data-area_code="+1868" data-country_code=""  >+1868 (TRINIDAD & TOBAGO)</option><option value="130" data-area_code="+216" data-country_code=""  >+216 (TUNISIA)</option><option value="131" data-area_code="+90" data-country_code=""  >+90 (TURKEY)</option><option value="132" data-area_code="+256" data-country_code=""  >+256 (UGANDA)</option><option value="133" data-area_code="+380" data-country_code=""  >+380 (UKRAINE)</option><option value="134" data-area_code="+971" data-country_code=""  >+971 (UNITED ARAB EMIRATES)</option><option value="135" data-area_code="+44" data-country_code=""  >+44 (UNITED KINGDOM)</option><option value="136" data-area_code="+1" data-country_code=""  >+1 (UNITED STATES OF AMERICA)</option><option value="137" data-area_code="+598" data-country_code=""  >+598 (URUGUAY)</option><option value="138" data-area_code="+998" data-country_code=""  >+998 (UZBEKISTAN)</option><option value="139" data-area_code="+678" data-country_code=""  >+678 (VANUATU)</option><option value="140" data-area_code="+58" data-country_code=""  >+58 (VENEZUELA)</option><option value="141" data-area_code="+84" data-country_code=""  >+84 (VIETNAM)</option><option value="142" data-area_code="+967" data-country_code=""  >+967 (YEMEN)</option><option value="143" data-area_code="+38" data-country_code=""  >+38 (YUGOSLAVIA)</option><option value="144" data-area_code="+260" data-country_code=""  >+260 (ZAMBIA)</option><option value="145" data-area_code="+263" data-country_code=""  >+263 (ZIMBABWE)</option><option value="255" data-area_code="+51" data-country_code=""  >+51 (PERU)</option><option value="258" data-area_code="+244" data-country_code=""  >+244 (ANGOLA)</option><option value="259" data-area_code="+977" data-country_code=""  >+977 (NEPAL)</option>
</select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Mobile No.</label>
                                    <input type="text" class="form-control" placeholder="Ex: 91234567890" name='appMobileNumber' maxlength="10" required/> 
                                </div>
                            </div>
                           
                            <div class="col-sm-12"></div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Classified As</label>
                                    <select class="form-control" id="appStatus" required name="appStatus"><option value="" selected="selected">- status -</option><option value="N">New</option><option value="T">Transferee</option><option value="C">Cross-enrolee</option><option value="D">2nd Courser</option><option value="O">Others</option></select>                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Department</label>
                                    <select class="form-control" id="appDept" required name="appDept"><option value="" selected="selected">- Program Type -</option><option value="K">K12 Kinder</option><option value="E">K12 Elementary</option><option value="H">K12 Junior High School</option><option value="S">K12 Senior High School</option><option value="C">College</option><option value="G">Graduate School</option><option value="T">ETEAAP</option><option value="I">Associate</option><option value="M">Medicine</option><option value="Y">Dentistry</option></select>                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                           
                                    </select>
                                </div>
                            </div>
                            <div class="lastSchoolAtt">
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label>CHOOSE STRAND</label>
                                        <select name="lastSchoolAtt" id="lastSchoolAtt" class="form-control" onchange="javascript:getaddress(this); return false;">
                                            <option value=""   >- SELECT STRAND -</option><option value="11876" data-address="Candaba, Pampanga" data-type="" data-school="1"  > St. Andrew's Archdiocesan School of Candaba</option><option value="11043" data-address="Naruangan, Tuao, Cagayan" data-type="" data-school="0"  > Tuao Vocational and Technical School</option><option value="12004" data-address="" data-type="" data-school="0"  > Vicenta C. Nograles National High School</option><option value="3946" data-address="" data-type="" data-school="0"  >(Consul) Louella G. Alcoba NHS</option><option value="7939" data-address="" data-type="" data-school="0"  >(New) Saint Andrew School</option><option value="9259" data-address="" data-type="" data-school="0"  >1 and All Technical School</option><option value="5449" data-address="" data-type="" data-school="0"  >14 Institute of Technology</option><option value="5450" data-address="" data-type="" data-school="0"  >14 Regional Science HS</option><option value="5451" data-address="" data-type="" data-school="0"  >14 State University-Cabadbaran</option><option value="5452" data-address="" data-type="" data-school="0"  >14 State University-Main Campus</option><option value="4882" data-address="" data-type="" data-school="0"  >17 Regional Science High School</option><option value="11926" data-address="" data-type="" data-school="0"  >2ND PHILIPPINE INTERNATIONAL SCHOOL</option><option value="10284" data-address="" data-type="" data-school="0"  >4A School of Excellence, Inc.</option><option value="5810" data-address="" data-type="" data-school="0"  >4th Watch Maranatha Christian Academy of Makati</option><option value="11458" data-address="S. Teodoro St. Tondo, Manila

" data-type="" data-school="

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label>School Address</label>
                                        <input class="form-control text-uppercase schoolAddress" name="schooladdress">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label>School Type</label>
                                        <select name="schoolTypes" id="schoolTypes" class="form-control schoolType" disabled>
                                            <option value=""></option>
                                            <option value="0">Public</option>
                                            <option value="1">Private</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Year Level</label>
                                    <select class="form-control" id="appYearLevel" required name="appYearLevel"><option value="" selected="selected">- level -</option><option value="1">First Year</option><option value="2">Second Year</option><option value="3">Third Year</option><option value="4">Fourth Year</option><option value="5">Fifth Year</option><option value="6">Sixth Year</option></select>                                    <select name="blankYearLevel" id="blankYearLevel" class="form-control" required>
                                        <option value="">- Level - </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Citizenship</label>
                                    <select class="form-control" id="appCitizenship" required name="appCitizenship"><option value="" selected="selected">- citizenship -</option><option value="AFG">Afghan</option><option value="ALB">Albanian</option><option value="ALG">Algerian</option><option value="AMR">AMERICAN</option><option value="AND">Andorran</option><option value="ANG">Angolan</option><option value="ANT">Antiguans</option><option value="ARG">Argentinean</option><option value="ARM">Armenian</option><option value="AUS">Australian</option><option value="ATN">Austrian</option><option value="AZB">Azerbaijani</option><option value="BAHM">Bahamian</option><option value="BARN">Bahraini</option><option value="BANG">Bangladeshi</option><option value="BRBN">Barbadian</option><option value="BRBU">Barbudans</option><option value="BTWN">Batswana</option><option value="BEL">Belarusian</option><option value="BELG">Belgian</option><option value="BELZ">Belizean</option><option value="BEN">Beninese</option><option value="BHUT">Bhutanese</option><option value="BOLV">Bolivian</option><option value="BOSN">Bosnian</option><option value="BRZN">Brazilian</option><option value="BTSH">British</option><option value="BRU">Bruneian</option><option value="BLGR">Bulgarian</option><option value="BURK">Burkinabe</option><option value="BURM">Burmese</option><option value="BRDN">Burundian</option><option value="CAMB">Cambodian</option><option value="CAMR">Cameroonian</option><option value="CND">Canadian</option><option value="CVER">Cape Verdean</option><option value="CAFR">Central African</option><option value="CHAD">Chadian</option><option value="CHIL">Chilean</option><option value="CHI">Chinese</option><option value="CLBN">Colombian</option><option value="CMRN">Comoran</option><option value="CNGL">Congolese</option><option value="CRCA">Costa Rican</option><option value="CROA">Croatian</option><option value="CUB">Cuban</option><option value="CYP">Cypriot</option><option value="CZE">Czech</option><option value="DAN">Danish</option><option value="DJI">Djibouti</option><option value="DOM">Dominican</option><option value="DUT">Dutch</option><option value="ESTT">East Timorese</option><option value="ECUA">Ecuadorean</option><option value="EGYT">Egyptian</option><option value="EMI">Emirian</option><option value="EQGI">Equatorial Guinean</option><option value="ERT">Eritrean</option><option value="EST">Estonian</option><option value="ETH">Ethiopian</option><option value="FIJ">Fijian</option><option value="FIL">Filipino</option><option value="FIN">Finnish</option><option value="FRE">French</option><option value="GAB">Gabonese</option><option value="GAMB">Gambian</option><option value="GEO">Georgian</option><option value="GER">German</option><option value="GHA">Ghanaian</option><option value="GRE">Greek</option><option value="GREN">Grenadian</option><option value="GTML">Guatemalan</option><option value="GUI">Guinea-Bissauan</option><option value="GUIN">Guinean</option><option value="GUY">Guyanese</option><option value="HAIT">Haitian</option><option value="HERZ">Herzegovinian</option><option value="HUND">Honduran</option><option value="HURN">Hungarian</option><option value="IKIR">I-Kiribati</option><option value="ILDR">Icelander</option><option value="IND">Indian</option><option value="INDO">Indonesian</option><option value="IRAN">Iranian</option><option value="IRQ">Iraqi</option><option value="IRI">Irish</option><option value="ISRI">Israeli</option><option value="ITLN">Italian</option><option value="IVO">Ivorian</option><option value="JAM">Jamaican</option><option value="JAP">Japanese</option><option value="JOR">Jordanian</option><option value="KAZ">Kazakhstani</option><option value="KEN">Kenyan</option><option value="KINE">Kittian and Nevisian</option><option value="KWT">Kuwaiti</option><option value="KYR">Kyrgyz</option><option value="LAO">Laotian</option><option value="LVN">Latvian</option><option value="LEB">Lebanese</option><option value="LBRN">Liberian</option><option value="LBYN">Libyan</option><option value="LIE">Liechtensteiner</option><option value="LITH">Lithuanian</option><option value="LUX">Luxembourger</option><option value="MAC">Macedonian</option><option value="MGSY">Malagasy</option><option value="MLW">Malawian</option><option value="MAL">Malaysian</option><option value="MALD">Maldivian</option><option value="MLN">Malian</option><option value="MALT">Maltese</option><option value="MRSH">Marshallese</option><option value="MRTN">Mauritanian</option><option value="MAU">Mauritian</option><option value="MEX">Mexican</option><option value="MIC">Micronesian</option><option value="MOLD">Moldovan</option><option value="MON">Monacan</option><option value="MGLN">Mongolian</option><option value="MOR">Moroccan</option><option value="MOS">Mosotho</option><option value="MWN">Motswana</option><option value="MOZ">Mozambican</option><option value="NAM">Namibian</option><option value="NAU">Nauruan</option><option value="NEP">Nepalese</option><option value="NZE">New Zealander</option><option value="NVAN">Ni-Vanuatu</option><option value="NICA">Nicaraguan</option><option value="NIGA">Nigerian</option><option value="NIGE">Nigerien</option><option value="NKR">North Korean</option><option value="NOIR">Northern Irish</option><option value="NORW">Norwegian</option><option value="NA">Not in the List</option><option value="OMN">Omani</option><option value="PAK">Pakistani</option><option value="PAL">Palauan</option><option value="PALE">Palestinian</option><option value="PAN">Panamanian</option><option value="PNG">Papua New Guinean</option><option value="PARA">Paraguayan</option><option value="PER">Peruvian</option><option value="POL">Polish</option><option value="POR">Portuguese</option><option value="QTR">Qatari</option><option value="RMN">Romanian</option><option value="RUSN">Russian</option><option value="RWN">Rwandan</option><option value="SLC">Saint Lucian</option><option value="SLV">Salvadoran</option><option value="SMN">Samoan</option><option value="SNMR">San Marinese</option><option value="STO">Sao Tomean</option><option value="SAU">Saudi</option><option value="SCO">Scottish</option><option value="SGL">Senegalese</option><option value="SRB">Serbian</option><option value="SCL">Seychellois</option><option value="SILO">Sierra Leonean</option><option value="SING">Singaporean</option><option value="SLVK">Slovakian</option><option value="SLVN">Slovenian</option><option value="SLIS">Solomon Islander</option><option value="SOM">Somali</option><option value="SOAF">South African</option><option value="SKR">South Korean</option><option value="SPN">Spanish</option><option value="SRL">Sri Lankan</option><option value="SUD">Sudanese</option><option value="SUR">Surinamer</option><option value="SWA">Swazi</option><option value="SWE">Swedish</option><option value="SWI">Swiss</option><option value="SYR">Syrian</option><option value="TWN">TAIWANESE</option><option value="TJK">Tajik</option><option value="TNZ">Tanzanian</option><option value="THAI">Thai</option><option value="TOB">Tobagonian</option><option value="TOG">Togolese</option><option value="TONG">Tongan</option><option value="TRI">Trinidadian</option><option value="TUN">Tunisian</option><option value="TUV">Tuvaluan</option><option value="UGN">Ugandan</option><option value="UKR">Ukrainian</option><option value="URU">Uruguayan</option><option value="UZB">Uzbekistani</option><option value="VEN">Venezuelan</option><option value="VIET">Vietnamese</option><option value="WEL">Welsh</option><option value="YEM">Yemenite</option><option value="ZAMB">Zambian</option><option value="ZIMB">Zimbabwean</option></select>                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>School Year</label>
                                    <select class="form-control" id="appSY" required name="appSY"><option value="" selected="selected">- Select SY -</option><option value="2223">2022-2023</option><option value="2324">2023-2024</option></select>                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-2">
                                <div class="form-group">
                                    <label><span class="required-mark">*</span>Semester</label>
                                    <select class="form-control" id="appSem" required name="appSem"><option value="" selected="selected">- Select Sem -</option><option value="A">First Semester</option><option value="B">Second Semester</option></select>                                </div>
                            </div>
                            <div class="col-sm-12">
                                <hr>
                                <div class="">
<button class="btn btn-success btn-block btn-lg" style="white-space: normal !important;" type="button" id="admitBtn">Submit Admission Form</button>
                                                                                                            </div>
                            </div>
                                                    </div>
                        
                    </form>
                    <!-- // Form END -->
                </div>
            </div>
            <!-- // Box END -->
        </div>
    </div>
    
</div>
<!-- // Wrapper END -->
<!-- Global -->
<script>

    $("#form_signup").validate({
        rules: {
            appLastName: {
                "required": true,
                "validname": true
            },
            appFirstName: {
                "validname": true
            },
            appMiddleName: {
                "validname": true
            },
            appCountryCode: "required",
            appBDate: "required",
            appEmailAddress: {
                "required" : true,
                "email": true
            },
            appMobileNumber: {
                "required": true,
                "phoneUS": true
            },
            appTelNumber: {
                "telephone" : true
            },
            appSY: {
                "required": true
            },
            appSem: {
                "required": true
            },
        },
    });
    $('[name="appMobileNumber"]').on('keydown',function(e){
        var allowed = ['Backspace','Delete','Tab','0'];
        var isValidNumber = Number(e.key) > 0;
        var isExcepted = allowed.indexOf(e.key) >= 0;
        var isArrowKey = e.key.indexOf('Arrow') == 0;
        var valid = isExcepted || isValidNumber || isArrowKey;
        return valid;
    });
    $(document).ready(function () {
        jQuery.validator.addMethod("phoneUS", function (phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return this.optional(element) || phone_number.length > 9;
        }, "Enter valid number. Sample format 9123456789");
        jQuery.validator.addMethod("telephone", function (phone_number, element) {
            phone_number = phone_number.replace(/\s+/g, "");
            return this.optional(element) || phone_number.length > 9;
        }, "Please specify a valid telephone number");


    });
    $("#blankYearLevel").show();
    $("#appYearLevel").hide();
    $("#appDept").change(function(){
        var department = $(this).val();
        if (department == "") {
            $("#appYearLevel").hide();
            $("#blankYearLevel").show();
        }
        else{
            $("#appYearLevel").show();
            $("#blankYearLevel").hide();
        }
        
        $('#appCourse').find('option').hide().filter(function(){
            var is_show = $(this).val() == "" || $(this).data('department') == department 

            $(this).prop('disabled',!is_show)
            if(!is_show){
                $(this).prop('selected',false)
            }
            return is_show
        }).show();

        resetLevel();
        resetYearLevel();
    }).trigger("change");

    function resetYearLevel(){
		var formData = {
			HSOrCollege : $("[name='appDept']").val()
		};
		$.ajax({
	
			type: "POST",
			data: formData,
			success:function(dta){
				$("#appYearLevel").html($(dta).html());
			}
		});
    }
    $("#admitBtn").on("click",function(){
     
        if($("#form_signup").valid()){
            var formData =$("#form_signup").serializeArray();
            $.ajax({
              
                type: "POST",
                data: formData,
                success:function(dta){
                    if(dta.status == 1){
                        $("#form_signup").submit();
                    }
                    else{
                        alert(dta.message);
                    }
                }
            });
        }
        
    });

    function resetLevel() {
        var formData = {
			HSOrCollege : $("[name='appDept']").val()
		};
		$.ajax({
			
			type: "POST",
			data: formData,
			success:function(dta){
				$("[name='levelFromPrevSchool']").html($(dta).html());
			}
		});
    }
    
    function mask(textbox, e) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode == 46 || charCode > 31 && (charCode < 48 || charCode > 57)){
            return false;
        }
        else{
            if (textbox.value.length == 1 || textbox.value.length == 5) {
                if (e.keyCode != 8) {
                    textbox.value = textbox.value + '-';
                }
            }
            return true;
        }
    }

    function getaddress(obj) {
        $(obj).closest('.lastSchoolAtt').find('.schoolAddress').val( $('option:selected', obj).data('address') );
        $(obj).closest('.lastSchoolAtt').find('.schoolType').val( $('option:selected', obj).data('school') );
    }


</script>
<style>
	input,select{
		text-transform: uppercase;
	}
    strong {
    font-weight: bold;
    color:#F49D1A;
}
</style>
</body>
</html> 