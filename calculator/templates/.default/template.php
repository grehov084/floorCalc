<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="calc">
    <form class="calc__form calc-form">
        <div class="calc-form__elem">
            <label class="calc-form__label" for="#room-width">Длина комнаты (см):</label>
            <input class="calc-form__input" id="room-width" type="text">
        </div>
        <div class="calc-form__elem">
            <label class="calc-form__label" for="#room-height">Ширина комнаты (см):</label>
            <input class="calc-form__input" id="room-height" type="text">
        </div>
        <div class="calc-form__elem">
            <label class="calc-form__label" for="#panel-width">Длина панели ламината (см):</label>
            <input class="calc-form__input" id="panel-width" type="text">
        </div>
        <div class="calc-form__elem">
            <label class="calc-form__label" for="#panel-height">Ширина панели ламината (см):</label>
            <input class="calc-form__input" id="panel-height" type="text">
        </div>
        <div class="calc-form__elem">
            <label for="">Направление укладки:</label>
            <div class="call-form-direction">
                <div class="call-form-direction__elem">
                    <input type="radio" class="checkbox-direction" value="90" name="checkbox-direction" id="checkbox-direction-width">
                    <label for="checkbox-direction-width">по ширине  90°</label>
                </div>
                <div class="call-form-direction__elem">
                    <input type="radio" class="checkbox-direction" value="0" name="checkbox-direction" id="checkbox-direction-height">
                    <label for="checkbox-direction-height">по длине 0°</label>
                </div>
                <div class="call-form-direction__elem">
                    <input type="radio" class="checkbox-direction" value="45" name="checkbox-direction" id="checkbox-direction-diagonal">
                    <label for="checkbox-direction-diagonal">по диагонали 45°</label>
                </div>
            </div>
        </div>
        <div class="calc-form__elem">
            <label for="">Количество панелей:</label>
            <label for="" id="result">-</label>
            <label for="">шт.</label>
        </div>
        <input class="calc-form__submit" type="button" value="Рассчитать">
    </form>
    <div class="calc-error">
        <div class="calc-error-message">
            <div class="calc-error-container">
                <div class="calc-error__close">
                    X
                </div>
                <div class="calc-error-text">
                    Введено некорректное значение
                </div>
                <div class="calc-error-action">
                    <input type="submit" value="Закрыть" class="calc-error__submit">
                </div>
            </div>
        </div>
    </div>
</div>
<? $this->addExternalCss($this->GetFolder()."/assets/css/style.css"); ?>
