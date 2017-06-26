<?php
/*
 
Template Name Posts: THIRD PARTY SIGN IN & REGISTRATION FORM 

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
<form action="/signin.php" method="post" onsubmit="return validateSignInForm()">
  <table align="center" border="0" cellpadding="0" cellspacing="0" width="50%">
    <tr>
      <td colspan="2" align="center"><strong>Sign in to apply for positions or update your account</strong><br />
        <br /></td>
    </tr>
    <tr>
      <td>Email address:</td>
      <td><input type="text" id="username" name="username" class="required" Title="Usename / E-mail Address" style="width:90%;"/></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input type="password" id="password" name="password" class="required" Title="Password" /></td>
    </tr>
    <tr>
      <td align="center" colspan="2"><input type="submit" value="Sign in" /></td>
    </tr>
  </table>
</form>
<?php // REGISTER FORM ?>
<TABLE class="pcrtable" CELLSPACING="0" BORDER="0" CELLPADDING="2" WIDTH="100%">
  <col width="50%">
  <col width="50%">
  <tr>
    <td width="50%">Are you a Permanent Australian Resident?</td>
    <td width="50%"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="25%" align="right"><label for="rdoAustralian">Yes</label></td>
          <td width="25%" align="center"><input id="rdoAustralian" onclick="residentStatusChanged()" name="chkResidentStatus" type="radio" value="T" checked=checked /></td>
          <td width="25%" align="right"><label for="rdoForeign" style="text-align:left">No</label></td>
          <td width="25%" align="center"><input  id="rdoForeign" onclick="residentStatusChanged()" name="chkResidentStatus" type="radio" value="F"  /></td>
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
  <TR >
    <TD >Title</TD>
    <TD><select id="salutation" name="salutation" style="margin-bottom:5px;width:30%;">
        <option value="-1" selected"><--- Choose ---></option>
        <OPTION VALUE="Miss"  >Miss</OPTION>
        <OPTION VALUE="Mr"  >Mr</OPTION>
        <OPTION VALUE="Mrs" selected="selected" >Mrs</OPTION>
        <OPTION VALUE="Ms"  >Ms</OPTION>
      </select></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD >Given Name(s)</TD>
    <TD><INPUT size="37" maxlength="25" NAME="firstname" ID="firstname" TYPE="TEXT" VALUE="Catherine"></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR>
    <TD>Last Name</TD>
    <TD ><INPUT size="37" maxlength="25" NAME="lastname" ID="lastname" TYPE="TEXT" VALUE="Hutchinson"></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD >Email Address</TD>
    <TD><INPUT size="37" maxlength="80"  NAME="emailaddress" id="emailaddress" TYPE="TEXT" VALUE="catherine@webdesignnsw.com.au"></TD>
  </TR>
  <TR >
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR >
    <TD>Password</TD>
    <TD ><INPUT maxlength="15"  NAME="password" ID="password"  TYPE="PASSWORD" VALUE="4yD-oet-v5a-yeu"></TD>
  </TR>
  <TR>
    <TD STYLE=padding:0 HEIGHT=1 COLSPAN="2"></TD>
  </TR>
  <TR>
    <TD>Confirm Password</TD>
    <TD><INPUT maxlength="15"  NAME="passwordc" ID="passwordc"  TYPE="PASSWORD" VALUE="4yD-oet-v5a-yeu"></TD>
  </TR>
  <TR >
    <TD align="left" COLSPAN="2"><font style="font-size:0.8em">* Password must be between 6 to 15 characters and contain at least one capital letter and one number</font></TD>
  </TR>
  <TR >
    <TD align="center" COLSPAN="2"><input id="PageNext" name="PageNext" type="submit" Value="Next >>" /></TD>
  </TR>
</TABLE>
</form>
<?php 
   
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  

 echo '</div>';
  echo '</div>';
     
  
echo'</div>';
 get_footer(); ?>
