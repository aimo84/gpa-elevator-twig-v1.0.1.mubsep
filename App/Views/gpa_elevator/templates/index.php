
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="GPA ELEVATOR is a one stop online platform that provide access to academic materials like pastpapers,lecture Notes and much more to all students in all universities in Uganda">
    <meta name="keywords" content="cgpa,online academic materials,university students,college,past papers,lecture notes,gpa, gpa elevator,news trending at campus">
    <meta name="author" content="kimera moses,mubiru isaac">
    <link rel="icon" type="image/png" href="http://localhost/img/favicon.png" />
    {% block title %}
    <title>GPA ELEVATOR | Welcome</title>
    {% endblock %}
    {% block stylesheets %}
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link href="https://pagecdn.io/lib/easyfonts/fonts.css" rel="stylesheet" />
    <link rel="dns-prefetch" href="https://s.w.org/">
    <link rel="stylesheet" href="http://localhost/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/css/owl.carousel.css">
    <link rel="stylesheet" href="http://localhost/css/owl.theme.default.css">
    <link rel="stylesheet" href="http://localhost/css/all.css">
    <link rel="stylesheet" href="http://localhost/css/main.css">
    <link rel="stylesheet" href="http://localhost/css/style.css">
    <link rel="stylesheet" href="http://localhost/css/navigation.css">
    <link rel="stylesheet" href="http://localhost/css/form.css">
    <link rel="stylesheet" href="http://localhost/font-awesome/css/font-awesome.min.css">
   {% endblock %}
   <script src="https://kit.fontawesome.com/f82b2f20d1.js" crossorigin="anonymous"></script>
</head>
<script src="http://localhost/js/dropzone.js"></script>
<script src="http://localhost/js/jquery.js"></script>
<script>
		$(document).ready(function(){
		
		// Login / Signup Form
		
		$("a#login").click(function(){
			$("input#Login").prop("checked",true);
			   $("#gpa-form").show('fast');
		});
		
		$("a#register").click(function(){
			$("input#signin").prop("checked",true);
			$("#gpa-form").show('fast');
		});
	
		
	
		});
		
		
</script>
<script type="text/javascript">
  function searchit() {
       document.getElementById('gpa_elevator').href=
       (("https://www.google.com/search?q=")+
       (document.getElementById("search_box-input").value));
  }
</script>

 
<div class="banner">
  <!--***Home-page header starts here***-->
  <header>
      <div class="search_box">
          <input type="checkbox" class="search-box_checkbox" id="search-toggle" autocomplete="off">
          <label for="search-toggle" class="search-button">
              <i class="search_icon-close fas fa-times"></i>
            <i class="search_icon fas fa-search"></i></label>

          <div class="search_box-background">&nbsp;</div>
           <form action="www.google.com" class="search_box-form">
             <input type="text" class="search_box-input" id="search_box-input" placeholder="Type to search..">
             <button  class="search_box-submit_btn" onkeypress="searchit">
              <a  href="" id="gpa_elevator" onclick="searchit()" onkeypress="searchit()"><i class="fas fa-search"></i></a>
              </button>
           </form>
        </div>

<!--USERS SIGNUP-LOGIN SECTION STARTS HERE-->
<div class="container-fluid ">
  {%if loggedIn %}
  <div class="register-user">
    <a id="logout"  href="http://localhost/login/logout">Logout</a>                
</div>
{% else %}
<div class="register-user">

<a id="register" data-toggle="modal"  data-target="#exampleModalCenter-login">Register</a>
  <a id="login" data-toggle="modal"  data-target="#exampleModalCenter-login" >Login</a>
</div>

{% endif%}

<!-- Modal-->
<div class="modal fade log-sign-area" id="exampleModalCenter-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
  <div id="gpa-form">
    <div class="modal-content"  >
     <input type="radio" class="signup-radio hide" id="signin" name="switch">
    <input type="radio" class="login-radio hide" id="Login" name="switch"  autocomplete="off"  checked>
        
    <div class="container-fluid switch_case" >
     

      <ul class="form-header">
       
      <li><label for="Login"><i class="header_icon form-icon fas fa-user-lock"></i> LOGIN</label></li>
      <li><label for="signin"><i class="header_icon form-icon fas fa-users"></i> REGISTER</label></li>
        </ul>
      </div>
      



    <div class="modal__body">
      <section class="login-section">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">LOGIN FORM</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
           </div>
          <div class="login modal-body-signup">

           
              <form class="" action="http://localhost/login/login" method="post">
                  <li class="form-list"><span class="icon"><i class="form-icon fa fa-user"></i></span><input type="text" required pattern="^[a-zA-Z ]+$" class="input form-control-text" id="std_Fname" name="username" maxlength="32" placeholder="Username"/> </li>

                   
                  <li class="form-list"><span class="icon"><i class="form-icon fas fa-user-lock"></i></span><input type="password" required class="input form-control-text" id="std_passwd" name="password" minlength="8" placeholder="Password" onchange="check_user()"/></li>
                
                  <li class="form-list">
                    <input type="checkbox" id="check" value="">
                    <label for="check">Remember me</label></li>
                    
                  <li class="form-list text-center"><a href="#" class="Forgot-password">Forgot Password?</a></li>
                
                    <div class="submit form-submit">
                        <button type="submit"  id="button-send">Login</button>
                        <div class="ease"></div>
                    </div>
                 <li class="form-list text-center">Don't have an account?<label for="signin" class="log-sign-toggle"> Create Account</label></li>
              <input type="hidden" name="token" value="{{ token }}">
                
                  </form>
              
              </div>	<!-- login -->

            </section>

          </div>
          <div>
          <section class="signup-section " id="signup-form">
            <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">SIGNUP FORM</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
              <div class="login modal-body-signup">

                <form class="mb-4" action="http://localhost/register/register" method="post">

                    <li class="form-list"><span class="icon"><i class="form-icon fa fa-user"></i></span><input type="text" required pattern="^[a-zA-Z ]+$" class="input form-control-text" id="std_Fname" name="std_Fname" maxlength="32" placeholder="Student First Name"/> </li>

                    <li class="form-list"><span class="icon"><i class="form-icon fa fa-user"></i></span><input type="text" required pattern="^[a-zA-Z ]+$" class="input form-control-text" id="std_Lname" name="std_Lname" maxlength="32" placeholder="Student Last Name"/> </li>
                    
                  <li class="form-list"><span class="icon"><i class="form-icon fa fa-user"></i></span><input type="text" required pattern="^[a-zA-Z ]+$" class="input form-control-text" id="std_Fname" name="username" maxlength="32" placeholder="Prefered Username"required/> </li>
            
                    <li class="form-list"><span class="icon"><i class="form-icon fa fa-graduation-cap"></i></span><select class="input form-control-text"  id="select-course" name ="certification">
                         <option value="degree"  selected>Degree</option> 
                       <option value="diploma" >Diploma</option>
                        <option value="masters" >Masters</option> 
                      </select></li>
                    <li class="form-list"><span class="icon"><i class="form-icon fa fa-graduation-cap"></i></span><input type="text" required pattern="^[a-zA-Z ]+$" class="input form-control-text" id="std_course" name="std_course" maxlength="" placeholder="What's Your Course?"/></li>

                    <li class="form-list"><span class="icon"><i class="form-icon fa fa-clock"></i></span><input type="text" required pattern="^[a-zA-Z ]+$" class="input form-control-text" id="std_year" name="std_year" maxlength="4" placeholder="Year of Study? eg.One"/></li>
                    
                    <li class="form-list"><span class="icon"><i class="form-icon fas fa-graduation-cap"></i></span><input type="text" required class="input form-control-text" id="std_num" name="std_num" maxlength="10" placeholder="Student Number" onchange="check_user()"/></li>

                    <li class="form-list"><span class="icon"><i class="form-icon fas fa-phone-alt"></i></span><input type=" text" required class="input form-control-text" id="std_telno" name="std_telno" maxlength="13" placeholder="Phone Number"/></li>

                    <li class="form-list"><span class="icon"><i class="form-icon fas fa-envelope"></i></span><input type="email" required class="input form-control-text" id="std_email" name="std_email" maxlength="" placeholder="Username@gmail.com"/></li>

                    <li class="form-list"><span class="icon"><i class="form-icon fas fa-user-lock"></i></span><input type="password" required class="input form-control-text" id="std_passwd" name="password" minlength="8" placeholder="Password" onchange="check_user()"/></li>

                    <li class="form-list"><span class="icon"><i class="form-icon fas fa-user-lock"></i></span><input type="password" required class="input form-control-text" id="std_passwd_conf" name="password_again" minlength="8" placeholder="Corfirm Password" onchange="check_user()"/></li>
                    
                    <div class="submit form-submit">
                        <button type="submit"  id="button-send">Submit</button>
                        <div class="ease"></div>
                    </div>
                    <input type="hidden" name="token" value="{{ token }}">

                    <li class="form-list text-center">Already have an account?<label for="Login" class="log-sign-toggle"> Login</label></li>
                    
                    <script type="text/javascript">
                      function check_user(){
                        var unumber = $("#std_num").val();
                        $.ajax({
                       url: "check_user.php?studentnumber="+unumber,
                       success: function(data){
                         $(".msg-alert p").html(data);
                         if (data == "Username Available"){
                           $(".msg-alert p").css("background-color","green");
                         }
                         else{
                           $(".msg-alert p").css("background-color","red");
                         }
                         $(".msg-alert").show(0,function(){
                           $(".msg-alert").delay(3000).fadeOut('slow');
                         });
                        }
                       });
                   }
                   </script>

                  </form>
              </div>	<!-- login -->
            </section>
          </div>
      </div>
    </div>
            </div>
    </div>

