<?php include_once('./header.php');?>
<div class="container">
  <p>Filler content</p>
</div>
     
<div class="container">
  <p>Filler content</p>
</div>

<div class="container">
  <!-- Content here -->
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
          <button type="button" data-bs-target="#customers" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#customers" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#customers" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
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
          <div class="carousel-item">
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
   <style>

    body {
      background-color: #36628c;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .comment {
      color: white;
      text-align: center;
      font-size: 20px;

    }
    
    .testimonial .container {
      width: 100%;
      margin: auto;
    }

    .border {
      width: 160px;
      height: 5px;
      background: white;
      margin: 26px auto;
    }

    .industry {
      display: flex;
      justify-content: center;
      color: white;
      font-weight: bold;
    }

    .section-header h1{
      font-weight: 600;
      color: white;
      padding-bottom: 10px;
    }

    .icon-area {
      text-align: center;
    }

    .icon-area i {
      color: white;
      font-size: 80px;
      margin-bottom: 20px;
    }
    .content p{
      color: white;
      margin: auto;
      width: 60%;
    }

    .person{
      width: 100px;
      height: 100px;
      display: block;
      margin: auto;
      border-radius: 50%;
      overflow: hidden;
      border: 5px solid #0c2440;
      margin-top: 50px;
    }

    .person img{
      width: 100%;
    }


    .content h5 {
      color:white;
      font-weight: 800;
      margin-top: 15px;
    }

    .content h6 {
      color: white;
    }

    .carousel-indicators{
      bottom: -80px;
    }

    .carousel-indicators [data-bs-target]{
      width: 60px;
      height: 10px;
      background-color: white;
    }

    .carousel-control-prev {
      padding-top: 250px;
      left: 0;
      background-color: #36628C;
      height: 30px;
      color: white;
      border: none;
      
    }

    .carousel-control-next {
    padding-top: 250px;
    right: 0;
    background-color: #36628C;
    height: 30px;
    color: white;
    border: none;
}
    @media (max-width: 768px) and (max-width: 991 px){
      .section-header p{
        width: 85%;
      }
      .content p{
        width: 95%;
      }
    }

    @media (max-width: 767px){

    }
    </style>

<?php include_once('./footer.php'); ?>