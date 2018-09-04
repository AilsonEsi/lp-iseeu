<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

  <title>IseeU - Charity</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('')}}">


    <!-- send email ajax-->
    <script>

      function sendEmail() {

        var email = document.getElementById("email-text").value;

        var http = new XMLHttpRequest();
        http.open("POST", "./subscribed/sendemail.php", true);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.onreadystatechange = function () {
          if (http.readyState == 4 && http.status == 200) {
            $("#submited-form-response").val(http.responseText);
          }
        }
        http.send("email=" + email);
      }

    </script>


<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Raleway", sans-serif;
  }
  body,
  html {
    height: 100%;
    line-height: 1.8;
    font-family: GothamBook;
  }
  /* Full height image header */
  .bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url(../img/background.jpg);
    min-height: 100%;
  }
  .w3-bar .w3-button {
    padding: 16px;
  }

  #telegram-float {
    height: 50px;
    width: 150px;
    border-top-left-radius: 100px;
    border-bottom-left-radius: 100px;
    background: rgb(179, 15, 15);
    line-height: 50px;
    text-align: center;
    padding: 0 10px;
    position: fixed;
    right: 0;
    bottom: 20px;
    z-index: 800;
    color: aliceblue;
  }

  a {
    text-decoration: none;
  }

  footer {
    background-image: url(../img/backG2.jpg);
  }

  .top-title{
   color: rgb(179, 15, 15);
  }


  @media(max-width: 960px){
    #img-banner{
      display: none;
    }

  }
</style>

</head>

