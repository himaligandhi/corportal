<!DOCTYPE html>
<html>
<head>
<title> Lender Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style2.css"/>
</head>
<body>		
<div class="container">
    <div class="row">
      <div class="offset-lg-2 col-lg-9 col-sm-9 col-9 main-section mt-5">
        <h1 class="text-center text-inverse mb-5">LENDER ONBOARDING APPLICATION</h1>
        <hr style="border:0.5px solid #e5e5e5;">
        <h3 style="color:#fca311;" class="mb-5">COMPANY INFORMATION</h3>
        <form class="container" id="needs-validation" novalidate>
          <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="validationCustom01">Company Name</label>
                  <input type="text" class="form-control" id="validationCustom01" value="" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="validationCustom02">Address</label>
                  <input type="text" class="form-control" id="validationCustom02"  value="" required>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="validationCustom03">Address Line 2</label>
                  <input type="text" class="form-control" id="validationCustom03"  value="" required>
                </div>
              </div>
            </div>
            
          <div class="row">
             <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom04">City</label>
                <input type="text" class="form-control" id="validationCustom04" value="" required>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="province">Province</label>
                <select class="custom-select d-block form-control" id="province" required>
                <option value="AB">Alberta</option>
                                    <option value="BC">British Columbia</option>
                                    <option value="MB">Manitoba</option>
                                    <option value="NB">New Brunswick</option>
                                    <option value="NL">Newfoundland and Labrador</option>
                                    <option value="NS">Nova Scotia</option>
                                    <option value="ON">Ontario</option>
                                    <option value="PE">Prince Edward Island</option>
                                    <option value="QC">Quebec</option>
                                    <option value="SK">Saskatchewan</option>
                                    <option value="NT">Northwest Territories</option>
                                    <option value="NU">Nunavut</option>
                                    <option value="YT">Yukon</option>
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
</div>
            <div class="row">
             <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom05">Postal Code</label>
                <input type="text" class="form-control" id="validationCustom05" value="" required>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="country">Country</label>
                <!-- <input type="text" class="form-control" id="validationCustom05" value="" required> -->
                <select class="custom-select d-block form-control" id="country" required>
                <option value="USA">USA</option>
                                    <option value="Canada">Canada</option>
                                   
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom06">Phone Number</label>
                <input type="text" class="form-control" id="validationCustom06"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom07">Contact Name</label>
                <input type="text" class="form-control" id="validationCustom07"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom08">Contact Number</label>
                <input type="text" class="form-control" id="validationCustom08"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="login">No. of Access Login</label>
                <select class="custom-select d-block form-control" id="login" required>
                <option value="one">1</option>
                                    <option value="two">2</option>
                                    <option value="three">3</option>
                                    <option value="four">4</option>
                                    <option value="five">5</option>
                                   
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom09">Website</label>
                <input type="url" class="form-control" id="validationCustom09"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom10">Lender Adminstrator #</label>
                <input type="text" class="form-control" id="validationCustom10"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="validationCustom11">Mortgage Brokerage No.</label>
                <input type="text" class="form-control" id="validationCustom11"  value="" required>
              </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                <label class="text-inverse" for="lendertype">Lender Type</label>
                <select class="custom-select d-block form-control" id="lendertype" required>
                <option value="Institutional Lender">Institutional Lender</option>
                                    <option value="Private Mortgage Lender">Private Mortgage Lender</option>
                                    <option value="Private Equity Lender">Private Equity Lender</option>
                                    <option value="Private Real Estate Lender">Private Real Estate Lender</option>
                                    <option value="Equipment Lender">Equipment Lender</option>
                                    <option value="Accounts Receviable Lender $100,000- $200,0000">Accounts Receivable Lender $100,000-$2,000,000</option>
                                    <option value="Accounts Receivable Lender $2,000,000 +">Accounts Receivable Lender $2,000,000 +</option>
                                    <option value="Construction Lender">Construction Lender</option>
                                    <option value="Factoring">Factoring</option>
                                    <option value="Asset Based Lender">Asset Based Lender</option>
                                    <option value="Trust Company">Trust Company</option>
                                   
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>
            </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="text-inverse" for="loandesgin">Loan Designation</label>
                  <select class="custom-select d-block form-control" id="loandesign" required>
                  <option value="Conventional Commerical">Conventional Commerical Loan</option>
                                      <option value="Sub-Conventional Commerical loan">Sub-Conventional Commerical Loan</option>
                                      <option value="Alternative Loan">Alternative Loan</option>
                                      <option value="Private Loan">Private Loan</option>
                  </select>
                  <div class="invalid-feedback">
                    Please selected any option.
                  </div>
                </div>
              </div>
             
              <h3 style="color:#fca311;" class="mb-5 mt-5">LENDING CRITERIA</h3>
              <div class="container">
              <div class="row">
                  <div class="col-lg-12">
                      <label  class="custom-control custom-checkbox" for="assettype"> Asset Type </label>     
                        <fieldset class="group"> 
                          <ul class="checkbox"> 
                            <li><input type="checkbox" id="cb1" value="Automobile" /><label for="cb1">Automobile</label></li> 
                            <li><input type="checkbox" id="cb2" value="Accounts Receivables" /><label for="cb2">Accounts Receivables</label></li> 
                            <li><input type="checkbox" id="cb3" value="Cash" /><label for="cb3">Cash</label></li> 
                            <li><input type="checkbox" id="cb4" value="Equipment" /><label for="cb4">Equipment</label></li> 
                            <li><input type="checkbox" id="cb5" value="Inventory(New/In Production)" /><label for="cb5">Inventory(New/In Production)</label></li> 
                            <li><input type="checkbox" id="cb6" value="Inventory(Aged upto 12 months)" /><label for="cb6>">Inventory(Aged upto 12 months)</label></li> 
                            <li><input type="checkbox" id="cb6" value="Real Estate(Commercial)" /><label for="cb6>">Real Estate(Commercial)</label></li> 
                            <li><input type="checkbox" id="cb6" value="Real Estate(Residential)" /><label for="cb6>">Real Estate(Residential)</label></li> 
                          </ul> 
                        </fieldset> 
                  </div>
                </div> 
                  <hr> 
                  <div class="row">
                    <div class="col-lg-12">
                        <label  class="custom-control custom-checkbox" for="assettype"> Lending Type </label>     
                          <fieldset class="group"> 
                            <ul class="checkbox"> 
                              <li><input type="checkbox" id="cb1" value="Working Capital" /><label for="cb1">Working Capital</label></li> 
                              <li><input type="checkbox" id="cb2" value="Bridge Loan Financing" /><label for="cb2">Bridge Loan Financing</label></li> 
                              <li><input type="checkbox" id="cb3" value="Accounts Receivable Financing" /><label for="cb3">Accounts Receivable Financing</label></li> 
                              <li><input type="checkbox" id="cb4" value="Purchase Order Financing" /><label for="cb4">Purchase Order Financing</label></li> 
                              <li><input type="checkbox" id="cb5" value="Equipment Financing" /><label for="cb5">Equipment Financing</label></li> 
                              <li><input type="checkbox" id="cb6" value="Commercial Real Estate Financing" /><label for="cb6>">Commercial Real Estate Financing</label></li> 
                              <li><input type="checkbox" id="cb7" value="Land Development Financing" /><label for="cb7>">Land Development Financing</label></li> 
                              <li><input type="checkbox" id="cb8" value="Construction Financing" /><label for="cb8>">Construction Financing</label></li> 
                              <li><input type="checkbox" id="cb9" value="Mezzanine Financing" /><label for="cb9>">Mezzanine Financing</label></li> 
                              <li><input type="checkbox" id="cb10" value="Debtor-In-Possession Financing(DIP)" /><label for="cb10>">Debtor-In-Possession Financing(DIP)</label></li> 
                              <li><input type="checkbox" id="cb11" value="Automotive Lease Portfolio Financing (Securitization)" /><label for="cb11>">Automotive Lease Portfolio Financing (Securitization)</label></li> 
                              <li><input type="checkbox" id="cb12" value="Tech Start-Ups" /><label for="cb12>">Tech Start-Ups</label></li> 
                            </ul> 
                          </fieldset> 
                    </div>  
                  </div>
                  <hr>

                  <div class="row">
                    <div class="col-lg-12">
                        <label  class="custom-control custom-checkbox" for="assettype"> Borrower Type </label>     
                          <fieldset class="group"> 
                            <ul class="checkbox"> 
                              <li><input type="checkbox" id="cb1" value="Auto Dealers" /><label for="cb1">Auto Dealers</label></li> 
                              <li><input type="checkbox" id="cb2" value="Construction Developers" /><label for="cb2">Construction Developers</label></li> 
                              <li><input type="checkbox" id="cb3" value="Distributors" /><label for="cb3">Distributors</label></li> 
                              <li><input type="checkbox" id="cb4" value="Hospitality Services" /><label for="cb4">Hospitality Services</label></li> 
                              <li><input type="checkbox" id="cb5" value="Importers/Exporters" /><label for="cb5">Importers/Exporters</label></li> 
                              <li><input type="checkbox" id="cb6" value="Manufacturers" /><label for="cb6>">Manufacturers</label></li> 
                              <li><input type="checkbox" id="cb7" value="Online Sellers" /><label for="cb7>">Online Sellers</label></li> 
                              <li><input type="checkbox" id="cb8" value="Professional Corporations" /><label for="cb8>">Professional Corporations</label></li> 
                              <li><input type="checkbox" id="cb9" value="Real Estate Developers " /><label for="cb9>">Real Estate Developers </label></li> 
                              <li><input type="checkbox" id="cb10" value="Rental Property Owners" /><label for="cb10>">Rental Property Owners</label></li> 
                              <li><input type="checkbox" id="cb11" value="Restaurant Owner" /><label for="cb11>">Restaurant Owner</label></li> 
                              <li><input type="checkbox" id="cb12" value="Retailer" /><label for="cb12>">Retailer</label></li> 
                              <li><input type="checkbox" id="cb13" value="Tech Corporations" /><label for="cb13>">Tech Corporations</label></li>
                              <li><input type="checkbox" id="cb14" value="Other" /><label for="cb14>">Other</label></li>
                              <li><input type="text" id="cb15" value="" placeholder="Please specify the Other Borrower Type"/><label for="cb15>"></label></li>
                            </ul> 
                          </fieldset> 
                    </div>  
                  </div>
                  <hr>

            <!-- <div class="col-md-6 col-sm-12 col-12">
              <div class="form-group">
                <label class="text-inverse" for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required>
                <div class="invalid-feedback">
                  Please provide a valid Email.
                </div>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="inputpassword">Password</label>
                <input type="password" class="form-control" id="inputpassword" placeholder="password" required>
                <div class="invalid-feedback">
                  Please provide a valid password.
                </div>
              </div>  
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="validationCustom03">City</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                <div class="invalid-feedback">
                  Please provide a valid city.
                </div>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="text-inverse" for="select-menu">Select any value</label>
                <select class="custom-select d-block form-control" id="image" required>
                  <option value="">Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
                <div class="invalid-feedback">
                  Please selected any option.
                </div>
              </div>  
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="custom-file">
                  <input type="file" id="file" class="form-control custom-file-input" required>
                  <span class="custom-file-control"></span>
                  <div class="invalid-feedback">
                    Please selected any File.
                  </div>
                </label>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Check this custom checkbox</span>
                </label>
              </div>  
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="custom-control custom-radio">
                  <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Toggle this custom radio</span>
                </label>
              </div>  
            </div>
            <div class="col-lg-6 col-sm-6 col-12">
              <div class="form-group">
                <label class="custom-control custom-radio">
                  <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input" required>
                  <span class="custom-control-indicator"></span>
                  <span class="custom-control-description">Or toggle this other custom radio</span>
                </label>
              </div>  
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12 col-sm-12 col-12 text-center">
                <button class="btn btn-info" type="submit">Submit form</button>
            </div>
          </div>  
        </form>
      </div>
    </div>  
