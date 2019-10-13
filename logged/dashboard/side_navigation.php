 <div class="sidebar" data-color="rose" data-background-color="black" data-image="./assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        
        <a href="" class="simple-text logo-normal" style="margin-left: 23px;">
          Profile
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
              <?php
               
              $db = mysqli_connect("localhost", "root", "", "waste");
			   //$arr = explode(' ',$displayName);
			   //$name = implode('_',$arr);
			   $name = $memberResult[0]["user_name"];
			   //echo"<script>alert('".$memberResult[0]["user_name"]."')</script>";
                $result_pic = mysqli_query($db,"Select * from members where username = "."'$name'");
                          $row_pic = mysqli_fetch_array($result_pic);
             
         echo "<img  src='./../images/members/".$row_pic['img']."'/>";
        ?>  
       <!--<img src="./assets/img/default-avatar.png" />-->
        </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo $displayName; ?>
				
                <!--<b class="caret"></b>-->
              </span>
            </a>
            <!--<div class="collapse" id="collapseExample">-->
            <!--  <ul class="nav">-->
            <!--    <li class="nav-item">-->
            <!--      <a class="nav-link" href="#">-->
            <!--        <i class="material-icons">perm_identity</i>-->
            <!--        <span class="sidebar-normal"> My Profile </span>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="nav-item">-->
            <!--      <a class="nav-link" href="#">-->
            <!--        <i class="material-icons">mode_edit</i>-->
            <!--        <span class="sidebar-normal"> Edit Profile </span>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--    <li class="nav-item">-->
            <!--      <a class="nav-link" href="#">-->
            <!--       <i class="material-icons">settings</i>-->
            <!--        <span class="sidebar-normal"> Settings </span>-->
            <!--      </a>-->
            <!--    </li>-->
            <!--  </ul>-->
            <!--</div>-->
          </div>
        </div>
<!--<div class="collapse" id="collapseExample">-->
<!--              <ul class="nav">-->
<!--                <li class="nav-item">-->
<!--                  <a class="nav-link" href="#">-->
<!--                    <i class="material-icons">perm_identity</i>-->
<!--                    <span class="sidebar-normal"> My Profile </span>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a class="nav-link" href="#">-->
<!--                    <i class="material-icons">mode_edit</i>-->
<!--                    <span class="sidebar-normal"> Edit Profile </span>-->
<!--                  </a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                  <a class="nav-link" href="#">-->
<!--                   <i class="material-icons">settings</i>-->
<!--                    <span class="sidebar-normal"> Settings </span>-->
<!--                  </a>-->
<!--                </li>-->
<!--              </ul>-->
<!--            </div>-->
          
        
<ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p> Profile </p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/pricing.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/rtl.html">
                    <span class="sidebar-mini"> RS </span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/timeline.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/login.html">
                    <span class="sidebar-mini"> LP </span>
                    <span class="sidebar-normal"> Login Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/register.html">
                    <span class="sidebar-mini"> RP </span>
                    <span class="sidebar-normal"> Register Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/lock.html">
                    <span class="sidebar-mini"> LSP </span>
                    <span class="sidebar-normal"> Lock Screen Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/user.html">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./examples/pages/error.html">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Error Page </span>
                  </a>
                </li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Options
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <!--<li class="nav-item ">-->
                <!--  <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">-->
                <!--    <span class="sidebar-mini"> <i class="material-icons">content_paste</i> </span>-->
                <!--    <span class="sidebar-normal"> Resources-->
                <!--      <b class="caret"></b>-->
                <!--    </span>-->
                <!--  </a>-->
                <!--  <div class="collapse" id="componentsCollapse">-->
                <!--    <ul class="nav">-->
                <!--      <li class="nav-item ">-->
                <!--        <a class="nav-link" href="#0">-->
                <!--          <span class="sidebar-mini"> P </span>-->
                <!--          <span class="sidebar-normal"> Python </span>-->
                <!--        </a>-->
                <!--      </li>-->
                <!--    </ul>-->
                <!--    <ul class="nav">-->
                <!--      <li class="nav-item ">-->
                <!--        <a class="nav-link" href="#0">-->
                <!--          <span class="sidebar-mini"> S </span>-->
                <!--          <span class="sidebar-normal"> Shell </span>-->
                <!--        </a>-->
                <!--      </li>-->
                <!--    </ul>-->
                <!--    <ul class="nav">-->
                <!--      <li class="nav-item ">-->
                <!--        <a class="nav-link" href="#0">-->
                <!--          <span class="sidebar-mini"> D </span>-->
                <!--          <span class="sidebar-normal"> Docker </span>-->
                <!--        </a>-->
                <!--      </li>-->
                <!--    </ul>-->
                <!--  </div>-->
                <!--</li>-->
               
                
                <li class="nav-item ">
                  <a class="nav-link" href="./add_waste.php">
                    <span class="sidebar-mini"> <i class="material-icons">grid_on</i> </span>
                    <span class="sidebar-normal"> Sell/Donate </span>
                  </a>
                </li>
                 <li class="nav-item ">
                  <a class="nav-link" href="./browse_waste.php">
                    <span class="sidebar-mini"> <i class="material-icons">timeline</i> </span>
                    <span class="sidebar-normal"> Buy </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="./status_of_waste.php">
                    <span class="sidebar-mini"> <i class="material-icons">date_range</i> </span>
                    <span class="sidebar-normal"> My Waste </span>
                  </a>
                </li>
               <li class="nav-item ">
                  <a class="nav-link" href="./interest.php">
                    <span class="sidebar-mini"> <i class="material-icons">date_range</i> </span>
                    <span class="sidebar-normal"> Responses </span>
                  </a>
                </li>
                <!-- <li class="nav-item ">-->
                <!--  <a class="nav-link" href="">-->
                <!--    <span class="sidebar-mini"> <i class="material-icons">add</i></span>-->
                <!--    <span class="sidebar-normal"> Add Resources </span>-->
                <!--  </a>-->
                <!--</li>-->
              </ul>
            </div>
          </li>
          
         
          
          
          
          <!--<li class="nav-item ">-->
          <!--  <a class="nav-link" href="">-->
          <!--    <i class="material-icons">notifications</i>-->
          <!--    <p> Notifications </p>-->
          <!--  </a>-->
          <!--</li>-->
     <li class="nav-item ">
            <a class="nav-link" href="./logout.php">
              <i class="material-icons">
power_settings_new
</i>
              <p> Logout </p>
            </a>
          </li>
        </ul>
</div>
</div>
 