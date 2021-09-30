<?php

$titles = $_GET['titles'];

switch($titles){
    case "지구 끝의 온실" : ?> 
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=276926308'> <?php break;
    case "럭키" : ?> 
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=278177114&start=slayer'> <?php break;
    case "캐릭터 직업 사전" : ?> 
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=278203857'> <?php break;
    case "느끼고 아는 존재" : ?> 
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=278605439'> <?php break;
    case "밝은 밤" : ?> 
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/shop/wproduct.aspx?ItemId=275419192&'> <?php break;
    default : ?> <!--이 외는 통합검색 창으로 이동-->
        <meta http-equiv='refresh' content='0;https://www.aladin.co.kr/search/wsearchresult.aspx?SearchTarget=All&SearchWord=<?php echo "$titles"?>&x=0&y=0'> <?php break;
}
?>