</div> -->

       
        
    <!--

        <div class="form-group col-md-6">
        <select id="loanamt" class="form-control"> -->
                <!-- <option disabled selected value="Choose" class="form-control"></option> -->
                <!-- <option selected>Choose...</option>
                <option value="$0-$250,000">$0-$250,000</option>
                                    <option value="$250,000-$500,000">$250,000-$500,000</option>
                                    <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                    <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                    <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                    <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                    <option value="$10,000,000 +">$10,000,000 +</option>
                                   
            </select>
          <label for="loanamt">Loan Amount</label>
          <div class="line"></div>
        </div>
</div>
 <div class="form-row">
      <div class="form-group col-md-3">
      <label for="loanamt">Geographic Boundaries</label>
              <div class="checkbox">
                <label for="North"><input id="North" type="checkbox" checked=""/>North</label>
            </div>
          
            <div class="checkbox">
                <label for="South"><input id="South" type="checkbox" checked=""/>South</label>
            </div>
            <div class="checkbox">
                <label for="East"><input id="East" type="checkbox" checked=""/>East</label>
            </div>
            <div class="checkbox">
                <label for="West"><input id="West" type="checkbox" checked=""/>West</label>
            </div>
</div>
        <div class="form-group col-md-3">
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
        
        
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
        <select id="North" class="form-control">
              
              <option selected>Choose...</option>
              <option value="$0-$250,000">$0-$250,000</option>
                                  <option value="$250,000-$500,000">$250,000-$500,000</option>
                                  <option value="$500,000-$1,000,000">$500,000-$1,000,000</option>
                                  <option value="$1,000,000-$2,000,000">$1,000,000-$2,000,000</option>
                                  <option value="$2,000,000-$5,000,000">$2,000,000-$5,000,000</option>
                                  <option value="$5,000,000-$10,000,000">$5,000,000-$10,000,000</option>
                                  <option value="$10,000,000 +">$10,000,000 +</option>
                                 
          </select>
        
        <div class="line"></div>
