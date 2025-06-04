<?php include('header.php');?>

<div class="carousel-container">
  <h1>Node Maps</h1>
  <div class="note" style="padding:20px;">Click images for more detail</div>

  <!-- Radio Buttons -->
  <input type="radio" name="carousel" id="slide1" checked>
  <input type="radio" name="carousel" id="slide2">
  <input type="radio" name="carousel" id="slide3">

  <!-- Slides -->
  <div class="slides">
    <div class="slide">
      <a href="#lightbox1">
        <img src="https://journalofexpresearch.com/UNLS/images/maps/word.png" alt="Word Image">
      </a>
    </div>
    <div class="slide">
      <a href="#lightbox2">
        <img src="https://journalofexpresearch.com/UNLS/images/maps/reading.png" alt="Reading Image">
      </a>
    </div>
    <div class="slide">
      <a href="#lightbox3">
        <img src="https://journalofexpresearch.com/UNLS/images/maps/nodestackmap.png" alt="Node Stack">
      </a>
    </div>
  </div>

  <!-- Navigation Arrows -->
  <div class="navs">
    <!-- slide1 nav -->
    <label for="slide3" class="cnav left s1-left">&#10094;</label>
    <label for="slide2" class="cnav right s1-right">&#10095;</label>
    <!-- slide2 nav -->
    <label for="slide1" class="cnav left s2-left">&#10094;</label>
    <label for="slide3" class="cnav right s2-right">&#10095;</label>
    <!-- slide3 nav -->
    <label for="slide2" class="cnav left s3-left">&#10094;</label>
    <label for="slide1" class="cnav right s3-right">&#10095;</label>
  </div>
</div>

<!-- Lightboxes -->
<div id="lightbox1" class="lightbox">
  <a href="#" class="lightbox-close">&times;</a>
  <img src="https://journalofexpresearch.com/UNLS/images/maps/word.png" alt="Word">
</div>
<div id="lightbox2" class="lightbox">
  <a href="#" class="lightbox-close">&times;</a>
  <img src="https://journalofexpresearch.com/UNLS/images/maps/reading.png" alt="Reading">
</div>
<div id="lightbox3" class="lightbox">
  <a href="#" class="lightbox-close">&times;</a>
  <img src="https://journalofexpresearch.com/UNLS/images/maps/nodestackmap.png" alt="Node Stack">
</div>

</body>
</html>
