<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<form action="<?=$arResult["FORM_ACTION"]?>" class="search-form__item">
	<?if($arParams["USE_SUGGEST"] === "Y"):?>
		<?$APPLICATION->IncludeComponent(
			"bitrix:search.suggest.input",
			"",
			array(
				"NAME" => "q",
				"VALUE" => "",
				"INPUT_SIZE" => 15,
				"DROPDOWN_SIZE" => 10,
			),
		$component, array(
			"HIDE_ICONS" => "Y"
		));?>
	<?else:?>
		<input type="text" name="q" value="" id="search-enter" class="search__enter">
		<label for="search-enter" class="search__placeholder">Введите запрос</label>
		<input type="submit" value="Найти" class="search__button">
	<?endif;?>
</form>