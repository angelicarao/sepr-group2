<?php
include 'includes/header.php';
include 'php/session.php';
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Gallery July Morning" />
<link rel="stylesheet" type="text/css" href="css/demoG.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />

<h1 id = "title">Gallery</h1>
<section class="cr-container">

    <input id="select-img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
    <label for="select-img-1" class="cr-label-img-1">1</label>

    <input id="select-img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
    <label for="select-img-2" class="cr-label-img-2">2</label>

    <input id="select-img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
    <label for="select-img-3" class="cr-label-img-3">3</label>

    <input id="select-img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
    <label for="select-img-4" class="cr-label-img-4">4</label>

    <div class="clr"></div>	
    <div class="cr-bgimg">
        <div>
            <span>Slice 1 - Image 1</span>
            <span>Slice 1 - Image 2</span>
            <span>Slice 1 - Image 3</span>
            <span>Slice 1 - Image 4</span>
        </div>
        <div>
            <span>Slice 2 - Image 1</span>
            <span>Slice 2 - Image 2</span>
            <span>Slice 2 - Image 3</span>
            <span>Slice 2 - Image 4</span>
        </div>
        <div>
            <span>Slice 3 - Image 1</span>
            <span>Slice 3 - Image 2</span>
            <span>Slice 3 - Image 3</span>
            <span>Slice 3 - Image 4</span>
        </div>
        <div>
            <span>Slice 4 - Image 1</span>
            <span>Slice 4 - Image 2</span>
            <span>Slice 4 - Image 3</span>
            <span>Slice 4 - Image 4</span>
        </div>
    </div>
    <div class="cr-titles">
        <h3><span></span><span>Meet the first sun rays of July</span></h3>
        <h3><span></span><span>Where the fun begins</span></h3>
        <h3><span></span><span></span></h3>
        <h3><span></span><span>An echo from the hipie era</span></h3>
    </div>
</section>
 <?php
  include 'includes/footer.php';  
 ?>