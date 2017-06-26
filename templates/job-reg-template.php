<?php
/*
 
Template Name: THIRD PARTY SIGN IN & REGISTRATION FORM 

*/
?>
<?php 
get_header();?>

<?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>

<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">';
   
 
  
  echo'<div class="postCollapse registrationform">';
            // the_loop begin
           
			echo'<section>';
   
  // SIGN IN FORM // ?>
  
  <h1 class="register1-signup">Sign In</h1>
<form action="/signin.php" method="post" onsubmit="return validateSignInForm()">
  <table align="center" border="0" cellpadding="0" cellspacing="0" width="50%">
    <tr>
      <td colspan="2" align="left"><strong>Sign in to apply for positions or update your account</strong><br /><br /></td>
    </tr>
    <tr>
      <td width="30%;">Email address:</td>
      <td><input type="text" id="username" name="username" class="required" Title="Usename / E-mail Address"/></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" id="password" name="password" class="required" Title="Password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td><td><input type="submit" value="Sign in" id="submitbutton"/></td>
    </tr>
  </table>
</form>
<?php // REGISTER FORM ?>
<h2  class="register1-signup">Register</h2>
<TABLE class="pcrtable" CELLSPACING="0" BORDER="0" CELLPADDING="2" WIDTH="50%">
  <col width="30%">
  <col width="70%">
  <tr>
    <td width="30%">Are you a Permanent Australian Resident?</td>
    <td width="70%"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="20%" align="left"><label for="rdoAustralian">Yes</label>  <input id="rdoAustralian" onclick="residentStatusChanged()" name="chkResidentStatus" type="radio" value="T" checked=checked /></td>
          <td width="20%" align="left"><label for="rdoForeign" style="text-align:left">No</label>  <input  id="rdoForeign" onclick="residentStatusChanged()" name="chkResidentStatus" type="radio" value="F"  /></td><td>&nbsp;</td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td colspan="2"><div id="applypreverror"></div></td>
  </tr>
  <tr>
    <td align="left"><label for="host_loc" style="text-align:left">Please choose your nearest AIGTS office *</label></td>
    <td><select id="host_loc" name="host_loc" style="margin-bottom:5px;width:80%;">
        <option value="-1" selected"><--- Choose ---></option>
        <OPTION VALUE="406"  >Adelaide</OPTION>
        <OPTION VALUE="409"  >Albury</OPTION>
        <OPTION VALUE="431"  >Ballarat</OPTION>
        <OPTION VALUE="410"  >Bendigo</OPTION>
        <OPTION VALUE="411"  >Brisbane</OPTION>
        <OPTION VALUE="414"  >Canberra</OPTION>
        <OPTION VALUE="415"  >Hobart</OPTION>
        <OPTION VALUE="407"  >Melbourne</OPTION>
        <OPTION VALUE="412"  >Perth</OPTION>
        <OPTION VALUE="408" selected="selected" >Sydney</OPTION>
        <OPTION VALUE="413"  >Wollongong</OPTION>
      </select></td>
  </tr>
  <tr>
    <td >Title</TD>
    <td><select id="salutation" name="salutation" style="margin-bottom:5px;width:30%;">
        <option value="-1" selected"><--- Choose ---></option>
        <OPTION VALUE="Miss"  >Miss</OPTION>
        <OPTION VALUE="Mr"  >Mr</OPTION>
        <OPTION VALUE="Mrs" selected="selected" >Mrs</OPTION>
        <OPTION VALUE="Ms"  >Ms</OPTION>
      </select></TD>
  </tr>
  <tr>
    <td STYLE=padding:0 height=1 colspan="2"></TD>
  </tr>
  <tr>
    <td >Given Name(s)</TD>
    <td><INPUT size="37" maxlength="25" NAME="firstname" ID="firstname" TYPE="TEXT" VALUE="Catherine"></TD>
  </tr>
  <tr>
    <td STYLE=padding:0 height=1 colspan="2"></TD>
  </tr>
  <TR>
    <td>Last Name</TD>
    <td ><INPUT size="37" maxlength="25" NAME="lastname" ID="lastname" TYPE="TEXT" VALUE="Hutchinson"></TD>
  </tr>
  <tr>
    <td style=padding:0 height=1 colspan="2"></td>
  </tr>
  <tr>
    <td >Email Address</td>
    <td><INPUT size="37" maxlength="80"  NAME="emailaddress" id="emailaddress" TYPE="TEXT" VALUE="catherine@webdesignnsw.com.au"></TD>
  </tr>
  <tr>
    <td style=padding:0 height=1 colspan="2"></TD>
  </tr>
  <tr>
    <td>Password</TD>
    <td ><INPUT maxlength="15"  NAME="password" ID="password"  TYPE="PASSWORD" VALUE="4yD-oet-v5a-yeu"></TD>
  </tr>
  <TR>
    <td style=padding:0 height=1 colspan="2"></TD>
  </tr>
  <TR>
    <td>Confirm Password</TD>
    <td><INPUT maxlength="15"  NAME="passwordc" ID="passwordc"  TYPE="PASSWORD" VALUE="4yD-oet-v5a-yeu"></TD>
  </tr>
  <tr>
    <td align="left" colspan="2"><p class="passwordnote">* Password must be between 6 to 15 characters and contain at least one capital letter and one number</p></TD>
  </tr>
  <tr>
    <td>&nbsp;</td><td align="left"><input id="PageNext" name="PageNext" type="submit" Value="Next >>" /></TD>
  </tr>
</table>
</form>
<?php 
   
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  

 echo '</div>';
  echo '</div>';
     
  
echo'</div>';
 get_footer(); ?>
