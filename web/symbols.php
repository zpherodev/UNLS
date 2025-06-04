<?php include('header.php');?>

<div class="carousel-container">
  <h1>UNLS Symbols</h1>
  <div class="note" style="padding:20px;">UNLS creator and designer CR Kunferman created a special set of glyphs to go with the Universal Node Linguistic System (UNLS). These glyphs serve to highlight the system's aim: to respect the core of language and offer a truly universal way to communicate.

Each glyph is a symbol for a basic unit of meaning within the UNLS. Designed to be understood by anyone, they go beyond specific languages. They represent the main conceptual groups like Focus, Identity, Action, Spatial, and Quantitative, along with their detailed subdivisions. More than just decorative images, each glyph acts as a clear, universally recognized label for its node. Like the nodes they are designed for the reader to more easily understand how meaning is structured across different languages, cultures, and even between species. By making abstract meaning visible, these glyphs not only honor the diversity and shared essence of all expression but also provide a powerful tool for deep, universal understanding and interaction."</div>

  <!-- Radio Buttons -->
  <input type="radio" name="carousel" id="slide1" checked>
  <input type="radio" name="carousel" id="slide2">
  <input type="radio" name="carousel" id="slide3">

  <!-- Slides -->
  <div class="slides">
    <div class="slide" style="background:#FFF;">
      <a href="#lightbox1">
        <img src="https://journalofexpresearch.com/UNLS/images/FOCUSsymbols.png" alt="Word Image">
      </a>
    </div>
    <div class="slide">
      <a href="#lightbox2" style="background:#FFF;">
        <img src="https://journalofexpresearch.com/UNLS/images/IDENTITY-ACTION.png" alt="Reading Image">
      </a>
    </div>
    <div class="slide">
      <a href="#lightbox3" style="background:#FFF;">
        <img src="https://journalofexpresearch.com/UNLS/images/QUANT-SPACE.png" alt="Node Stack">
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
<div id="lightbox1" class="lightbox" style="background:#FFF;">
  <a href="#" class="lightbox-close">&times;</a>
  <img src="https://journalofexpresearch.com/UNLS/images/FOCUSsymbols.png" alt="Word">
</div>
<div id="lightbox2" class="lightbox" style="background:#FFF;">
  <a href="#" class="lightbox-close">&times;</a>
  <img src="https://journalofexpresearch.com/UNLS/images/IDENTITY-ACTION.png" alt="Reading">
</div>
<div id="lightbox3" class="lightbox" style="background:#FFF;">
  <a href="#" class="lightbox-close">&times;</a>
  <img src="https://journalofexpresearch.com/UNLS/images/QUANT-SPACE.png" alt="">
</div>

</body>
</html>