<body>

  <!-- Navbar (sit on top) -->
  <div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
      <a href="#home" class="w3-bar-item w3-button w3-wide">
        <strong>ISeeU - Charity</strong>
      </a>
      <!-- Right-sided navbar links -->
      <div class="w3-right w3-hide-small">
        <a href="#about" class="w3-bar-item w3-button">
          <i class="fa fa-flash">FEATURE</i>
        </a>  
          <a href="#team" class="w3-bar-item w3-button">
            <i class="fa fa-group"></i> TEAM</a>
            <a href="#contact" class="w3-bar-item w3-button">
              <i class="fa fa-envelope"></i> CONTACT</a>
            <a class="w3-bar-item w3-button" style="background-color: rgb(179, 15, 15); color: white" onclick="document.getElementById('id01').style.display='block'">
              <i class="fa fa-external-link"></i>LOGIN</a>
            <a href="temporalpage" target="_blank" onclick="w3_close()" class="w3-bar-item w3-button" style="background-color: rgba(29, 29, 29, 0.918); color: white">DEMO - PLATFORM</a>
      </div>
      <!-- Hide right-floated links on small screens and replace them with a menu icon -->

      <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
        <i class="fa fa-bars"></i>
      </a>
    </div>
  </div>

  <!-- Sidebar on small screens when clicking the menu icon -->
  <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">FEATURE</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    <a class="w3-bar-item w3-button"  onclick="document.getElementById('id01').style.display='block'">LOGIN</a>
    <a href="temporalpage" target="_blank" class="w3-bar-item w3-button" style="background-color: rgba(252, 72, 1, 0.822)">DEMO - PLATFORM</a>
  </nav>

  <!--LOGIN FORM-->

  <div id="id01" class="w3-modal">
      <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
    
        <div class="w3-center"><br>
          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close Modal">×</span>
          <img src="img_avatar4.png" alt="" style="width:30%" class="w3-circle w3-margin-top">
        </div>
  
        <form class="w3-container" action="/action_page.php">
          <div class="w3-section">
            <label><b>Email</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="email" placeholder="Enter Email" name="user_email" required>
            <label><b>Password</b></label>
            <input class="w3-input w3-border" type="text" placeholder="Enter Password" name="psw" required>
            <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Login</button>
            <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me
          </div>
        </form>
  
        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
        </div>
  
      </div>
    </div>

  <!-- Header with full-height image -->
  <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
    <img src="{{asset('img/winner.png')}}" style="width: 30%; margin-top: 100px;">
    <div class="w3-display-left w3-text-white" style="padding:48px">
      <span class="w3-jumbo w3-hide-small">Time is money, use one or both to change lifes.</span>
      <br>
      <span class="w3-xxlarge w3-hide-large w3-hide-medium">Time is money, use one or both to change lifes.</span>
      <br>
      <span class="w3-large">ISeeU - Charity provide best service and transparency in your donation.</span>
      <p>
        <a href="temporalpage" target="_blank" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off ">
          <i class="fa fa-heartbeat" style="color: red">Start make your donation.</i>
        </a>
      </p>
    </div>
    <div class="w3-display-bottomleft w3-text-grey w3-xlarge" style="padding:24px 48px">
      <a href="https://www.facebook.com/Iseeu-294380324457461" target="_blank">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
      </a>
      <a href="https://www.crunchbase.com/organization/iseeu" target="_blank">
        <i class="fa fa-crunchbase-p w3-hover-opacity"></i>
      </a>
      <a href="https://angel.co/iseeu-platform" target="_blank">
        <i class="fa fa-angellist w3-hover-opacity"></i>
      </a>
      <a href="https://www.linkedin.com/company/iseeu-charity" target="_blank">
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </a>
    </div>
  </header>

  <div id="telegram-float">
    <a href="https://share.hsforms.com/1BpUwa6R0ToWxT884J6kpqA2v5w8" target="_blank">
      <i class="fa fa-external-link">HELP US</i>
    </a>
  </div>

  <!-- About Section -->
  <div class="w3-container" style="padding:128px 16px" id="about">
    <h3 class="w3-center top-title">ABOUT THE COMPANY</h3>
    <p class="w3-center w3-large">Key features of our company</p>
    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <i class="fa fa-plus w3-margin-bottom w3-jumbo w3-center"></i>
        <p class="w3-large">Project ativation with voting</p>
        <p>Every one can submite the project, but only the project witch have more voting will be acepted to receive donations.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-money w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Money and Cryptocurrency donations</p>
        <p>Our platform can accept Money and Cryptocurrency. Using our platform the donors get more options.</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Rewards for donors</p>
        <p>Rewarding you for givin time and money to a charitable projet..</p>
      </div>
      <div class="w3-quarter">
        <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
        <p class="w3-large">Emergency Fund</p>
        <p>For all project witch receive the notation we will charge some fee for emergency fund.</p>
      </div>
    </div>
  </div>


    <!-- Process -->
    <div class="w3-container" style="background-image: url(img/backG2.jpg); color: white; font-size: 20pt; font-size: 50pt;">
      <!-- First Grid -->
      <div class="w3-row-padding  w3-padding-64">
        <div class="w3-content">
          <div class="w3-twothird">
            <h1>The problem we are addressing is:</h1>
            <h5 class="w3-padding-32" style="font-size: 15pt; text-align: justify;">
              If time is money why volunteers who give their time have less favorabilities/opportunities to donate? Factors such as Geography,
              Social recognition, Charity Projects requirements and Social Culture play an important role in this issue and
              because of these inequalities money is more valued than time, leaving the Volunteers who give their time less
              appreciated.</div>
  
          <div class="w3-third w3-center">
            <i class="fa fa-warning w3-padding-64 w3-text-red"></i>
          </div>
        </div>
      </div>
  
      <!-- Second Grid -->
      <div class="w3-row-padding  w3-padding-64">
        <div class="w3-content">
  
          <div class="w3-twothird">
            <h1>Our solution to this problem is:</h1>
            <h5 class="w3-padding-32" style="font-size: 15pt; text-align: justify;">
              We created a charity community on our ISeeU platform with two main participants helping raising funds. The Volunteers offer
              their time and skills to their favorite projects and Financials donors are encouraged to donate to the projects
              receiving Volunteer work as a reward.</h5>
          </div>
          <div class="w3-third w3-center">
            <i class="fa fa-lightbulb-o w3-padding-64 w3-text-red w3-margin-right"></i>
          </div>
        </div>
      </div>
    </div>

  <!-- Promo Section - "We know design" -->
  <div class="w3-container w3-light-grey " style="padding:128px 16px;">
    <div class="w3-row-padding">
      <div class="w3-col m6">
        <h3>IseeU - Charity.</h3>
        <p>IseeU - Charity is a Blockchain platform that
          <strong>connects volunteer led charitable projects with financials donors</strong>. The payment reward is a service provided
          by project volunteers. Rewarding you for givin time and money to a charitable projet. Connecting Volunteer led
          charitable projets with the means to finance them. Rewarding the ones that give time and money to charitable projets.
          Your time is money to those in need.</p>
        <p>
          <a href="#work" class="w3-button w3-black">
            <i class="fa fa-eye">See what media are talking.</i>
          </a>
        </p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="img/team.jpg" alt="Buildings" width="700" height="394" style="box-shadow: 10px 10px 5px rgba(0, 0, 0, 0.4);">
      </div>
    </div>
  </div>

  <!-- Process -->
  <div class="w3-container" style="background-image: url(img/backG2.jpg); color: white; font-size: 20pt; font-size: 50pt;">
    <!-- First Grid -->
    <div class="w3-row-padding  w3-padding-64">
      <div class="w3-content">
          
        <div class="w3-twothird">
          <h1>FINANCIAL DONORS</h1>
          <h5 class="w3-padding-32" style="font-size: 15pt; text-align: justify;">
            In the ISeeU community our financial donors are people who want to help others though money. A person who give out of the
            goodness of their hearts. The ISeeU founders strongly believe that giving money to charity isn’t an one way street
            and we want to give you a reward for helping others. That's why we let you choose from the services provided
            by our volunteer community. </div>
   
          <div class="w3-third w3-center">
             <i class="fa fa-male w3-padding-64 w3-text-red"></i>
          </div>
      </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding  w3-padding-64">
      <div class="w3-content">
        <div class="w3-twothird">
          <h1>SUBMITED PROJECT</h1>
          <h5 class="w3-padding-32" style="font-size: 15pt; text-align: justify;">
            Charitable projects, approved and certified though our AI, they need your attention. We make our mission to shine a light
            at them in our platform. Their are the ones who need this, and if this project ends up in here they made their
            part trying to change their life. Now it’s time for our community to do theirs.</h5>
        </div>
        <div class="w3-third w3-center">
            <i class="fa fa-heartbeat w3-padding-64 w3-text-red w3-margin-right"></i>
        </div>
      </div>
    </div>

    <!-- Thirty Grid -->
    <div class="w3-row-padding  w3-padding-64">
      <div class="w3-content">
          
        <div class="w3-twothird">
          <h1>VOLUNTEER DONORS</h1>
          <h5 class="w3-padding-32" style="font-size: 15pt; text-align: justify;">
            We praise the volunteer work, that's one of the reasons ISeeU exists. We empower Volunteer to choose charitable projects
            that they have affinity with and to be their backers, helping them achieve success thought the reward that their
            services provide to financial donor. Volunteers no longer have to leave their country to help another people
            on the other side in the world, just join ISeeU and be apart of the change.
            <p class="w3-text-grey"></p>
        </div>
        <div class="w3-third w3-center">
            <i class="fa fa-group w3-padding-64 w3-text-red"></i>
          </div>
      </div>
     
    </div>
  </div>

  <!-- Promo Section "Statistics" -->
  <div class="w3-container w3-row w3-center w3-padding-64" style="background-color: black; color: white">
    <div class="w3-quarter">
      <span class="w3-xxlarge">3+</span>
      <br>Potential Partners
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">1+</span>
      <br>Projects Submited
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">0+</span>
      <br>Subscribed Donors
    </div>
    <div class="w3-quarter">
      <span class="w3-xxlarge">0+</span>
      <br>Project Done
    </div>
  </div>


  <!-- Team Section -->
  <div class="w3-container" style="padding:128px 16px" id="team">
    <h3 class="w3-center top-title">THE TEAM</h3>
    <p class="w3-center w3-large">The ones who runs this company</p>
    <div class="w3-row-padding w3-grayscale" style="margin-top:64px;">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/kenio.jpg" alt="John" style="width:100%">
          <div class="w3-container">
            <h3>Kenio de Brito</h3>
            <p class="w3-opacity">CEO and Founder</p>
            <p> Business management, project management.</p>
            <a href="https://www.linkedin.com/in/kénio-de-brito-3a0233138" target="_blank">
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </a>
            <a href="https://www.facebook.com/britoken?fb_dtsg_ag=AdxF3mayWGp9ZiA2y_X93hten0oPN8mXAD28MPTZsEmydA%3AAdzV42jFuQRppnoPuiqPXsGDudHmXIRewOx-3mPTgE99ow"
              target="_blank">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
            </a>
            <a href="mailto:ailsonesi96@gmail.com">
              <p>
                <button class="w3-button w3-light-grey w3-block">
                  <i class="fa fa-envelope"></i>Send Email</button>
              </p>
            </a>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/PHOTO MATCHO.jpg" alt="Jane" style="width:100%">
          <div class="w3-container">
            <h3>Ailson Moreira</h3>
            <p class="w3-opacity">FullStack Developer and Co-Founder</p>
            <p>Lead Developer with experience in blockchain tecnologies and cryptocurrencys.</p>
            <a href="https://www.linkedin.com/in/ailson-moreira-340b40161" target="_blank">
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100026045166323" target="_blank">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
            </a>
            <p>
              <button class="w3-button w3-light-grey w3-block">
                <i class="fa fa-envelope"></i>Send Email</button>
            </p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/jhonny.jpg" alt="Jane" style="width:100%">
          <div class="w3-container">
            <h3>Anita Jhonny Mosquera </h3>
            <p class="w3-opacity">Business</p>
            <p>Experience in entreprise business and marketing.</p>
            <a href="https://www.linkedin.com/in/jhonnymosqueracoach" target="_blank">
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </a>
            <a href="https://www.facebook.com/anitajhonny.mosquera" target="_blank">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
            </a>
            <p>
              <button class="w3-button w3-light-grey w3-block">
                <i class="fa fa-envelope"></i>Send Email</button>
            </p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="img/ayrton.jpg" alt="Jane" style="width:100%">
          <div class="w3-container">
            <h3>Ayrton Gomes</h3>
            <p class="w3-opacity">FullStack Developer</p>
            <p>Lead Developer with experience in blockchain tecnologies and cryptocurrencys.</p>
            <a href="https://www.linkedin.com/in/ayrtongomes" target="_blank">
              <i class="fa fa-linkedin w3-hover-opacity"></i>
            </a>
            <a href="https://www.facebook.com/ayrtongomes" target="_blank">
              <i class="fa fa-facebook-official w3-hover-opacity"></i>
            </a>
            <p>
              <button class="w3-button w3-light-grey w3-block">
                <i class="fa fa-envelope"></i>Send Email</button>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Work Section -->
  <div class="w3-container w3-light-grey" style="padding:128px 16px" id="work">
    <h3 class="w3-center top-title">WHAT THE MIDIA TALKING</h3>
    <p class="w3-center w3-large"></p>

    <div class="w3-row-padding w3-center" style="margin-top:64px">
      <div class="w3-quarter">
        <img src="img/exame.png">
        <p class="w3-large">subject matter</p>
        <p>Coming soon!</p>
      </div>
      <div class="w3-quarter">
        <img src="img/exame.png">
        <p class="w3-large">subject matter</p>
        <p>Coming soon!</p>
      </div>
      <div class="w3-quarter">
        <img src="img/infomoney.png">
        <p class="w3-large">subject matter</p>
        <p>Coming soon!</p>
      </div>
      <div class="w3-quarter">
        <img src="img/infomoney.png">
        <p class="w3-large">subject matter</p>
        <p>Coming soon!</p>
      </div>
    </div>
  </div>

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption" class="w3-opacity w3-large"></p>
    </div>
  </div>

  <!-- Pricing Section -->
  <div class="w3-container w3-center w3-dark-white" style="padding:128px 16px" id="pricing">
    <h3 class="top-title">Our Potential Partners</h3>
    <p class="w3-large">Company that work together.</p>
    <div class="w3-row-padding" style="margin-top:64px">
      <div class="w3-third w3-section">
        <div class="w3-container">
          <img src="img/centi.png" alt="Car" style="width:60%">
        </div>
      </div>
      <div class="w3-third">
        <div class="w3-container">
          <img src="img/for.png" alt="Car" style="width:60%">
        </div>
      </div>
      <div class="w3-third w3-section">
        <div class="w3-container">
          <img src="img/hackthon_logo.png" alt="Car" style="width:100%">
        </div>
      </div>
    </div>
  </div>

  <div id="img-banner" class="w3-container w3-center w3-dark-white" style="padding:128px 16px; background-image: url('{{asset('img/banner.jpg')}}'); height: 1000px; width: 100%; background-size: cover">
  </div>

  <div class="form-contact">
    <form action="{{ url('email') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!} <!-- Usado sempre para enviar formulario -->

        <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
            <h3 class="w3-center top-title">CONTACT</h3>
            <p class="w3-center w3-large">Lets get in touch and receive notifications.</p>
            <div class="w3-container w3-padding-32 w3-black w3-card" style="margin:32px 0; width: 80%; margin: auto;" style="background-color: rgba(0, 0, 0, 0.4);">
                <h2>Send us your email for best experience!</h2>
                <label>E-mail</label>
                <input id="email-text" class="w3-input w3-border" name="email" type="email" placeholder="Your Email address" required>
                <button type="submit" class="w3-button w3-red w3-margin-top" value="Subscribe">Send Email</button>
                <span id="submited-form-response">
            </div>
        </div>

      @if(session('erro')) <!-- cria nova seccao mensagem de erro -->
        <div class="w3-panel w3-red" style="text-align: center">
            {{session('erro')}}
        </div>
      @endif

      @if(session('success'))
        <div class="w3-panel w3-green" style="text-align: center">
            {{session('success')}}
        </div>
      @endif

    </form>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-black w3-padding-64">
    
    <a href="#home" class="w3-button w3-light-grey">
      <i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
      <a href="https://www.facebook.com/Iseeu-294380324457461" target="_blank">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
      </a>
      <a href="https://www.crunchbase.com/organization/iseeu" target="_blank">
        <i class="fa fa-crunchbase w3-hover-opacity"></i>
      </a>
      <a href="https://angel.co/iseeu-platform" target="_blank">
        <i class="fa fa-angellist w3-hover-opacity"></i>
      </a>
      <a href="https://www.linkedin.com/company/iseeu-charity" target="_blank">
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </a>
      <p>
        <a href="mailto:iseeuplatform@gmail.com" title="IseeU email" target="_blank" class="w3-hover-text-green">iseeuplatform@gmail.com</a>
      </p>
      <p>
        <a href="temporalpage" target="_blank" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off ">
          <i class="fa fa-heartbeat" style="color: red">Start make your donation.</i>
        </a>
      </p>
    </div>
    <p>ISeeU - Charity &copy; Copyright 2018-2019</p>
  </footer>



  <!-- Add Google Maps -->
  <script>

    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var mySidebar = document.getElementById("mySidebar");

    function w3_open() {
      if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
      } else {
        mySidebar.style.display = 'block';
      }
    }

    // Close the sidebar with the close button
    function w3_close() {
      mySidebar.style.display = "none";
    }

  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
  <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>

</html>