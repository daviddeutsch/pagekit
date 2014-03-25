@script('weather', 'system/js/dashboard/weather.js', ['requirejs'])

<div class="uk-form-row">
    <label for="form-weather-location" class="uk-form-label">@trans('Location')</label>
    <div class="uk-form-controls">
        <div class="uk-autocomplete">
            <input id="form-weather-location" class="uk-form-width-large" type="search" name="widget[location]" value="@widget.get('location')" autocomplete="off">
            <input type="hidden" name="widget[id]" value="@widget.get('id')">
        </div>
        <p class="uk-form-help-block">@trans('Enter the name of the city you want to get weather information for.')</p>
    </div>
</div>

<div class="uk-form-row">
    <span class="uk-form-label">@trans('Unit')</span>
    <div class="uk-form-controls uk-form-controls-text">
        <p class="uk-form-controls-condensed">
            <label><input type="radio" name="widget[units]" value="metric" @(widget.get('units')=='metric' || widget.get('units')=='' ? 'checked')> @trans('Metric')</label>
        </p>
        <p class="uk-form-controls-condensed">
            <label><input type="radio" name="widget[units]" value="imperial" @(widget.get('units')=='imperial' ? 'checked')> @trans('Imperial')</label>
        </p>
    </div>
</div>