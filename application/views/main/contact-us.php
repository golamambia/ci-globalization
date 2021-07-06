<style>
  .a-class {
    font-weight: 500;
    color: #0088CB;
    text-decoration: underline;
  }

  @media screen and (min-width: 1200px) {
   
  }

  input::placeholder,
  label,
  select {
    color: #4B4B4B;
  }

  h3 {
    color: #2a597c;
  }

  #footer .footer-newsletter form {
    padding: 0px;
  }

  input,
  select {
    height: 40px;
  }
</style>

<?php 
$banner = $this->AuthModel->fetch_main_page('header_section');
$banner2 = $this->AuthModel->fetch_main_page('contact_section');?>
<section id="inner-content-hero">
    <div class="carousel-item active" style="background-image: url(<?php echo $banner2->banner_url?>)">
      <div class="carousel-container">
        <div class="container">
          <h2 class=""><?php echo $banner2->banner_heading?></h2>
          <p class=""><?php echo $banner2->banner_content?></p>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <section class="contact_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="contact_section-info-block">
              <div class="info-paragraph wow fadeInUp">
                <p style="font-size: 17px; margin-top: 15px;">Get in touch.</p>
                <p style="font-size: 17px;">
                  If you would like to talk to us about any of our services or if you have any questions, please fill
                  out the form. </p>
              </div>
              <div class="row mt-50 mb-20">
                <div class="col-2">
                  <i class="fa fa-phone contact-icon-size-cls" aria-hidden="true"></i>
                </div>
                <div class="col-10 contact-div-pad">
                  <p class="contact-desc ">
                   <?php echo $banner->contact;?>
                  </p>
                </div>
              </div>
              <div class="row mb-20">
                <div class="col-2">
                  <i class="fa fa-envelope contact-icon-size-cls" aria-hidden="true"></i>
                </div>
                <div class="col-10 contact-div-pad">
                  <p class="mb-40 ">
                    <span>For information about Globalization Solutions</span>
                    <a class="a-class" href="mailto://info@globalizationsolutions.com"><?php echo $banner->email;?></a>

                  </p>
                  <p>
                    <span>Need help?</span>
                    <a class="a-class" href="mailto://support@globalizationsolutions.com"> support@globalizationsolutions.com</a>
                  </p>
                </div>
              </div>
              <div class="row mb-40">
                <div class="col-2">
                  <i class="fa fa-map-marker contact-icon-size-cls" aria-hidden="true"></i>
                </div>
                <div class="col-10 contact-div-pad">
                  <p>
                   <?php echo $banner->address;?>
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-2">

                </div>
                <div class="col-10 contact-div-pad">
                  <p>
                    <span style="font-weight: 600;font-size: 18px;">We’re Social</span>
                  <div class="footer-icons mb-20" style="margin-top: 0px;">
                    <ul style="padding:0px">
                      <li>
                        <a href="#"><i class="bx bxl-facebook"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="bx bxl-linkedin"></i></a>
                      </li>
                    </ul>
                  </div>
                  </p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-6 col-md-6">
            <div class="contact-bg" style="background:white">
              <div class="form">
                <h3 class="mktoText form__headline" id="form-headline">
                  How Can We Assist You?
                </h3>
                <p>Submit the form below and we will contact you within one business day.</p>
                <div class="row input-mrg">
                <form role="form" method="post" action="<?=('user-contact-us');?>" enctype="multipart/form-data">
                  <div class="col-12">
                    <input type="text" placeholder=" Name*" name="rd_request_name" id="rd_request_name"
                      class="form-control">
                    <input type="text" placeholder="Business Email*" name="rd_request_bemail" id="rd_request_bemail"
                      class="form-control">
                    <input type="text" placeholder="Company Name" name="rd_request_cname" id="rd_request_cname"
                      class="form-control">
                    <input type="text" placeholder="Phone Number" name="rd_request_contact" id="rd_request_contact"
                      class="form-control">
                    <select name="job-function" class="form-control">
                      <option>Which Country You are Looking for Services*</option>
                      <option>United States</option>
                      <option>United Kingdom</option>
                      <option>Canada</option>
                      <option>Europe (Outside UK)</option>
                      <option>Latin America</option>
                      <option>Asia</option>
                      <option>Middle East</option>
                      <option>Africa</option>
                      <option>Australia</option>
                      <option>Oceania</option>
                    </select>

                    <select name="job-locate" class="form-control">
                      <option>Where are you located?* </option>
                      <option>Afghanistan</option>
                      <option>Albania</option>
                      <option>Algeria</option>
                      <option>American Samoa</option>
                      <option>Andorra</option>
                      <option>Angola</option>
                      <option>Anguilla</option>
                      <option>Antarctica</option>
                      <option>Antigua and Barbuda</option>
                      <option>Argentina</option>
                      <option>Armenia</option>
                      <option>Aruba</option>
                      <option>Australia</option>
                      <option>Austria</option>
                      <option>Azerbaijan</option>
                      <option>Bahamas</option>
                      <option>Bahrain</option>
                      <option>Bangladesh</option>
                      <option>Barbados</option>
                      <option>Belarus</option>
                      <option>Belgium</option>
                      <option>Belize</option>
                      <option>Benin</option>
                      <option>Bermuda</option>
                      <option>Bhutan</option>
                      <option>Bolivia</option>
                      <option>Bosnia and Herzegovina</option>
                      <option>Botswana</option>
                      <option>Bouvet Island</option>
                      <option>Brazil</option>
                      <option>British Indian Ocean Territory</option>
                      <option>Brunei Darussalam</option>
                      <option>Bulgaria</option>
                      <option>Burkina Faso</option>
                      <option>Burundi</option>
                      <option>Cambodia</option>
                      <option>Cameroon</option>
                      <option>Canada</option>
                      <option>Cape Verde</option>
                      <option>Cayman Islands</option>
                      <option>Central African Republic</option>
                      <option>Chad</option>
                      <option>Chile</option>
                      <option>China</option>
                      <option>Christmas Island</option>
                      <option>Cocos Islands</option>
                      <option>Colombia</option>
                      <option>Comoros</option>
                      <option>Congo</option>
                      <option>Congo, Democratic Republic of the</option>
                      <option>Cook Islands</option>
                      <option>Costa Rica</option>
                      <option>Cote d'Ivoire</option>
                      <option>Croatia</option>
                      <option>Cuba</option>
                      <option>Cyprus</option>
                      <option>Czech Republic</option>
                      <option>Denmark</option>
                      <option>Djibouti</option>
                      <option>Dominica</option>
                      <option>Dominican Republic</option>
                      <option>Ecuador</option>
                      <option>Egypt</option>
                      <option>El Salvador</option>
                      <option>Equatorial Guinea</option>
                      <option>Eritrea</option>
                      <option>Estonia</option>
                      <option>Ethiopia</option>
                      <option>Falkland Islands</option>
                      <option>Faroe Islands</option>
                      <option>Fiji</option>
                      <option>Finland</option>
                      <option>France</option>
                      <option>French Guiana</option>
                      <option>French Polynesia</option>
                      <option>Gabon</option>
                      <option>Gambia</option>
                      <option>Georgia</option>
                      <option>Germany</option>
                      <option>Ghana</option>
                      <option>Gibraltar</option>
                      <option>Greece</option>
                      <option>Greenland</option>
                      <option>Grenada</option>
                      <option>Guadeloupe</option>
                      <option>Guam</option>
                      <option>Guatemala</option>
                      <option>Guinea</option>
                      <option>Guinea-Bissau</option>
                      <option>Guyana</option>
                      <option>Haiti</option>
                      <option>Heard Island and McDonald Islands</option>
                      <option>Honduras</option>
                      <option>Hong Kong</option>
                      <option>Hungary</option>
                      <option>Iceland</option>
                      <option>India</option>
                      <option>Indonesia</option>
                      <option>Iran</option>
                      <option>Iraq</option>
                      <option>Ireland</option>
                      <option>Israel</option>
                      <option>Italy</option>
                      <option>Jamaica</option>
                      <option>Japan</option>
                      <option>Jordan</option>
                      <option>Kazakhstan</option>
                      <option>Kenya</option>
                      <option>Kiribati</option>
                      <option>Kuwait</option>
                      <option>Kyrgyzstan</option>
                      <option>Laos</option>
                      <option>Latvia</option>
                      <option>Lebanon</option>
                      <option>Lesotho</option>
                      <option>Liberia</option>
                      <option>Libya</option>
                      <option>Liechtenstein</option>
                      <option>Lithuania</option>
                      <option>Luxembourg</option>
                      <option>Macao</option>
                      <option>Macedonia</option>
                      <option>Madagascar</option>
                      <option>Malawi</option>
                      <option>Malaysia</option>
                      <option>Maldives</option>
                      <option>Mali</option>
                      <option>Malta</option>
                      <option>Marshall Islands</option>
                      <option>Martinique</option>
                      <option>Mauritania</option>
                      <option>Mauritius</option>
                      <option>Mayotte</option>
                      <option>Mexico</option>
                      <option>Micronesia</option>
                      <option>Moldova</option>
                      <option>Monaco</option>
                      <option>Mongolia</option>
                      <option>Montserrat</option>
                      <option>Morocco</option>
                      <option>Mozambique</option>
                      <option>Myanmar</option>
                      <option>Namibia</option>
                      <option>Nauru</option>
                      <option>Nepal</option>
                      <option>Netherlands</option>
                      <option>Netherlands Antilles</option>
                      <option>New Caledonia</option>
                      <option>New Zealand</option>
                      <option>Nicaragua</option>
                      <option>Niger</option>
                      <option>Nigeria</option>
                      <option>Norfolk Island</option>
                      <option>North Korea</option>
                      <option>Norway</option>
                      <option>Oman</option>
                      <option>Pakistan</option>
                      <option>Palau</option>
                      <option>Palestinian Territory</option>
                      <option>Panama</option>
                      <option>Papua New Guinea</option>
                      <option>Paraguay</option>
                      <option>Peru</option>
                      <option>Philippines</option>
                      <option>Pitcairn</option>
                      <option>Poland</option>
                      <option>Portugal</option>
                      <option>Puerto Rico</option>
                      <option>Qatar</option>
                      <option>Romania</option>
                      <option>Russian Federation</option>
                      <option>Rwanda</option>
                      <option>Saint Helena</option>
                      <option>Saint Kitts and Nevis</option>
                      <option>Saint Lucia</option>
                      <option>Saint Pierre and Miquelon</option>
                      <option>Saint Vincent and the Grenadines</option>
                      <option>Samoa</option>
                      <option>San Marino</option>
                      <option>Sao Tome and Principe</option>
                      <option>Saudi Arabia</option>
                      <option>Senegal</option>
                      <option>Serbia and Montenegro</option>
                      <option>Seychelles</option>
                      <option>Sierra Leone</option>
                      <option>Singapore</option>
                      <option>Slovakia</option>
                      <option>Slovenia</option>
                      <option>Solomon Islands</option>
                      <option>Somalia</option>
                      <option>South Africa</option>
                      <option>South Georgia</option>
                      <option>South Korea</option>
                      <option>Spain</option>
                      <option>Sri Lanka</option>
                      <option>Sudan</option>
                      <option>Suriname</option>
                      <option>Svalbard and Jan Mayen</option>
                      <option>Swaziland</option>
                      <option>Sweden</option>
                      <option>Switzerland</option>
                      <option>Syrian Arab Republic</option>
                      <option>Taiwan</option>
                      <option>Tajikistan</option>
                      <option>Tanzania</option>
                      <option>Thailand</option>
                      <option>Timor-Leste</option>
                      <option>Togo</option>
                      <option>Tokelau</option>
                      <option>Tonga</option>
                      <option>Trinidad and Tobago</option>
                      <option>Tunisia</option>
                      <option>Turkey</option>
                      <option>Turkmenistan</option>
                      <option>Tuvalu</option>
                      <option>Uganda</option>
                      <option>Ukraine</option>
                      <option>United Arab Emirates</option>
                      <option>United Kingdom</option>
                      <option>United States</option>
                      <option>United States Minor Outlying Islands</option>
                      <option>Uruguay</option>
                      <option>Uzbekistan</option>
                      <option>Vanuatu</option>
                      <option>Vatican City</option>
                      <option>Venezuela</option>
                      <option>Vietnam</option>
                      <option>Virgin Islands, British</option>
                      <option>Virgin Islands, U.S.</option>
                      <option>Wallis and Futuna</option>
                      <option>Western Sahara</option>
                      <option>Yemen</option>
                      <option>Zambia</option>
                      <option>Zimbabwe</option>

                    </select>
                    <select name="job-help" class="form-control">
                      <option>What can we help you with?* </option>
                      <option>Employer Of Record</option>
                      <option>PEO Service</option>
                      <option>Global Talent Acquisition</option>
                      <option>Global Project Management </option>
                      <option>Multi-jurisdictional billing and payment solutions</option>
                      <option>Global Payrolling</option>
                      <option>Global HR and Compliance Management</option>
                    </select>

                    <textarea placeholder="Add Remarks" name="rd_request_message" rows="4" class="form-control"></textarea>

                  </div>
                  <div class="col-12"><button type="submit" class="mktoButton">Submit</button></div>



                  <div class="col-12 mb-40">

                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   