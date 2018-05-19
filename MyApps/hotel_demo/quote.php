<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	
<title>Quatation </title>
<script type="text/javascript" src="menucontents.js"></script>

<script language="JavaScript" type="text/javascript">
function noBack(){ window.history.forward(); }
function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
 
 function srnumber(t,zero)        
		 {
  		t.value=zero; 
	  
		 }

function minLen(r,f,t,zero)        
		 {
  		 if( r * f >= zero)
    	 {
 		 t.value= (r * f); 
		
  		 }
		 
		 }
		 
function gtotal(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13,t14,t15,tot)        
		 {
	 var total;
	  				
  		tot.value  =((t1 * -1) + (t2 * - 1) + (t3 * -1) + (t4 * - 1) +(t5 * -1) + (t6 * - 1) +(t7 * -1) + (t8 * - 1) +(t9 * -1) + (t10 * - 1) +(t11 * -1) + (t12 * - 1) +(t13 * -1) + (t14 * - 1) +(t15 * -1) ) * -1;
		 
		 }

function extra(t1,t2,t3,t4,t5,t6,t7,t8,t9,t10,t11,t12,t13,t14,t15,tot)        
		 {
 
	  				
  		tot.value  =( (t2 * - 1) + (t3 * -1) + (t4 * - 1) +(t5 * -1) + (t6 * - 1) +(t7 * -1) + (t8 * - 1) +(t9 * -1) + (t10 * - 1) +(t11 * -1) + (t12 * - 1) +(t13 * -1) + (t14 * - 1) +(t15 * -1) ) * -1;
		 
		 }
		 
function twoadd(a,b,c)
{
	c.value= ((-1* a) + (-1*b) ) * -1;

}

function isNumberKey(evt)
       {
          var chCode = (evt.which) ? evt.which : event.keyCode
          if (chCode != 46 && chCode > 31 
            && (chCode < 48 || chCode > 57))
             return false;
          else
          return true;
       }
	   
function setColor(el, bg) 
{
  if (el.style) el.style.backgroundColor = bg;
}


function isAlpha(keyCode)
        {
            return ((keyCode >= 65 && keyCode <= 90) || keyCode == 8 || keyCode == 32 || keyCode == 9 || keyCode == 46)
        }

 </script>
<style type="text/css">
<!--
.style3 {
	font-size: 24px;
	font-weight: bold;
}
.style6 {font-size: 18px}
.style7 {font-size: 18px; font-weight: bold; }
-->
</style>
		

</head>

<body>
  <table width="555" border="0">
  <tr>
    <td >  <img src="images/lo.gif"  />  </td>
    <td width="468"  ><div align="center" class="style3">|| श्री &#2360;&#2350;&#2352;&#2381;&#2341; &#2325;&#2371;&#2346;&#2366; &#2350;&#2358;&#2367;&#2344;&#2352;&#2368;  ||</div>
      <div align="center"><br />
        मार्केट यार्ड,गाळा नं.३ ,मंगळवेढा जि.सोलापुर <br />
    उन्नती पंप चे अधिकृत विक्रेते <br />प्रोप्रा. दत्तात्रय भुसे . मोबाइल ९७६४१६९४८४</div></td>
    </tr>
  <tr>
    <td >&nbsp;</td>
	<td > <div align="center" class="style7">[ Estimate ] </div></td>
	<td> <?php $jdate=date("d/m/Y"); echo"$jdate";?> </td>
  </tr>
