<?
// ���������� ����� �� ���������� ����������
$arSort = array(
      $arParams["SORT_BY1"]=>$arParams["SORT_ORDER1"],
      $arParams["SORT_BY2"]=>$arParams["SORT_ORDER2"],
   );
// ������� ����� id ��������, ��� ��� � ������. ����� �������� ����� ������ ����, �������� PREVIEW_PICTURE ��� PREVIEW_TEXT
$arSelect = array(
      "ID",
      "NAME",
      "DETAIL_PAGE_URL"
   );
// �������� �������� �������� �� ������� ���������. ���������������� ������ ����� ���������� �������
$arFilter = array (
      "IBLOCK_ID" => $arResult["IBLOCK_ID"],
      //"SECTION_CODE" => $arParams["SECTION_CODE"],
      "ACTIVE" => "Y",
      "CHECK_PERMISSIONS" => "Y",
   );
// �������� ����� �� 1 ������ � ������ ������� �� ��������
$arNavParams = array(
      "nPageSize" => 1,
      "nElementID" => $arResult["ID"],
   );
$arItems = Array();
$rsElement = CIBlockElement::GetList($arSort, $arFilter, false, $arNavParams, $arSelect);
$rsElement->SetUrlTemplates($arParams["DETAIL_URL"]);
while($obElement = $rsElement->GetNextElement())
      $arItems[] = $obElement->GetFields();
// ������������ �� 1�� �� 3� ��������� � ����������� �� ������� �������, ������������ ��� ��������      
if(count($arItems)==3):
   $arResult["TORIGHT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"]);
   $arResult["TOLEFT"] = Array("NAME"=>$arItems[2]["NAME"], "URL"=>$arItems[2]["DETAIL_PAGE_URL"]);
elseif(count($arItems)==2):
   if($arItems[0]["ID"]!=$arResult["ID"])
      $arResult["TORIGHT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"]);
   else
      $arResult["TOLEFT"] = Array("NAME"=>$arItems[1]["NAME"], "URL"=>$arItems[1]["DETAIL_PAGE_URL"]);
endif;
// � $arResult["TORIGHT"] � $arResult["TOLEFT"] ����� ������� � ����������� � �������� ���������
?> 