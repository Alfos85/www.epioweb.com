<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<p>фыва</p>
 
<?$APPLICATION->IncludeComponent(
	"bitrix:support.ticket.list",
	"",
	Array(
		"TICKET_EDIT_TEMPLATE" => "ticket_edit.php?ID=#ID#",
		"TICKETS_PER_PAGE" => "50",
		"SET_PAGE_TITLE" => "Y",
		"SET_SHOW_USER_FIELD" => ""
	)
);?>

