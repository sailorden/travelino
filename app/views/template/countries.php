<div class="intro-side full-height">
  <div class="intro-wrapper">
    <h1 class="intro-title">Страны</h1>
  </div>
</div>
<div class="covert-side full-height">
{{outlet}}
</div>
<div class="content-side full-height scrollbar">
<ol>
{{#each}}
  <li class="roll-item">
    <div class="roll-image"><img alt="" src="http://lorempixel.com/300/300/city/?i={{id}}"></div>
    <div class="roll-info"><div class="roll-info-wrapper">
      <div class="roll-info-wrp-top">
        <h2>{{name_ru}}</h2>
        <h3>{{#link-to 'country' this.continent_id}}{{continent_name_ru}}{{/link-to}}</h3>
      </div>
      <div class="roll-info-wrp-bottom">
        В первом примере мы будем использовать только некоторые базовые переходы, чтобы создать неплохой эффект при наведении курсора
      </div>
      <div class="roll-info-wrp-stat">
          2000
      </div>
      <div class="roll-info-hoverer">
        <a class="btn btn-primary" {{action 'briefAboutCity'}}>Коротко</a>
        {{#link-to 'country' this class='btn btn-primary'}}Подробнее{{/link-to}}
        <a class="btn btn-primary">***</a>
      </div>
    </div></div>
  </li>
{{/each}}
</ol>
</div>