</div>
<!--USERS SIGNUP-LOGIN SECTION END HERE-->



    <section class="logo-box">
      <div class="header__gpa-logo "><a href="http://localhost/Home/index"><img id="header__img" src="http://localhost/img/elevator-logo.png"/></a></div>
    </section>
    {% block  nav %}
    <div class="container-fluid main-menu-nav_bar" id="navbar">
        <nav class="main-menu_nav">
               <div class="col-12 mobile-nav">
                 <h5>MENU</h5>
                  <input type="checkbox" class="menu_toggle-checkbox" id="menu_toggle" autocomplete="off">
                  <label for="menu_toggle" class="menu_button">
                   <i class="menu-toggle-open fas fa-bars"></i>
                   <i class="menu-toggle-close fas fa-times" title="Dismiss"></i>
                  </label>
                </div>
            <ul id="mega_main_menu_ul" class="mega_main_menu_ul">
                    <li id="menu-item-0001" class="menu-item  menu-item-0001 menu-item-hasno-children active">
                    <a href="http://localhost/Home/index" class="menu-item-link menu-item-0001-link ">HOME</a>
                    </li>
                    <li id="menu-item-0002" class="menu-item  menu-item-0002 menu-item-has-children">
                      <a class="menu-item-link menu-item-0002-link " title="Makerere University"> MUK  <i class="fas fa-caret-down"></i></a>
                      <ul class="sub-menu menu-item-0002-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                         <li><a class="menu-item-0003 menu-item-dropdown-item" href="http://localhost/cedat/index">CEDAT</a></li>
                         <li><a class="menu-item-0004 menu-item-dropdown-item" href="http://localhost/Home/cocis">CoCIS</a></li>
                         <li><a class="menu-item-0005 menu-item-dropdown-item" href="http://localhost/Home/covab">CoVABS</a></li>
                         <li><a class="menu-item-0006 menu-item-dropdown-item" href="http://localhost/Home/cobams">CoBAMS</a></li>
                         <li><a class="menu-item-0007 menu-item-dropdown-item" href="http://localhost/Home/chs">Mak-CHS</a></li>
                         <li><a class="menu-item-0008 menu-item-dropdown-item" href="http://localhost/Home/Conas">CoNAS</a></li>
                         <li><a class="menu-item-0009 menu-item-dropdown-item" href="http://localhost/Home/chuss"> CHUSS</a></li>
                         <li><a class="menu-item-0010 menu-item-dropdown-item" href="http://localhost/Home/cees">CEES</a></li>
                         <li><a class="menu-item-0011 menu-item-dropdown-item" href="http://localhost/Home/caes">CAES</a></li>
                         <li><a class="menu-item-0012 menu-item-dropdown-item" href="http://localhost/Home/schlaw">School Of Law</a></li>
                       </ul>
                    </li>

                    <li id="menu-item-0013" class="menu-item  menu-item-0013 menu-item-has-children menu-item-has-grandchildren">
                      <a  class="menu-item-link menu-item-0013-link " title="Kyambogo University"> KYU <i class="fas fa-caret-down"></i></a>
                      <ul class="sub-menu menu-item-0013-sub-menu sub-menu-dropdown " aria-labelledby="colleges">
                        <li><a class="menu-item-0014  menu-item-dropdown menu-item-has-children" href="http://localhost/Faculty_of_Engineering/index">Faculty of Engineering</a>
                        </li>
                        <li><a class="menu-item-0015  menu-item-dropdown menu-item-has-children" href="http://localhost/Faculty_of_Arts_and_Social_Science/index">Faculty of Arts & Social Science</a>
                        </li>
                         <li><a class="menu-item-0016 menu-item-dropdown menu-item-has-children" href="http://localhost/Faculty_of_Education/index">Faculty Of Education</a>
                         </li>
                         <li><a class="menu-item-0017 menu-item-dropdown menu-item-has-children" href="http://localhost/Faculty_of_Sciences/index">Faculty Of Science</a>
                         </li>
                         <li><a class="menu-item-0018 menu-item-dropdown menu-item-has-children" href="http://localhost/Faculty_of_Vocational_Stud/index">Faculty Of Vocational Studies</a>
                         </li>
                         <li><a class="menu-item-0019 menu-item-dropdown menu-item-has-children" href="http://localhost/Faculty_Of_Special_Needs/index">Faculty Of Special Needs & Rehabilitation</a>
                        </li>
                         <li><a class="menu-item-0020 menu-item-dropdown menu-item-has-children" href="http://localhost/School_of_Management_and_Ent/index">School of Management & Entrepreneurship</a>
                        </li>
                       </ul>
                    </li>

                    <li id="menu-item-0059" class="menu-item  menu-item-0021 menu-item-has-children">
                      <a  class="menu-item-link menu-item-0021-link " title="Makerere University Business School"> MUBS <i class="fas fa-caret-down"></i></a>
                      <ul class="sub-menu menu-item-0021-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                        <li><a class="menu-item-0022 menu-item-dropdown" href="http://localhost/mubs/Faculty_Of_Computing_and_Informatics">Faculty Of Computing & Informatics</a></li>
                        <li><a class="menu-item-0023 menu-item-dropdown" href="http://localhost/mubs/Faculty_of_Marketing_and_Hospitality_Mgt">Faculty of Marketing & Hospitality Management</a></li>
                        <li><a class="menu-item-0024 menu-item-dropdown" href="http://localhost/mubs/Faculty_Of_Entrepreneurship_and_Business_Admin">Faculty Of Entrepreneurship & Business Admin.</a></li>
                        <li><a class="menu-item-0025 menu-item-dropdown" href="http://localhost/mubs/Faculty_of_Commerce">Faculty of Commerce</a></li>
                        <li><a class="menu-item-0026 menu-item-dropdown" href="http://localhost/mubs/Faculty_of_Vocational_and_Distance_Education">Faculty Vocational & Distance Studies</a></li>
                        <li><a class="menu-item-0027 menu-item-dropdown" href="http://localhost/mubs/Faculty_Of_Economics_Energy_and_Management_Sci">Faculty Of Economics,Energy & Management Sci.</a></li>
                        <li><a class="menu-item-0028 menu-item-dropdown" href="http://localhost/mubs/Faculty_of_Management">Faculty of Management</a></li>
                      </ul>
                         </li>

                         <li id="menu-item-0029" class="menu-item  menu-item-0029 menu-item-has-children">
                           <a  class="menu-item-link menu-item-0029-link " title="Mbarara University Of Science & Technology"> MUST <i class="fas fa-caret-down"></i></a>
                           <ul class="sub-menu menu-item-0029-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                             <li><a class="menu-item-0030 menu-item-dropdown" href="http://localhost/must/Faculty_Of_Medicine">Faculty Of Medicine</a></li>
                             <li><a class="menu-item-0031 menu-item-dropdown" href="http://localhost/Home/error">Faculty Of Science</a></li>
                             <li><a class="menu-item-0032 menu-item-dropdown" href="http://localhost/must/Faculty_Of_Computing_and_Informatics">Faculty Of Computing & Informatics</a></li>
                             <li><a class="menu-item-0033 menu-item-dropdown" href="http://localhost/must/Faculty_Of_Interdisciplinary_Stud">Faculty Of Interdisciplinary Studies</a></li>
                             <li><a class="menu-item-0034 menu-item-dropdown" href="http://localhost/Home/error">Faculty Of Business & Mgt Science</a></li>
                             <li><a class="menu-item-0035 menu-item-dropdown" href="http://localhost/must/Faculty_of_Applied_Sci_and_technology">Faculty Of Applied Science & Tech.</a></li>
                           </ul>
                          </li>
                          <li id="menu-item-0036" class="menu-item  menu-item-0036 menu-item-has-children">
                            <a  class="menu-item-link menu-item-0036-link" title="Ndejje University">NDEJJE <i class="fas fa-caret-down"></i></a>
                            <ul class="sub-menu menu-item-0036-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                            <li><a class="menu-item-0037 menu-item-dropdown-item" href="http://localhost/ndu/Faculty_of_Engineering">Faculty Of Engineering & Survey</a></li>
                            <li><a class="menu-item-0038 menu-item-dropdown-item" href="http://localhost/ndu/Faculty_of_Basic_Sci_and_It">Faculty Of Basic Sciences & I.T</a></li>
                            <li><a class="menu-item-0039 menu-item-dropdown-item" href="Faculty of Education-ndu.html">Faculty Of Education</a></li>
                            <li><a class="menu-item-0040 menu-item-dropdown-item" href="http://localhost/Home/error">Faculty Of Social Sciences</a></li>
                            <li><a class="menu-item-0041 menu-item-dropdown-item" href="http://localhost/Home/error">Faculty Of Arts</a></li>
                            <li><a class="menu-item-0042 menu-item-dropdown-item" href="http://localhost/Home/error">Faculty Of Business Admin & Management</a></li>
                            <li><a class="menu-item-0043 menu-item-dropdown-item" href="http://localhost/Home/error"> Faculty Of Environment & Agric.Sciences</a></li>
                          </ul>
                          </li>
                          <li id="menu-item-0044" class="menu-item  menu-item-0044 menu-item-has-children">
                            <a  class="menu-item-link menu-item-0044-link" title="Nkumba University"> NKUMBA <i class="fas fa-caret-down"></i></a>
                            <ul class="sub-menu menu-item-0044-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                            <li><a class="menu-item-0045 menu-item-dropdown-item" href="http://localhost/nkumba/sch_of_business_admin">Schoop Of Business Admin</a></li>
                            <li><a class="menu-item-0046 menu-item-dropdown-item" href="http://localhost/nkumba/sch_of_law">School Of Law</a></li>
                            <li><a class="menu-item-0047 menu-item-dropdown-item" href="http://localhost/nkumba/sch_of_commercial_industrial_art_and_design">School Of Commercial Industrial Art & Design</a></li>
                            <li><a class="menu-item-0048 menu-item-dropdown-item" href="http://localhost/nkumba/sch_of_educ_humanities_and_sciences">School Of Educ, Humanities & Sciences</a></li>
                            <li><a class="menu-item-0049 menu-item-dropdown-item" href="http://localhost/nkumba/sch_of_social_science">School Of Social Sciences</a></li>
                            <li><a class="menu-item-0050 menu-item-dropdown-item" href="http://localhost/nkumba/sch_of_science">School Of Sciences</a></li>
                          </ul>
                          </li>
                          <li id="menu-item-0051"  class="menu-item  menu-item-0051 menu-item-has-children">
                            <a  class="menu-item-link menu-item-0051-link" title="Uganda Christian University"> UCU <i class="fas fa-caret-down"></i></a>
                            <ul class="sub-menu menu-item-0051-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                            <li><a class="menu-item-0052 menu-item-dropdown-item" href="http://localhost/ucu/Faculty_of_Sci_and_Technology">Faculty Of Science & Technology</a></li>
                            <li><a class="menu-item-0053 menu-item-dropdown-item" href="http://localhost/ucu/Faculty_Of_Business_and_Admin">Faculty Of Business & Administration</a></li>
                            <li><a class="menu-item-0054 menu-item-dropdown-item" href="http://localhost/ucu/faculty_of_Educ_and_Art">Faculty Of Education & Arts</a></li>
                            <li><a class="menu-item-0055 menu-item-dropdown-item" href="http://localhost/ucu/Faculty_Of_Journalism_Media_and_Comm">Faculty Of Journalism,Media &Comm.</a></li>
                            <li><a class="menu-item-0056 menu-item-dropdown-item" href="http://localhost/ucu/Faculty_Of_Law">Faculty Of Law</a></li>
                            <li><a class="menu-item-0057 menu-item-dropdown-item" href="http://localhost/ucu/School_Of_Social_Sciences">Faculty Of Social Sciences</a></li>
                            <li><a class="menu-item-0058 menu-item-dropdown-item" href="http://localhost/ucu/School_Of_Medicine">School Of Medicine</a></li>
                            <li><a class="menu-item-0059 menu-item-dropdown-item" href="http://localhost/ucu/School_Of_Theology_and_Divinity">School Of Theology & Divinity</a></li>
                          </ul>
                          </li>
                          <li id="menu-item-0060" class="menu-item  menu-item-0060 menu-item-has-grandchildren">
                            <a class="menu-item-link menu-item-0060-link"> OTHERS <i class="fas fa-caret-down"></i></a>
                            <ul class="sub-menu menu-item-0060-sub-menu sub-menu-dropdown" aria-labelledby="colleges">
                            <li id="menu-item-0061"><a class="menu-item-0061 menu-item-dropdown-item menu-item-dropdown menu-item-has-children" >Bugema University (BMU)</a>
                          <ul class="sub-menu menu-item-0061-sub-menu dropleft-menu">
                            <li class="menu-item-0062 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Computting & Informatics</a> </i></li>
                            <li class="menu-item-0063 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Business</a> </i></li>
                            <li class="menu-item-0064 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Natural Sciences</a> </i></li>
                            <li class="menu-item-0065 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Education</a> </i></li>
                            <li class="menu-item-0066 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Health Sciences</a> </i></li>
                            <li class="menu-item-0067 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Theological Studies</a> </i></li>
                            <li class="menu-item-0068 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Social Sciences</a> </i></li>
                            <li class="menu-item-0069 menu-item-dropleft-item"><i><a href="http://localhost/Home/error">School Of Graduate Studies</a> </i></li>
                          </ul>
                            </li>
                            <li id="menu-item-0070"><a class="menu-item-0070 menu-item-dropdown-item" >Gulu University (GU)</a>
                              <ul class="sub-menu menu-item-0070-sub-menu dropleft-menu">
                                <li class="menu-item-0071 menu-item-dropleft-item"><i><a href="#">Faculty of Agriculture and the Environment</a> </i></li>
                                <li class="menu-item-0072 menu-item-dropleft-item"><i><a href="#">Faculty of Business and Development Studies</a> </i></li>
                                <li class="menu-item-0073 menu-item-dropleft-item"><i><a href="#">Faculty of Law</a> </i></li>
                                <li class="menu-item-0074 menu-item-dropleft-item"><i><a href="#">Faculty of Education and Humanities</a> </i></li>
                                <li class="menu-item-0075 menu-item-dropleft-item"><i><a href="#">Faculty of Medicine</a> </i></li>
                                <li class="menu-item-0076 menu-item-dropleft-item"><i><a href="#">Faculty of Science </a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0077"><a class="menu-item-077 menu-item-dropdown-item" >Victoria University (VU)</a>
                              <ul class="sub-menu menu-item-0077-sub-menu dropleft-menu">
                                <li class="menu-item-0078 menu-item-dropleft-item"><i><a href="#">Faculty of Business & Management</a> </i></li>
                                <li class="menu-item-0079 menu-item-dropleft-item"><i><a href="#">Faculty of Health Sciences</a> </i></li>
                                <li class="menu-item-0080 menu-item-dropleft-item"><i><a href="#">Faculty of Humanities And Social Sciences</a> </i></li>
                                <li class="menu-item-0081 menu-item-dropleft-item"><i><a href="#">Faculty of Education and Humanities</a> </i></li>
                                <li class="menu-item-0082 menu-item-dropleft-item"><i><a href="#">Faculty of Science & Technology</a> </i></li>
                                <li class="menu-item-0083 menu-item-dropleft-item"><i><a href="#">Faculty of Petroleum & Gas</a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0083"><a class="menu-item-0083 menu-item-dropdown-item" >Kampala University (KU)</a>
                              <ul class="sub-menu menu-item-0083-sub-menu dropleft-menu">
                                <li class="menu-item-0084 menu-item-dropleft-item"><i><a href="#">School Of Computer Science & Information Technology</a> </i></li>
                                <li class="menu-item-0085 menu-item-dropleft-item"><i><a href="#">School of Business and Management</a> </i></li>
                                <li class="menu-item-0086 menu-item-dropleft-item"><i><a href="#">School of Education</a> </i></li>
                                <li class="menu-item-0087 menu-item-dropleft-item"><i><a href="#">School of Natural Sciences</a> </i></li>
                                <li class="menu-item-0088 menu-item-dropleft-item"><i><a href="#">School of Nursing and Health Sciences</a> </i></li>
                                <li class="menu-item-0089 menu-item-dropleft-item"><i><a href="#">School Of Law</a> </i></li>
                                <li class="menu-item-0090 menu-item-dropleft-item"><i><a href="#">Film School</a> </i></li>
                                <li class="menu-item-0091 menu-item-dropleft-item"><i><a href="#">School of Industrial Art & Design</a> </i></li>
                                <li class="menu-item-0092 menu-item-dropleft-item"><i><a href="#">School of Arts & Sciences</a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0093"><a class="menu-item-0093 menu-item-dropdown-item" >Busitema University (BUS)</a>
                              <ul class="sub-menu menu-item-0093-sub-menu dropleft-menu">
                                <li class="menu-item-0094 menu-item-dropleft-item"><i><a href="#">Faculty of Engineering</a> </i></li>
                                <li class="menu-item-0095 menu-item-dropleft-item"><i><a href="#">Faculty of Natural Science Economics</a> </i></li>
                                <li class="menu-item-0096 menu-item-dropleft-item"><i><a href="#">Faculty of Agriculture</a> </i></li>
                                <li class="menu-item-0097 menu-item-dropleft-item"><i><a href="#">Faculty of Health Science</a> </i></li>
                                <li class="menu-item-0098 menu-item-dropleft-item"><i><a href="#">Faculty of Management Science</a> </i></li>
                                <li class="menu-item-0099 menu-item-dropleft-item"><i><a href="#">Faculty of Science & Education</a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0100"><a class="menu-item-0100 menu-item-dropdown-item" >kampala International University (KIU)</a>
                              <ul class="sub-menu menu-item-0100-sub-menu dropleft-menu">
                                <li class="menu-item-0101 menu-item-dropleft-item"><i><a href="#">College of Economics and Management</a> </i></li>
                                <li class="menu-item-0102 menu-item-dropleft-item"><i><a href="#">College of Education, Open and Distance Learning</a> </i></li>
                                <li class="menu-item-0103 menu-item-dropleft-item"><i><a href="#">College of Humanities and Social Sciences</a> </i></li>
                                <li class="menu-item-0104 menu-item-dropleft-item"><i><a href="#">School of Engineering and Applied Sciences</a> </i></li>
                                <li class="menu-item-0105 menu-item-dropleft-item"><i><a href="#">School of Law</a> </i></li>
                                <li class="menu-item-0106 menu-item-dropleft-item"><i><a href="#">School of Mathematics and Computing</a> </i></li>
                              </ul> 
                            </li>
                            <li id="menu-item-0107"><a class="menu-item-0107 menu-item-dropdown-item" >Bishop Stuart University (BSU)</a>
                              <ul class="sub-menu menu-item-0107-sub-menu dropleft-menu">
                                <li class="menu-item-0108 menu-item-dropleft-item"><i><a href="#">Faculty of Agriculture, Environmental Sciences & Technology</a> </i></li>
                                <li class="menu-item-0109 menu-item-dropleft-item"><i><a href="#">Faculty of Education, Arts & Media Studies</a> </i></li>
                                <li class="menu-item-0110 menu-item-dropleft-item"><i><a href="#">Faculty of Business, Economics & Governance</a> </i></li>
                                <li class="menu-item-0111 menu-item-dropleft-item"><i><a href="#">Faculty of Law</a> </i></li>
                                <li class="menu-item-0112 menu-item-dropleft-item"><i><a href="#">Faculty of Nursing and Health Sciences</a> </i></li>
                              </ul> 
                            </li>
                            <li id="menu-item-113"><a class="menu-item-0113 menu-item-dropdown-item" >Lira University (LU)</a>
                              <ul class="sub-menu menu-item-0113-sub-menu dropleft-menu">
                                <li class="menu-item-0114 menu-item-dropleft-item"><i><a href="#">Faculty of Management Sciences</a> </i></li>
                                <li class="menu-item-0115 menu-item-dropleft-item"><i><a href="#">Faculty of Health Sciences</a> </i></li>
                                <li class="menu-item-0116 menu-item-dropleft-item"><i><a href="#">Faculty of Education </a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0117"><a class="menu-item-0108 menu-item-dropdown-item" >Kabaale University (KAB)</a>
                              <ul class="sub-menu menu-item-0117-sub-menu dropleft-menu">
                                <li class="menu-item-0118 menu-item-dropleft-item"><i><a href="#">Faculty of Engineering, Technology, Applied Design & Fine Art</a> </i></li>
                                <li class="menu-item-0119 menu-item-dropleft-item"><i><a href="#">Faculty of Computing, Library & Information Sciences</a> </i></li>
                                <li class="menu-item-0120 menu-item-dropleft-item"><i><a href="#">Faculty of Science</a> </i></li>
                                <li class="menu-item-0121 menu-item-dropleft-item"><i><a href="#">Faculty of Agriculture and Environmental Sciences</a> </i></li>
                                <li class="menu-item-0122 menu-item-dropleft-item"><i><a href="#">Faculty of Economics and Management Sciences</a> </i></li>
                                <li class="menu-item-0123 menu-item-dropleft-item"><i><a href="#">Faculty of Arts & Social Sciences</a> </i></li>
                                <li class="menu-item-0124 menu-item-dropleft-item"><i><a href="#">Faculty of Education</a> </i></li>
                                <li class="menu-item-0125 menu-item-dropleft-item"><i><a href="#">Kabale University School of Medicine</a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0126"><a class="menu-item-0126 menu-item-dropdown-item">Mutesa I Royal University (MRU)</a>
                              <ul class="sub-menu menu-item-0126-sub-menu dropleft-menu">
                                <li class="menu-item-0127 menu-item-dropleft-item"><i><a href="#">Faculty of Education</a> </i></li>
                                <li class="menu-item-0128 menu-item-dropleft-item"><i><a href="#">Faculty of Business & Management</a> </i></li>
                                <li class="menu-item-0129 menu-item-dropleft-item"><i><a href="#">Faculty of Social Culture & Development Studies</a> </i></li>
                                <li class="menu-item-0130 menu-item-dropleft-item"><i><a href="#">Faculty of Science, Information Technology, Art & Design</a> </i></li>
                              </ul>   
                            </li>
                            <li id="menu-item-0131"><a class="menu-item-0131 menu-item-dropdown-item">International University Of East Africa (IUEA)</a>
                              <ul class="sub-menu menu-item-0131-sub-menu dropleft-menu">
                                <li class="menu-item-0132 menu-item-dropleft-item"><i><a href="http://localhost/error404">Faculty Of Business And Management</a> </i></li>
                                <li class="menu-item-0133 menu-item-dropleft-item"><i><a href="#">Faculty Of Engineering</a> </i></li>
                                <li class="menu-item-0134 menu-item-dropleft-item"><i><a href="#">Faculty Of Law</a> </i></li>
                                <li class="menu-item-0135 menu-item-dropleft-item"><i><a href="#">Faculty Of Science & Technology</a> </i></li>
                                <li class="menu-item-0136 menu-item-dropleft-item"><i><a href="#">Center Of Languages</a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0137"><a class="menu-item-0137 menu-item-dropdown-item">Uganda Martyrs University (UMU)</a>
                              <ul class="sub-menu menu-item-0137-sub-menu dropleft-menu">
                                <li class="menu-item-0138 menu-item-dropleft-item"><i><a href="http://localhost/umu/Faculty_Of_Built_Environment">Faculty Of Built Environment</a> </i></li>
                                <li class="menu-item-0139 menu-item-dropleft-item"><i><a href="http://localhost/umu/Faculty_Of_Business_Administration_and_Management">Faculty Of Business Administration & Management</a> </i></li>
                                <li class="menu-item-0140 menu-item-dropleft-item"><i><a href="http://localhost/umu/Faculty_Of_Agriculture">Faculty Of Agriculture</a> </i></li>
                                <li class="menu-item-0141 menu-item-dropleft-item"><i><a href="http://localhost/umu/Faculty_Of_Health_Science">Faculty Of Health Science</a> </i></li>
                                <li class="menu-item-0142 menu-item-dropleft-item"><i><a href="http://localhost/umu/Faculty_Of_Education">Faculty Of Education</a> </i></li>
                                <li class="menu-item-0143 menu-item-dropleft-item"><i><a href="http://localhost/umu/Faculty_Of_Science">Faculty Of Science</a> </i></li>
                                <li class="menu-item-0144 menu-item-dropleft-item"><i><a href="http://localhost/umu/School_Of_Arts_and_Social_Sciences">School Of Arts & Social Sciences</a> </i></li>
                              </ul>
                            </li>
                            <li id="menu-item-0145"><a class="menu-item-0145 menu-item-dropdown-item">Cavendish University Of Uganda (CUU)</a>
                              <ul class="sub-menu menu-item-0145-sub-menu dropleft-menu">
                                <li class="menu-item-0146 menu-item-dropleft-item"><i><a href="#">Faculty of Business and Management</a> </i></li>
                                <li class="menu-item-0147 menu-item-dropleft-item"><i><a href="#">Faculty of Science and Technology</a> </i></li>
                                <li class="menu-item-0148 menu-item-dropleft-item"><i><a href="#">Faculty of Socio-Economic Sciences</a> </i></li>
                                <li class="menu-item-0149 menu-item-dropleft-item"><i><a href="#">Faculty of Law</a> </i></li>
                                <li class="menu-item-0150 menu-item-dropleft-item"><i><a href="#">School of Post Graduate Studies and Research</a> </i></li>
                              </ul>   
                            </li>
                            <li id="menu-item-0151"><a class="menu-item-0151 menu-item-dropdown-item">St.Lawrence University (SLAU)</a>
                              <ul class="sub-menu menu-item-0151-sub-menu dropleft-menu">
                                <li class="menu-item-0152 menu-item-dropleft-item"><i><a href="#">Faculty of Business Studies</a> </i></li>
                                <li class="menu-item-0153 menu-item-dropleft-item"><i><a href="#">Faculty of Education</a> </i></li>
                                <li class="menu-item-0154 menu-item-dropleft-item"><i><a href="#">Faculty of Humanities</a> </i></li>
                                <li class="menu-item-0155 menu-item-dropleft-item"><i><a href="#">Faculty of Computer Science & Information Technology</a> </i></li>
                                <li class="menu-item-0156 menu-item-dropleft-item"><i><a href="#">Faculty of Industrial Art & Design</a> </i></li>
                              </ul>  
                            </li>
                            <li id="menu-item-0157"><a class="menu-item-0157 menu-item-dropdown-item" >Islamic University In Uganda (IUIU)</a>
                              <ul class="sub-menu menu-item-0157-sub-menu dropleft-menu">
                                <li class="menu-item-0158 menu-item-dropleft-item"><i><a href="#">Faculty Of Science</a> </i></li>
                                <li class="menu-item-0159 menu-item-dropleft-item"><i><a href="#">Faculty Of Education</a> </i></li>
                                <li class="menu-item-0160 menu-item-dropleft-item"><i><a href="#">Faculty Of Law</a> </i></li>
                                <li class="menu-item-0161 menu-item-dropleft-item"><i><a href="#">Faculty Of Management</a> </i></li>
                                <li class="menu-item-0162 menu-item-dropleft-item"><i><a href="#">Faculty Of Arts & Social Sciences</a> </i></li>
                                <li class="menu-item-0163 menu-item-dropleft-item"><i><a href="#">Faculty Of Islamic Studies & Arabic Language</a> </i></li>
                                <li class="menu-item-0164 menu-item-dropleft-item"><i><a href="#">Faculty Of Health Sciences</a> </i></li>
                              </ul>  
                            </li>
                            <li id="menu-item-0165"><a class="menu-item-0165 menu-item-dropdown-item" >Kumi University (KUMU)</a>
                              <ul class="sub-menu menu-item-0165-sub-menu dropleft-menu">
                                <li class="menu-item-0166 menu-item-dropleft-item"><i><a href="#">Faculty Of Science & Technology</a> </i></li>
                                <li class="menu-item-0167 menu-item-dropleft-item"><i><a href="#">Faculty Of Education & Languages</a> </i></li>
                                <li class="menu-item-0168 menu-item-dropleft-item"><i><a href="#">Faculty Of Social Sciences & Management Studies</a> </i></li>
                                <li class="menu-item-0169 menu-item-dropleft-item"><i><a href="#">Faculty Of Theology</a> </i></li>
                              </ul>  
                            </li>
                            <li id="menu-item-0170"><a class="menu-item-0170 menu-item-dropdown-item" >Kayiwa International University(KINTU)</a>
                              <ul class="sub-menu menu-item-0170-sub-menu dropleft-menu">
                                <li class="menu-item-0171 menu-item-dropleft-item"><i><a href="#">Faculty Of Humanities Social Sciences & Education</a> </i></li>
                                <li class="menu-item-0172 menu-item-dropleft-item"><i><a href="#">Faculty Of Business Administration & Information Technology</a> </i></li>
                              </ul> 
                            </li>
                          
                            <li id="menu-item-0173"><a class="menu-item-0173 menu-item-dropdown-item" href="http://localhost/isbat/index">ISBAT University</a>
                           <!-- <ul class="sub-menu menu-item-0173-sub-menu dropleft-menu">
                                <li class="menu-item-0174 menu-item-dropleft-item"><i><a href="http://localhost/isbat/Faculty_Of_ICT">Faculty Of Information & Communication Technology</a> </i></li>
                                <li class="menu-item-0175 menu-item-dropleft-item"><i><a href="http://localhost/isbat/Faculty_Of_Business_and_Commerce">Faculty Of Business & Commerce</a> </i></li>
                                <li class="menu-item-0176 menu-item-dropleft-item"><i><a href="http://localhost/isbat/Faculty_Of_Engineering">Faculty Of Engineering</a> </i></li>
                              </ul>  -->
                            </li>
          
                            <li id="menu-item-0082"><a class="menu-item-0082 menu-item-dropdown-item" href="http://localhost/Home/mun">Muni University (MUN)</a></li>
                          </ul>
                          </li>
                        <li id="menu-item-0120" class="menu-item  menu-item-0120 menu-item-hasno-children ">
                              <a href="#news" class="menu-item-link menu-item-0120-link ">NEWS</a>
                        </li>
                       </ul>


        </nav>

    </div>
    {%  endblock %}

  </header>
  <!--***Home-page header Ends here***-->
   <!--***Home-page body starts here***-->

  <body>
  <div class="col-12 navigation">
    <h6><i class="fas fa-home nav-icon "></i><b class="elevator_pages_nav_item"><a href="http://localhost/Home/index">Home</a></b>
    <i class="nav-icon fas fa-angle-double-right"></i><b class="elevator_pages_nav_item"><a href="#">{% block nav_univ_name %} {{ block('uni_title') }}{% endblock %}</a></b>
    {% block nav_Col %}<i class="nav-icon fas fa-angle-double-right"></i><b class="elevator_pages_nav_item">{% block nav_col_name %}<a href="#">Curent Collage/faculty{% endblock %}</a></b>{% endblock %}
    {% block nav_Courseunit %}<i class="nav-icon fas fa-angle-double-right"></i><b class="elevator_pages_nav_item">{% block Course_unit_name %}<a href="#">Current Courseunit{% endblock %}</a></b>{% endblock %}</h6>
  </div>
{% block content %}