</div>

         <div class="form-group col-md-6">
         <input type="text" class="form-control" id="lendingterms">
          <label for="lendingterms">Lending Terms</label>
          <div class="line"></div>
        </div>
</div>
<div class="form-row">
        <div class="form-group col-md-6">
        <select id="interestrate" class="form-control">
              <option selected>Choose...</option>
              <option value="0-3.99%">0-3.99%</option>
                                  <option value="4%-5.99%">4%-5.99%</option>
                                  <option value="6%-7.99%">6%-7.99%</option>
                                  <option value="8%-9.99%">8%-9.99%</option>
                                  <option value="10%-11.99%">10%-11.99%</option>
                                  <option value="12%-14.99%">12%-14.99%</option>
                                  <option value="15%-17.99%">15%-17.99%</option>
                                  <option value="18%-23.99%">18%-23.99%</option>
                                  <option value="24% and up">24% and up</option>
                                 
          </select>
        
          <label for="interestrate">Interest Rate</label>
          <div class="line"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="depositreq" class="form-control">
              <option selected>Choose...</option>
              <option value="5% of loan amount">5% of loan amount</option>
                                  <option value="10% of loan amount">10% of loan amount</option>
                                  <option value="15% of loan amount">15% of loan amount</option>
                                  <option value="20% of loan amount">20% of loan amount</option>
                                  <option value="Specify amount required">Specify amount required</option>