</table>
 <table >
 <tr>
 <td width="41" >नाव </td>
 <td width="184">
 <input type="text" name="textfield16" size="30" value=" श्री " />	 </td>
    <td width="137"><div align="right">गाव</div></td>
    <td width="148">
	  <div align="right">
	    <input type="text" name="textfield162" size="20" />	
    </div></td>
  </tr>
 </table>

  <table width="499" height="674" border="0">

  <tr bgcolor="#999999" >
    <td width="21"><div align="center">अ.नं.</div></td>
    <td width="240"><div align="center">तपशिल </div></td>
    <td width="81"><div align="center">नग </div></td>
    <td width="60"><div align="center">दर</div></td>
    <td width="75" height="23"><div align="center">एकूण</div></td>
  </tr>
  <tr> 
    <td height="23"><input type="text" name="sr" size="1" onkeyup="srnumber(this,1);"/></td>
    <td>
       <input type="text" name="textfield" size="1" value="उन्नती " /> <input type="text" name="textfield" size="1" />  <input type="text" name="textfield" size="6" value="एचपी स्टेज "/> <input type="text" name="textfield" size="1" />   </td>
    <td> <input type="text" name="qt" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="pr" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input  type="text"  name="t1" size="10"   onkeyup="minLen(qt.value,pr.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td height="23"><input type="text" name="sr2" size="1"   onkeyup="srnumber(this,2);" /></td>
    <td><input type="text" name="textfield2" size="1" /> <input type="text" name="textfield2" size="10" value="मी   H.D.P.E." /> <input type="text" name="textfield2" size="5" value="6 Kg Jain"/></td>
    <td><input type="text" name="qt12" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="pr12" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input name="t2" type="text" id="t2" size="10" onkeyup="minLen(qt12.value,pr12.value,this,0);" onkeypress="return isNumberKey(event)"  /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr3" size="1" onkeyup="srnumber(this,3);" /></td>
    <td><input type="text" name="textfield3" size="2" /> <input type="text" name="textfield3" size="10" value="मी  केबल"/> <input type="text" name="textfield3" size="3"  value="4  mm" /></td>
    <td><input type="text" name="qt13" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="pr13" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input name="t3" type="text" id="t3" size="10" onkeyup="minLen(qt13.value,pr13.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr4" size="1" onkeyup="srnumber(this,4);" /></td>
    <td><input type="text" name="textfield4" size="30"  value="अडॅप्टर"/></td>
    <td><input type="text" name="qt14" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="pr14" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input name="t4" type="text" id="t4" size="10" onkeyup="minLen(qt14.value,pr14.value,this,0);" onkeypress="return isNumberKey(event)"  /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr5" size="1" onkeyup="srnumber(this,5);" /></td>
    <td><input type="text" name="textfield5" size="30"  value="बोर कॅप + बोर क्लॅंप + निप्पल "/></td>
    <td><input type="text" name="qt15" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr15" size="10"  onKeyPress="return isNumberKey(event)"/></td>
    <td><input name="t5" type="text" id="t5" size="10" onkeyup="minLen(qt15.value,pr15.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr6" size="1" onkeyup="srnumber(this,6);"/></td>
    <td><input type="text" name="textfield6" size="30"  value="बेंड + स्वाकेट + निप्पल "/></td>
    <td><input type="text" name="qt16" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr16" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input name="t6" type="text" id="t6" size="10" onkeyup="minLen(qt16.value,pr16.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr7" size="1" onkeyup="srnumber(this,7);"/></td>
    <td><input type="text" name="textfield7" size="30"  value="पॅनेल बॉक्स + LTLR स्टाटर "/></td>
    <td><input type="text" name="qt17" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr17" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input name="t7" type="text" id="t7" size="10" onkeyup="minLen(qt17.value,pr17.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr8" size="1" onkeyup="srnumber(this,8);"/></td>
    <td><input type="text" name="textfield8" size="30" value="फ्युज + वायर + पेटी + फिटिंग सर्व "/></td>
    <td><input type="text" name="qt18" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr18" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input name="t8" type="text" id="t8" size="10" onkeyup="minLen(qt18.value,pr18.value,this,0);" onkeypress="return isNumberKey(event)"  /></td>
  </tr> 
  <tr>
    <td><input type="text" name="sr9" size="1" onkeyup="srnumber(this,9);"/></td>
    <td><input type="text" name="textfield9" size="30" value="कच्चा रब्बर + चिकट टेप"/></td>
    <td><input type="text" name="qt19" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr19" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="t9" size="10"  onkeyup="minLen(qt19.value,pr19.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr10" size="1" onkeyup="srnumber(this,10);"/></td>
    <td><input type="text" name="textfield10" size="30" /></td>
    <td><input type="text" name="qt110" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr110" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="t10" size="10" onkeyup="minLen(qt110.value,pr110.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr11" size="1" onkeyup="srnumber(this,11);"/></td>
    <td><input type="text" name="textfield11" size="30" /></td>
    <td><input type="text" name="qt111" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="pr111" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="t11" size="10" onkeyup="minLen(qt111.value,pr111.value,this,0);" onkeypress="return isNumberKey(event)"  /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr12" size="1" onkeyup="srnumber(this,12);"/></td>
    <td><input type="text" name="textfield12" size="30" /></td>
    <td><input type="text" name="qt112" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr112" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="t12" size="10" onkeyup="minLen(qt112.value,pr112.value,this,0);" onkeypress="return isNumberKey(event)"  /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr13" size="1" onkeyup="srnumber(this,13);"/></td>
    <td><input type="text" name="textfield13" size="30" /></td>
    <td><input type="text" name="qt113" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr113" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="t13" size="10" onkeyup="minLen(qt113.value,pr113.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr14" size="1" onkeyup="srnumber(this,14);"/></td>
    <td><input type="text" name="textfield14" size="30" /></td>
    <td><input type="text" name="qt114" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="pr114" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="t14" size="10" onkeyup="minLen(qt114.value,pr114.value,this,0);" onkeypress="return isNumberKey(event)"  /></td>
  </tr>
  <tr>
    <td><input type="text" name="sr15" size="1" onkeyup="srnumber(this,15);" /></td>
    <td><input type="text" name="textfield15" size="30"  value="इतर "/></td>
    <td><input type="text" name="qt115" size="10" onKeyPress="return isNumberKey(event)"/></td>
    <td><input type="text" name="pr115" size="10" onKeyPress="return isNumberKey(event)" /></td>
    <td><input type="text" name="t15" size="10"  onkeyup="minLen(qt115.value,pr115.value,this,0);" onkeypress="return isNumberKey(event)" /></td>
  </tr>
  <tr>
    <td height="29" colspan="4"> <div align="right">एकूण  </div></td>
    <td><input type="text" name="total" size="10"   onclick="gtotal(t1.value,t2.value,t3.value,t4.value,t5.value,t6.value,t7.value,t8.value,t9.value,t10.value,t11.value,t12.value,t13.value,t14.value,t15.value,this);" onkeypress="return isNumberKey(event)" /></td>
  </tr>

  <tr >
    <td colspan="5"> <div align="center">कंपनीनुसार मोटर ची किंमत </div></td>
    </tr>
	  <tr >
    <td colspan="5">  </td>
    </tr>
  <tr bgcolor="#999999">
    <td><div align="center">अ.नं.</div></td>
    <td><div align="center">मोटर कंपनी</div></td>
    <td><div align="center">किंमत</div></td>
    <td><div align="center">मटेरियल</div></td>
    <td><div align="center">एकूण किंमत </div></td>
  </tr>
  <tr bgcolor="">
    <td ><input type="text" name="sr152" size="1" onkeyup="srnumber(this,1);"/></td>
    <td><input type="text" name="textfield152" size="30"   /></td>
    <td><input type="text" name="cost1" size="10" /></td>
    <td><input type="text" name="price1" size="10" onblur="extra(t1.value,t2.value,t3.value,t4.value,t5.value,t6.value,t7.value,t8.value,t9.value,t10.value,t11.value,t12.value,t13.value,t14.value,t15.value,this);" onkeypress="return isNumberKey(event)" /></td>
    <td><input type="text" name="tot162" size="10"  onblur="twoadd(cost1.value,price1.value,this);"/></td>
  </tr>
  <tr>
    <td><input type="text" name="sr153" size="1" onkeyup="srnumber(this,2);"/></td>
    <td><input type="text" name="textfield153" size="30" /></td>
    <td><input type="text" name="cost2" size="10" /></td>
    <td><input type="text" name="price2" size="10" onblur="extra(t1.value,t2.value,t3.value,t4.value,t5.value,t6.value,t7.value,t8.value,t9.value,t10.value,t11.value,t12.value,t13.value,t14.value,t15.value,this);" onkeypress="return isNumberKey(event)" /></td>
    <td><input type="text" name="tot163" size="10" onblur="twoadd(cost2.value,price2.value,this);" /></td>
  </tr>
  <tr >
    <td height="21"><input type="text" name="sr154" size="1" onkeyup="srnumber(this,3);"/></td>
    <td><input type="text" name="textfield154" size="30" /></td>
    <td><input type="text" name="cost3" size="10" /></td>
    <td><input type="text" name="price3" size="10" onblur="extra(t1.value,t2.value,t3.value,t4.value,t5.value,t6.value,t7.value,t8.value,t9.value,t10.value,t11.value,t12.value,t13.value,t14.value,t15.value,this);" onkeypress="return isNumberKey(event)" /></td>
    <td><input type="text" name="tot164" size="10" onblur="twoadd(cost3.value,price3.value,this);"/></td>
  </tr>
  <tr>
    <td height="21"><input type="text" name="sr155" size="1" onkeyup="srnumber(this,4);"/></td>
    <td><input type="text" name="textfield155" size="30" /></td>
    <td><input type="text" name="cost4" size="10" /></td>
    <td><input type="text" name="price4" size="10" onblur="extra(t1.value,t2.value,t3.value,t4.value,t5.value,t6.value,t7.value,t8.value,t9.value,t10.value,t11.value,t12.value,t13.value,t14.value,t15.value,this);" onkeypress="return isNumberKey(event)" /></td>
    <td><input type="text" name="tot165" size="10" onblur="twoadd(cost4.value,price4.value,this);"/></td>
  </tr>
  <tr>
    <td height="97" colspan="5"><p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>|| शेतकरी सुखी तर जग सुखी ||</p>
    <p align="right"><span class="style6"> सही व शिक्का</span></p></td>
  </tr>
</table>
  
</body>
</html>