<div class="container-fluid" id="about-us_carousel-slider">
  <div class="row text-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="about-section">
      <div class="container">
      <strong><h3>About Us</h3></strong>
    <hr/>
    <p>Welcome to GPA ELEVATOR a one stop website for all university/college academic materials.This provides students of higher instutions with online access to past papers,lecture Notes and other study materials in a softcopy format. GPA ELEVATOR is under development being managed by two Makerere University students of computer engineering by names of KIMERA MOSES and MUBIRU ISAAC with an aim of simplifying the lives of university students by bringing important academic materials like past-papers and much more closer to them.<br>
      <a href="developers_team.html" class="btn btn-sm btn-more" >Read More..</a>
    </div>
    </div>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-xl-8" id="carousel">
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
           <img id="carousel_height" src="http://localhost/img/graduants222.jpg" alt="group of university graduates-mak">
        <div class="carousel-caption d-none d-md-block">
          <h1>Welcome to Gpa Elevator</h1>
          <p class="lead">Welcome to <b>gpa elevator</b>,have a great feel as you elevate your current gpa to the highest possible.<br>This is your only site to elevate your GPA</p>
        </div>
      </div>
      <div class="carousel-item">
        <img id="carousel_height" src="http://localhost/img/revise2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>All You Need Is Right Here...</h1>
          <p class="lead">Find everything you need to revise here; past papers, Organized Lecture notes , links to important textbooks and much more...<br>All in one place...!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img id="carousel_height" src="http://localhost/img/kyu1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1>Your center of excellence</h1>
          <p class="lead">After all the years at any university,everyone needs to graduate with a good CGPA and that is the perfect reason as to why you need to use Gpa Elevator.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