</select>
          <label for="depositreq">Deposit Requirements</label>
          <div class="line"></div>
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-6">
            <label for="documentreq" class="combo-label">Documents Requirements</label>
        <div id="checkboxSelectCombo"></div>
        </div>
        <div class="form-group col-md-6">
        <select id="lendingfees" class="form-control">
              <option selected>Choose...</option>
              <option value="0.5-1.0%">0.5-1%</option>
                                  <option value="1%-2%">1% - 2%</option>
                                  <option value="2%- 4%">4% - 4%</option>
                                  <option value="4%- 5%">4% - 5%</option>
                                  <option value="5% & up">5% & up</option>
</select>
            <label for="lendingfees" class="combo-label">Lending Fees</label>
            <div class="line"></div>
        </div>

      </div>

    </form>
  </div>
</div>
<script> -->
<!-- function checkValue(element) {
  // check if the input has any value (if we've typed into it)
  if ($(element).val())
    $(element).addClass('has-value');
  else
    $(element).removeClass('has-value');
}

$(document).ready(function() {
  // Run on page load
  $('.form-control').each(function() {
    checkValue(this);
  })
  // Run on input exit
  $('.form-control').blur(function() {
    checkValue(this);
  });

});
$(function () {
var docreq = [
            { Name: "Finance Application" },
            { Name: "Mortgage Application" },
            { Name: "Articles of Incorporation" },
            { Name: "Shareholder Agreements" },
            { Name: "Officer & Directors Ledgers" },
            { Name: "Trade License(if applicable)" },
            { Name: "Credit Bureau(for borrower & company)" },
            { Name: "Company Financials(previous 2 years, accountant prepared)" },
            { Name: "Bank Statements(90-120 days)" },
            { Name: "Asset Analysis docs or purchase orders(for inventory & equipment)"},
            { Name: "Purchase & Sale Agreement(for real estate)"},
            { Name: "Land Appraisal(for real estate)"},
            { Name: "Existing loan documentation"}
            
        ];

        $(function () {
          $("#checkboxSelectCombo").igCombo({
                width: 300,
                dataSource: docreq,
                textKey: "Name",
                valueKey: "Name",
                multiSelection: {
                    enabled: true,
                    showCheckboxes: true
                },
                dropDownOrientation: "bottom"
            });        });
});


