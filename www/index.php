<?php include_once('./header.php');?>
<div class="container">
  <p>Filler content</p>
</div>
     
<div class="container">
  <p>Filler content</p>
</div>

<div class="container">
  <!-- Content here -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <div class="row">
    <div class="col-sm-12">
      <div class="section-header text-center">
        <h1>Client Impact</h1> 
        <div class="border"></div>
        <p class="comment"> "We will add this when our client provides the information" </p>
        <h3 class="industry">Industry</h3> 
      </div>
    </div>
    <div class="col-sm-12">
      <div id="customers" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#customers" data-bs-slide-to="0"  aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#customers" data-bs-slide-to="1" class="active" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#customers" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item">
            <div class="icon-area">
              <i class="customer customer-comments"></i>
            </div>
            <div class="content text-center">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia nulla rem ut possimus veritatis, inventore dolores optio voluptas quo eligendi exercitationem voluptatum atque commodi? Magni eveniet tenetur hic provident.</p>
              <div class="person">
                <img src="#" alt="">
              </div>
              <h5>Miles Wildmore</h5>
              <h6>Front-End Web Developer</h6>
            </div>
          </div>
          <div class="carousel-item active">
            <div class="icon-area">
              <i class="customer customer-comments"></i>
            </div>
            <div class="content text-center">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia nulla rem ut possimus veritatis, inventore dolores optio voluptas quo eligendi exercitationem voluptatum atque commodi? Magni eveniet tenetur hic provident.</p>
              <div class="person">
                <img src="#" alt="">
              </div>
              <h5>Nicolas Cawein</h5>
              <h6>IT Consultant</h6>
            </div>
          </div>
          <div class="carousel-item">
          <div class="icon-area">
              <i class="customer customer-comments"></i>
            </div>
            <div class="content text-center">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia mollitia nulla rem ut possimus veritatis, inventore dolores optio voluptas quo eligendi exercitationem voluptatum atque commodi? Magni eveniet tenetur hic provident.</p>
              <div class="person">
                <img src="#" alt="">
              </div>
              <h5>Maximo Del Valle</h5>
              <h6>Senior Web Developer</h6>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#customers" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customers" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
          </div>
  
        </div>
      </div>
    </div>
  </div>
</div>
   
<?php include_once('./footer.php'); ?>