</div>
       </div>

       <!-------------------->
     <div class="container-fluid " id="services">
       <h1>What We Offer</h1>
     </div>
     <div class="our-services">

    <div class="row text-center">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4" id="col-1">
        <div class="feature-box">
          <i class="icon  fa fa-mobile-alt"></i> <i class="icon fa fa-tablet-alt"></i><br/>
          <i class="icon fa fa-laptop"></i><i class="icon fa fa-desktop"></i>
        <h3><b>Study anytime, anywhere and on any device</b></h3>
        <p>We very well know that being a university student, many things might not go as planned and you may need to study whenever and wherever you may be.Gpa Elevator is the best partner for you. </p>
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" id="col-2">
        <div class="feature-box">
          <i class="icon fas fa-graduation-cap"></i><span><i class="icon fa fa-certificate"></i><i class="icon fa fa-cloud-upload-alt"></i></span>
        <h3><b>Be Part Of One's Success</b></h3>
        <p><b>1.</b>You can easily contribute to someone's success by either answering a question asked by a fellow student or uploading any kind of university pastpaper that you may find helpfull to others.<br>
       <b>2.</b>You can also contribute by discussing  your topics of expertise in particular course units to either individuals or a group of students who you shall be connected to through this website.</p>
      </div>
    </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4" id="col-3">
        <div class="feature-box">
          <i class="icon fas fa-university"></i><span><i class="icon fa fa-search"></i></span>
        <h3><b>Free study resources</b></h3>
        <p>Find and download all pastpaper exams,lecture notes,assignments,links to usefull textbooks and YouTube videos,answers from fellow students, Contacts of individual students willing to help and much more.</p>
          <a href="#navbar" class="btn btn--blue btn-primary">Get Started</a>
      </div>
      </div>
  </div>

     </div>
     <div class="container-fluid" id="news">
       <h1><i>News Trending Around Your Campus</i></h1>
     </div>

     <div class="container-fluid" id="vert">
      
      <div id="carouselExampleControls " class="row carousel vert slide" data-ride="carousel" data-interval="10000">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 updates"><b>TRENDING:</b> </div>
          <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 container carousel-inner">
              <div class="carousel-item active"><i class="fas fa-caret-right"></i>
                  <a  href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. </a>
              </div>
              <div class="carousel-item"><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                  <a  href="#">Makerere Graduates student in various fields</a>
              </div>
              <div class="carousel-item " ><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                <a  href="#">Makerere Graduates student in various fields</a>
              </div>
              <div class="carousel-item " ><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                <a  href="#">Makerere Graduates student in various fields</a>
              </div>
              <div class="carousel-item " ><i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>
                <a  href="#">Makerere Graduates student in various fields</a>
              </div>
          </div>
      </div>
    </div>

     <div class="row news_area" >
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 widget widget_notice_board_widget widget-none news_containers" id="notice_board_widget-4">
      <div id="carouselExampleFade" class="carousel slide carousel-fade news_card-sliding" data-ride="carousel">
     
      <div class="carousel-item news_card active"> 
          <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true">
            <img  class="scene_img_lg" src="http://localhost/img/muk strike-1.jpg" alt="" >
            <a href="muk.html">
            <div class="news_card_image-rounded university_logo-rounded">
            <img class="image_rounded card_img_sm " src="http://localhost/img/muk-logo.png" alt="Muk-logo">
            </div></a>
          </div>
        <h2 class="university_name_having_news_trending"> <a href="muk.html#news">Makerere University</a></h2>
        <div class="date_posted_anthor"><i>Posted on 12th/10/2019  by <a href="#id=2323232">Kimera Moses</a></i></div>
      
        <div class="news_article_area">
            <p class="detailed_news_story">3rd August 2019 marked the beginning of Suubi's happiness who reported to campus with a metallic case and a big bag, Suubi has since gained popularity and support from different people around the globe after the spread of the picture taken near the university hall...</p>
        </div>
      </div>

      <div class="carousel-item news_card "> 
          <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true">
            <img  class="scene_img_lg" src="http://localhost/img/kyu strike2.jpg" alt="KYU-logo" >
            <a href="muk.html">
            <div class="news_card_image-rounded university_logo-rounded">
            <img class="image_rounded card_img_sm " src="http://localhost/img/kyu_logo.jpg" alt="Muk-logo">
            </div></a>
          </div>
        <h2 class="university_name_having_news_trending"> <a href="muk.html#news">Kyambogo university</a></h2>
        <div class="date_posted_anthor"><i>Posted on 12th/10/2019  by <a href="#id=2323232">Mugambwa Lawrence</a></i></div>
      
        <div class="news_article_area">
            <p class="detailed_news_story">Semester One 2019/2020 Academic Year commences on August 03, 2019 and will end on December 08, 2019<br/>source-<a href="https://kyu.ac.ug/notice/dates-for-the-commencement-of-semester-one-2019-2020-academic-year/">https://kyu.ac.ug/notice/dates-for-the-commencement-of-semester-one-2019-2020-academic-year/</a></p>
          </p>
        </div>
      </div>

      <div class="carousel-item news_card"> 
          <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true">
            <img  class="scene_img_lg" src="http://localhost/img/ndejje strike.jpg" alt="" >
            <a href="muk.html">
            <div class="news_card_image-rounded university_logo-rounded">
            <img class="image_rounded card_img_sm " src="http://localhost/img/ndejje-logo.jpg" alt="ndu-logo">
            </div></a>
          </div>
        <h2 class="university_name_having_news_trending"> <a href="muk.html#news">ndejje University</a></h2>
        <div class="date_posted_anthor"><i>Posted on 12th/10/2019  by <a href="#id=2323232">Nansamba Racheal</a></i></div>
      
        <div class="news_article_area">
            <p class="detailed_news_story">Students of Ndejje university have gone into a strike that they claimed that it will take a full week if the university administration does not come out to denouce the increament in tuition which was made at the beginning of the accademic year</p>
        </div>
      </div>
    </div>
    </div>


   

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 ">
          <div class="news_card"> 
              <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true">
                  <img  class="scene_img_lg" src="http://localhost/img/ndejje graduation.jpg" alt="" >
                  <a href="muk.html">
                  <div class="news_card_image-rounded university_logo-rounded">
                  <img class="image_rounded card_img_sm " src="http://localhost/img/ndejje-logo.jpg" alt="ndu-logo">
                  </div></a>
                </div>
              <h2 class="university_name_having_news_trending"> <a href="muk.html#news">Ndejje University</a></h2>
              <div class="date_posted_anthor"><i>Posted on 12th/10/2019  by <a href="#id=2323232">Kimera moxhus</a></i></div>
            
              <div class="news_article_area">
                  <p class="detailed_news_story">Students of Ndejje university have gone into a strike that they claimed that it will take a full week if the university administration does not come out to denouce the increament in tuition which was made at the beginning of the accademic year</p>
              </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
            <div class="news_card"> 
                <div class="news_card_image-lg news_scene_img_container" data-overview-tooltip-initiated="true">
                    <img  class="scene_img_lg" src="http://localhost/img/muk-2019-strike.jpeg" alt="" >
                    <a href="muk.html">
                    <div class="news_card_image-rounded university_logo-rounded">
                    <img class="image_rounded card_img_sm " src="http://localhost/img/muk-logo.png" alt="muk-logo">
                    </div></a>
                  </div>
                <h2 class="university_name_having_news_trending"> <a href="muk.html#news">Makerere University</a></h2>
                <div class="date_posted_anthor"><i>Posted on 12th/10/2019  by <a href="#id=2323232">Olwen Tasha</a></i></div>
              
                <div class="news_article_area">
                  <h5 class="news_story_healines"> <i>Guild President Missing</i> </h5>
                    <p class="detailed_news_story">One of the former contestant for Guild presidency Mukisa goes missing. The latest news that we have gotten today the 2nd/06/2019 shows that,Mukisa Joshua W may not be in a good condition as he is not seen by any of his friends and the family members.We shall keep you updated.</p>
                </div>
            </div>
          </div>
     

     </div>

