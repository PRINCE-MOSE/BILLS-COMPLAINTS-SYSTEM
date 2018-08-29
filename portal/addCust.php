<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
<h4 class="btn btn-success">Add New Customer Details* - Admin View</h4>
<hr>
<form action="process.php?action=addCust" method="post"  name="frmListUser" id="frmListUser">
  <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#336699" class="entryTable">
    <tr id="entryTableHeader">
      
    </tr>
    <tr>
      <td class="contentArea"><div class="errorMessage" align="center"><?php //echo $errorMessage; ?></div>
          <table width="100%" border="0" cellpadding="2" cellspacing="1" class="text">
            <tr align="center">
              <td colspan="2"><div align="right"></div></td>
            </tr>
            <tr class="entryTable">
              
              <td class="content"><input class="form-control" name="CustomerName" type="text" placeholder="Give Username"  class="box" id="CustomerName" size="30" maxlength="20" /></td>
            </tr>
            <tr class="entryTable">
              
              <td class="content"><input class="form-control" name="Password" type="password" placeholder="Set a password" class="box" id="Password" value="" size="30" maxlength="20" /></td>
            </tr>
            <tr class="entryTable">
              
              <td class="content"><textarea class="form-control" placeholder="Enter Address"name="Address" cols="40" rows="4" class="box" id="Address"></textarea></td>
            </tr>
            <tr class="entryTable">
           
              <td class="content"><input class="form-control" placeholder="Input Email"name="Email" type="text" class="box" id="Email" value="" size="30" maxlength="20" /></td>
            </tr>
            <tr class="entryTable">
            
              <td class="content"><input class="form-control" placeholder="Enter Mobile No." name="Mobile" type="text" class="box" id="Mobile" value="" size="30" maxlength="60" /></td>
            </tr>
            <tr>
              <td width="80%"><input name="btnLogin" class="btn btn-primary" type="submit" id="btnLogin" onclick="MM_validateForm('CustomerName','','R','Email','','RisEmail','Mobile','','R','Address','','R','Password','','R');return document.MM_returnValue" value=" Register Now "></td>
              
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td></td>
            </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<p>&nbsp;</p>
