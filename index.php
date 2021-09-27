<!DOCTYPE html>
<html>
<?php include('inc/head.php'); ?>
<body id="home">
  <div class="hero intro">
    <div class="heroInner">
      <a class="logo" href="/"><img src="img/logo.svg" alt="Ron Griffo Logo"></a>
      <h1>Hi, I'm Ron. I design & build<br>
      <span>user interfaces.</span></h1><a class="btn animateTo" href="#portfolio" aria-label="Scroll Down">See Recent Work</a>
    </div>
  </div>
  
  <div class="hero about" id="more">
    <div class="heroInner">
      <div class="heroContent">
        <ul class="portGrid" id="portfolio">
    <li class="portItem">
      <a href="https://www.lifestorage.com" target="_blank"><img src="img/life-storage.png" alt="Life Storage"></a>
    </li>
    <li class="portItem">
      <a href="http://www.newsday.com" target="_blank"><img src="img/newsday.png" alt="Newsday"></a>
    </li>
    <li class="portItem">
      <a href="http://www.warehouseanywhere.com" target="_blank"><img src="img/warehouse-anywhere.png" alt="Warehouse Anywhere"></a>
    </li>
    <li class="portItem">
      <a href="http://www.amny.com" target="_blank"><img src="img/amny.png" alt="AM New York"></a>
    </li>
    <li class="portItem">
      <a href="https://www.bluebirdstorage.ca" target="_blank"><img src="img/bb.png" alt="Bluebird Self Storage"></a>
    </li>
  </ul>
        <h2>My Expertise</h2>
        <div class="sep"></div>
        <h3 class="subtitle">I have experience in all phases of the design process.</h3>
        <ul class="skills">
          <li>
            <h3><i aria-hidden="true" class="fa fa-lightbulb-o"></i> Ideas</h3>
            <p>I collaborate with clients and peers to transform ideas into well thought out design specs. After all, that's where the majority of amazing user experiences start.</p>
          </li>
          <li>
            <h3><i aria-hidden="true" class="fa fa-magic"></i> UX/UI</h3>
            <p>I sketch/wireframe interfaces focusing on content structure, intuitive UI patterns and simple interactions. I'm a minimalist who truly believes that less is more.</p>
          </li>
          <li>
            <h3><i aria-hidden="true" class="fa fa-code"></i> Code</h3>
            <p>I design in the browser with HTML(5), CSS(3) and a touch of jQuery. I love coding things from scratch, but I can also work with front-end frameworks.</p>
          </li>
        </ul>
        <a aria-label="Scroll Down" class="btn animateTo" href="#awards">Honors & Awards</a>
      </div>
    </div>
  </div>
  <div class="hero awards" id="awards">
    <div class="heroInner">
      <div class="heroContent">
        <h2>Honors & Awards</h2>
        <div class="sep"></div>
        <h3 class="subtitle"></h3>
        <ul class="skills">
          <li>
            <h5><i aria-hidden="true" class="fa fa-trophy"></i> Press Club Visual Award</h5>
            <p>First Place "Best Visual Homepage Design" Newsday Interactive - <a href="http://www.newsday.com/" target="_blank">Newsday.com</a></p>
          </li>
          <li>
            <h5><i aria-hidden="true" class="fa fa-trophy"></i> EPPY Award/Emmy Nomination</h5>
            <p>“Until Everyone Comes Home” <a href="http://www.newsday.com/long-island/superstorm-sandy-documentary-until-everyone-comes-home-two-years-later-1.9559154" target="_blank">Interactive project</a> focusing on six families struggle to rebuild after super storm Sandy.</p>
          </li>
          <li>
            <h5><i aria-hidden="true" class="fa fa-trophy"></i> Deadline Club Award NYC</h5>
            <p><a href="http://data.newsday.com/long-island/photo-splash/?id=38" target="_blank">Interactive article series</a> to expose shootings, beatings and other concealed misconduct by some Long Island police officers.</p>
          </li>
        </ul>
        <ul class="skills">
          <li></li>
          <li>
            <h5><i aria-hidden="true" class="fa fa-trophy"></i>CableFAX Digital Award</h5>
            <p>"Best Overall Website" News 12 Interactive <a href="http://www.news12.com/" target="_blank">News12.com</a></p>
          </li>
          <li></li>
        </ul><a aria-label="Scroll Down" class="btn animateTo" href="#contact">Contact me</a>
      </div>
    </div>
  </div>
  <div class="hero contact" id="contact">
    <div class="heroInner">
      <div class="heroContent">
        <h2>Contact</h2>
        <div class="sep"></div>
        <h3 class="subtitle">Need creative help? Send me a message…</h3><?php
                $action=$_REQUEST['action'];
                if ($action=="") 
                    {
                    ?>
        <form enctype="multipart/form-data" method="post">
          <input id="name" name="action" type="hidden" value="submit"> <label for="name">Name</label> 
          <input id="email" name="name"> <label for="email">Email</label> 
          <input name="email"> <label for="message">Message</label> 
          <textarea id="message" name="message"></textarea> 
          <button type="submit" value="Send email">Send</button>
        </form>
        <?php
                    } 
                else
                    {
                    $name=$_REQUEST['name'];
                    $email=$_REQUEST['email'];
                    $message=$_REQUEST['message'];
                    if (($name=="")||($email=="")||($message==""))
                        {
                        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                        }
                    else{        
                        $from="From: $name<$email>\r\nReturn-path: $email";
                        $subject="Inquiry from rongriffo.com";
                        mail("fsadesign@gmail.com", $subject, $message, $from);
                        echo "<p class='success'>Email sent!</p>";
                        }
                    }  
                ?>
      </div>
    </div>
  </div><?php include('inc/footer.php'); ?>
</body>
</html>