{% endblock %}
    
  </body>
   <!--***Home-page body Ends here***-->
   <!--***Home-page Footer starts here***-->
  <footer>

  <!--DISCLAIMER-->
     <div class="container-fluid padding" id="disclaimer">
    <div class="mox text-center">
    <div class="col-12">
      <i class="icon fa fa-exclamation-circle disclamer_icon"></i><h1>Disclaimer</h1>
      <hr class="rule">
    </div>
      <div class="col-12 disclaimer">
       <p class="">Please note that pastpapers might slightly be different in setting and format to the exams and test that you are preparing for. The lecturers have all the rights to completely change the format and the questions to new ones(<b>Can be encountered but on rare occassions</b>) that have never appeared</p>
      </div>
    </div>
    </div>

  <!--news Letter section--->

     <div class="newsletter">
      <div class="section-box">
      </div>
        <div class="newsletter-row">
          <div class="newsletter_SubscribeNote">
            <div class="newsletter_SubscribeNote-title">
            <h1>Subscribe To Our Newsletter</h1>
            <p>Subscribe to get Notified whenever a paper is uploaded in your particular course or if there are news trending around your campus</p>
           <hr class="newsletter_SubscribeNote-title__rule">
          </div>
          <form class="newsletter-form mb-4" action="#" method="post">
            <b><label for="username">Name:</label></b>
             <input type="newsletter_text" class="form-control" id="username" placeholder="FirstName  LastName" required>
             <b><label for="usercourse">Course:</label></b>
             <input type="newsletter_text" class="form-control" id="usercourse" placeholder="What's Your Course?" required>
               <b><label for="useremail">Email:</label></b>
               <input type="newsletter_text" class="form-control" id="useremail" placeholder="Username@gmail.com" required>
               <b><button type="submit" class="btn btn-submit" >Submit</button></b>
          </form>
        </div>
        </div>
     </div>