</script> -->
<script>
var g_UnFocusElementStyle = "";
var g_FocusBackColor = "#FFC";
var g_reEmail = /^[\w\.=-]+\@[\w\.-]+.[a-z]{2,4}$/;
var g_reCell = /^\d{10}$/;
var g_invalidFields = 0;

function initFormElements(sValidElems) {
	var inputElems = document.getElementsByTagName('textarea');
	for(var i = 0; i < inputElems.length; i++) {
		com_abhi.EVENTS.addEventHandler(inputElems[i], 'focus', highlightFormElement, false);
		com_abhi.EVENTS.addEventHandler(inputElems[i], 'blur', unHightlightFormElement, false);
	}
	/* Add the code for the input elements */
	inputElems = document.getElementsByTagName('input');
	for(var i = 0; i < inputElems.length; i++) {
		if(sValidElems.indexOf(inputElems[i].getAttribute('type') != -1)) {
			com_abhi.EVENTS.addEventHandler(inputElems[i], 'focus', highlightFormElement, false);
			com_abhi.EVENTS.addEventHandler(inputElems[i], 'blur', unHightlightFormElement, false);
		}
	}
	
	/* submit handler */
	
	
	com_abhi.EVENTS.addEventHandler(document.getElementById('form1'), 'submit' , validateAllfields, false);
	
	/* Add the default focus handler */
	document.getElementsByTagName('input')[0].focus();
	
	/* Add the event handlers for validation */
	com_abhi.EVENTS.addEventHandler(document.forms[0].firstName, 'blur', validateFirstName, false);
	com_abhi.EVENTS.addEventHandler(document.forms[0].email, 'blur', validateEmailAddress, false);
	com_abhi.EVENTS.addEventHandler(document.forms[0].address, 'blur', validateAddress, false);
	com_abhi.EVENTS.addEventHandler(document.forms[0].cellPhone, 'blur', validateCellPhone, false);
}

