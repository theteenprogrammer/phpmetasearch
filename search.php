<style>
//strip branding, header and footer
.KP7LCb { display:none;}
#extrares { display:none;}
.bz1lBb { display:none;}
.cOl4Id { display:none;}
#ft_wrapper { display:none;}
#sticky-hd { display:none;}
. catKG { display:none;}
.KgCompany { display:none;}
#horizontal-bar { display:none;}
#b_header { display:none;}
#b_tween { display:none;}
.b_entityTP { display:none;}
.b_footer { display:none;}
#df_listaa { display:none;}
#b_pole { display:none;}
.tHmfQe {display:none;}
.KP7LCb {display:none;}
.BmP5tf {display:none;}
#mCljob {display:none;}
.searchCenterTopAds {display:none;}
.searchCenterBottomAds {display:none;}
.searchCenterFooter {display:none;}
.Sugg {display:none;}
.searchBottom {display:none;}
.b_adLastChild {display:none;}
.b_pag {display:none;}
.bingrelqa {display:none;}

//searchbar styling
.search{
height:40px; 
width:320px;
border: 2px solid lightgreen;
border-radius: 100px;
font-size:20px;
text-align:center;
}
.submit{
  background-color: lightgrey;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 100px;
}
</style>
<?php
//search query
$search = $_POST['q'];
$search1 = str_replace(" ","+",$search);
//search engines

$google = 'https://www.google.com/search?q='.$search1;
$yahoo1 = 'https://search.yahoo.com/search?p=';
$bing1 = 'https://www.bing.com/search?q=';
$yandex1 = 'https://yandex.com/search/?text=';

//file_get_contents
$google1 = file_get_contents($google);
$google2 = str_replace("/url?q=","https://www.google.com/url?q=",$google1);
$yahoo2 = $yahoo1.$search1;
$bing2 = $bing1.$search1;

?>
<!-- searchbar -->
<form action="search.php" method="post">
<div class="searching">
<input type="text" name="q" class="search"/><br/>
<input type="submit" class="submit" value="Search">
</form>
</div>
<!-- google search results -->
<p style="font-size:100px;">Content from Google:</p><br/>
<?php 
echo $google2;
?><br/>

<!-- yahoo search results -->
<p style="font-size:100px;">Content from Yahoo:</p></br>
<?php
echo file_get_contents($yahoo2);
?><br/>

<!-- bing search results -->
<p style="font-size:100px;">Content from Bing:</p><br/>
<?php 
echo file_get_contents($bing2);
?>