<!--connect-->
     <div class="container-fluid padding" id="footer__connect">
    <div class="row text-center" id="footer_contactUs">
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            
            <div class=" widget_notice_board_widget widget-none" id="notice_board_widget-4">
                <h4>Gpa NoticeBoard</h4>
                <hr class="rule">
                <div class="msnb_notice scroll-up">
                    <ul class="notice-list"><strong id="notice-title">Launching of Gpa elevator</strong>
                      <li> Gpa elevator will be officially launched in January 2020 at makerere University main Hall and there after shall be left and maintained for use by all university student as asource of their academic materials.</li>
                      <li> Semester Two 2019/2020 Academic Year commences on January 17<sup>th</sup>, 2020, and will end on May 10, 2020.</li>
          
              </div>
              </div>
           
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <h4>Contact Us</h4>
            <hr class="rule">
            <ul class="contact_list">
            <li><i class="fas fa-phone-alt"></i>+256-759130054</li>
            <li><i class="fas fa-phone-alt"></i>+256-778451025</li>
            <li><i class="fas fa-location-arrow"></i><a href="https://www.mak.ac.ug/about-makerere/contact-information">Kampala,Uganda</a></li>
            <li><i class="fas fa-map-marked"></i><a href="https://www.mak.ac.ug/about-makerere/contact-information">Makerere University</a></li>
            <li><i class="fas fa-envelope-open"></i><a href="#">gpaelevator@gmail.com</a></li>
          </ul>
        </div>

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
            <h4>Follow Us</h4>
            <hr class="rule">
            <ul class="contact_list">
            <li><i class="fab fa-facebook"></i><a href="#">Gpa Elevator</a></li>
            <li><i class="fab fa-twitter"></i><a href="#">@gpaelevator</a></li>
            <li><i class="fab fa-google-plus-g"></i><a href="#">Gpa Elevator</a></li>
            <li><i class="fab fa-instagram"></i><a href="#">@gpaelevator</a></li>
            <li><i class="fab fa-youtube"></i><a href="https://www.youtube.com/channel/UCaKoCKOuw4U2CfAEmxrlGGg " target="_blank">Gpa Elevator</a></li>
          </ul>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <h4>About Us</h4>
              <hr class="rule">
              <ul class="contact_list">
              <li><a href="#">Our services</a></li>
              <li><a href="developers_team.html">Developers Team</a></li>
              <li><a href="#">Partners</a></li>
              <li><a href="#">Volunteers</a></li>
              <li><a href="#">Future plans</a></li>
              <li><a href="#">How to use the Platform</a></li>
            </ul>
            </div>


    </div>
     </div>

 <!--copyright section-->
    <div id="footer__connect-copyrightSection" >
     <div class="row">
     <hr class="footer__connect-copyrightSection_rule">
     <div class="col-md-6 "><h5>All rights reserved by gpa elevator copyright &copy; <script> document.write(new Date().getFullYear()) </script></h5></div>
     <div class="col-md-6 "><h6>| Designed & Maintained by <a href="#"><i>MOXTECH DEVELOPERS</i></a></h6></div>
     </div>
    </div>

     <button onclick="topFunction()" id="back-to-top" title="Back to top"><i class="back-2-top_icon fas fa-arrow-up"></i></button>
  </footer>
   <!--***Home-page Footer Ends here***-->
</div>






{% block js_links %}
  <script type="text/javascript" src="http://localhost/js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" id="msnb_notice_style-css" href="http://localhost/css/msnb_style.css" type="text/css" media="all">
  <script type="text/javascript" src="http://localhost/js/popper.min.js"></script>
  <script type="text/javascript" src="http://localhost/js/all.js"></script>
  <link rel="stylesheet" href="http://localhost/css/academicons.min.css">
  <link rel="stylesheet" href="http://localhost/css/media-queries.css">
  <link rel="stylesheet" href="http://localhost/css/theme-utils.css">
  <script type="text/javascript" src="http://localhost/js/elevator.js"></script>
  <script type="text/javascript" src="http://localhost/js/owl.carousel.js"></script>
  <script type="text/javascript" src="http://localhost/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://localhost/font-awesome/js/font-awesome.min.js"></script>
{% endblock %}



  </html>













Makerere University
Kyambogo University
Makerere University Business School
Mbarara University Of Science And Technology
Nkumba University
Bugema University
Ndejje University
Uganda Christian University
Gulu University
Kampala University
Victoria University
Kampala International University
Busitema University
Isbat University
Bisshop Stuart University
Mutesa I Royal University
Lira University
International University Of East Africa
Kabaale Unversity









