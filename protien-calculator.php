<?php
// Template Name: Protien Calculator
get_header();
global $venedor_settings;
?>

<div id="content" class="site-content" role="main">
	<?php
	global $venedor_layout, $venedor_settings;
	?>

  <style>
  .select-container .select-container-inner {
    float: right;
    width: 48%;
    margin-right: 4%;
    box-sizing: border-box;
  }
  .select-container select {
    width: 100%;
    background-color: #f0f0f0;
    padding-left: 10px;
    height: 41px;
    border-radius: 3px;
    font-size: 16px;
    font-size: 1.6rem;
    border: 1px solid #cacaca;
  }
  .range-container {
    padding-top: 30px;
  }
  .range-container input[type="number"] {
    background: #fff;
    border: 1px solid #c8c8c8;
    color: #4c4d4c;
    height: auto;
    width: 4em;
    padding: 12px 4px 12px 16px;
    text-align: center;
    border-radius: 3px;
  }
  .icon-minus, .icon-plus{
    margin: 0 10px;
    cursor: pointer;
    color: #fff;
    display: inline-block;
    line-height: 2.5;
    background: #db212b;
    background: -moz-linear-gradient(top, #db212b 0%, #dd383f 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #db212b), color-stop(100%, #dd383f));
    background: -webkit-linear-gradient(top, #db212b 0%, #dd383f 100%);
    background: -o-linear-gradient(top, #db212b 0%, #dd383f 100%);
    background: -ms-linear-gradient(top, #db212b 0%, #dd383f 100%);
    background: linear-gradient(to bottom, #db212b 0%, #dd383f 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#000000', GradientType=0);
    border: 1px solid #791216;
    border-bottom-width: 5px;
    border-radius: 3px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
  }
  input[type="range"] {
    -webkit-appearance: none;
    margin-top: 15px;
    width: 100%;
    border: 0px solid #000;
    background-color: transparent;
  }
  p[class*="-out"] {
    color: #dd333b;
    font-size: 20px;
  }

  </style>

  <div class="select-container">
    <div class="select-container-inner">
      <select id="pc-unit" name="pc-unit">
        <option value="-1">Weight unit</option>
        <option value="0">lbs</option>
        <option value="1">kg</option>
      </select>
      <span class="select-error-unit hidden">Please select weight unit</span>
    </div>
    <div class="select-container-inner">
      <select id="pc-activity" name="pc-activity">
        <option value="-1">Activity level</option>
        <option value="0.36">Normal person</option>
        <option value="0.54">Intermediate athlete</option>
        <option value="0.72">Serious bodybuilder</option>
      </select>
      <span class="select-error-activity hidden">Please select activity level</span>
    </div>
  </div>

  <div class="range-container">
    <span id="pc-weight-dec" class="icon-minus"></span>
    <input id="pc-weight-text" max="350" min="1" type="number" value="">
    <span id="pc-weight-inc" class="icon-plus"></span>
    <label for="pc-weight">Weight: <span id="pc-slider-weight" class="js-input">73</span></label>
    <input id="pc-weight" max="350" min="1" step="1" type="range" value="80">
  </div>

  <p class="pc-out">Your protein intake equals <span id="pc-out" class="js-input">26</span> grams/day</p>

</div>

<?php get_footer(); ?>