function highlightFormElement(evt) {
	var elem = com_abhi.EVENTS.getEventTarget(evt);
	if(elem != null) {
		elem.style.backgroundColor = g_FocusBackColor;
	}
}

function unHightlightFormElement(evt) {
	var elem = com_abhi.EVENTS.getEventTarget(evt);
	if(elem != null) {
		elem.style.backgroundColor = "";
	}
}

function validateAddress() {
	var formField = document.getElementById('address');
	var ok = (formField.value != null && formField.value.length != 0);
	var grpEle = document.getElementById('grpAddress');
	if(grpEle != null) {
		if(ok) {
			grpEle.className = "form-group has-success has-feedback";
			document.getElementById('addressIcon').className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById('addressErrorMsg').innerHTML = "";
		}
		else  {
			grpEle.className = "form-group has-error has-feedback";
			document.getElementById('addressIcon').className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById('addressErrorMsg').innerHTML = "Please enter your address";
		}
		return ok;
	}
	
}

function validateFirstName() {
	var formField = document.getElementById('firstName');
	var ok = (formField.value != null && formField.value.length != 0);
	var grpEle = document.getElementById('grpfirstName');
	if(grpEle != null) {
		if(ok) {
			grpEle.className = "form-group has-success has-feedback";
			document.getElementById('firstNameIcon').className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById('firstNameErrorMsg').innerHTML = "";
		}
		else  {
			grpEle.className = "form-group has-error has-feedback";
			document.getElementById('firstNameIcon').className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById('firstNameErrorMsg').innerHTML = "Please enter your first name";
		}
		return ok;
	}
}

function validateEmailAddress() {
	var formField = document.getElementById('email');
	var ok = (formField.value.length != 0 && g_reEmail.test(formField.value));
	var grpEle = document.getElementById('grpEmail');
	if(grpEle != null) {
		if(ok) {
			grpEle.className = "form-group has-success has-feedback";
			document.getElementById('EmailIcon').className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById('emailErrorMsg').innerHTML = "";
		}
		else {
			grpEle.className = "form-group has-error has-feedback";
			document.getElementById('EmailIcon').className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById('emailErrorMsg').innerHTML = "Please enter your valid email id";
		}
	}
	return ok;
}

function validateCellPhone() {
	var formField = document.getElementById('cellPhone');
	var ok = (formField.value.length != 0 && g_reCell.test(formField.value));
	var grpEle = document.getElementById('grpCellPhone');
	if(grpEle != null) {
		if(ok) {
			grpEle.className = "form-group has-success has-feedback";
			document.getElementById('cellPhoneIcon').className = "glyphicon glyphicon-ok form-control-feedback";
			document.getElementById('cellPhoneErrorMsg').innerHTML = "";
		}
		else {
			grpEle.className = "form-group has-error has-feedback";
			document.getElementById('cellPhoneIcon').className = "glyphicon glyphicon-remove form-control-feedback";
			document.getElementById('cellPhoneErrorMsg').innerHTML = "Please enter your valid mobile number";
		}
	}
	return ok;
}



function validateAllfields(e) {
	/* Need to do it this way to make sure all the functions execute */
	
	var bOK = validateFirstName();
	bOK &= validateEmailAddress();
	bOK &= validateCellPhone(); 
	bOK &= validateAddress(); 
	

	if(!bOK) {
		alert("The fields that are marked bold and red are required. Please supply valid\n values for these fields before sending.");
		com_abhi.EVENTS.preventDefault(e);
	}
	
	
}

com_abhi.EVENTS.addEventHandler(window, "load", function() { initFormElements("text"); }, false);
</script>
</body>
</html>
