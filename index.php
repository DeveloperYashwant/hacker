<!DOCTYPE html>

<html lang="en">

<head>
  	
     <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('back.jpg'); /* Replace 'path/to/your/background-image.jpg' with the actual path to your background image */
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif; /* Set your preferred font */
        }

        .hero-content-overlay {
            /* Add styles for your overlay container */
            background-color: rgba(255, 255, 255, 0.8); /* Example: white with 80% opacity */
            padding: 20px; /* Adjust padding as needed */
        }

        /* Add additional styles for other elements if necessary */

        .container {
            /* Styles for the container */
        }

        /* Add more styles for other elements as needed */

    </style>


    <title>Website Developer</title>

	<link rel="icon" href="images/logo.jpg" />



    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">



    <!-- FontAwesome CSS -->

    <link rel="stylesheet" href="css/font-awesome.min.css">



    <!-- ElegantFonts CSS -->

    <link rel="stylesheet" href="css/elegant-fonts.css">



    <!-- themify-icons CSS -->

    <link rel="stylesheet" href="css/themify-icons.css">



    <!-- Swiper CSS -->

    <link rel="stylesheet" href="css/swiper.min.css">



    <!-- Styles -->

    <link rel="stylesheet" href="style.css">

	

	

	



  <meta name="viewport" content="width=device-width, initial-scale=1">



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>



  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	

<script src="https://kit.fontawesome.com/a076d05399.js"></script>





<script>

function populate(s1,s2){

	var s1 = document.getElementById(s1);

	var s2 = document.getElementById(s2);

	s2.innerHTML = "";

	if(s1.value == "C Prog"){

		var optionArray = ["Intro of C|Intro of C",

"Data Types and Variables(input/output)|Data Types and Variables(input/output)",

"Operator1|Operator1",

"Operator2|Operator2",

"Decision Making(if,if-else,nested if-else)|Decision Making(if,if-else,nested if-else)",

"Decision Making(else-if ladder,switch case)|Decision Making(else-if ladder,switch case)",

"Loop1(for,while,do-while)|Loop1(for,while,do-while)",

"Loop2(Nested),control statement|Loop2(Nested),control statement",

"Function1|Function1",

"Method (call by value),Recursive|Method (call by value),Recursive", 

"Array(1D,2D)|Array(1D,2D)",

"Pointer|Pointer",

"Structure1(simple,nested Structure)|Structure1(simple,nested Structure)",

"Structure2(with Array,with Function,with Pointer)|Structure2(with Array,with Function,with Pointer)",

"Union|Union",

"String Function|String Function"];

	} 

	

	else if(s1.value == "C++ Prog"){

		var optionArray = ["Intro Classes and Object|Intro Classes and Object",

"Built in Function|Built in Function",

"Friend Function|Friend Function",

"Constructor|Constructor",

"Destructor|Destructor",

"Operator overloading(Unary Operator)|Operator overloading(Unary Operator)",

"Operator overloading(Binary Operator)|Operator overloading(Binary Operator)",

"Inheritance(single,multilevel)|Inheritance(single,multilevel)",

"Inheritance(Multiple,Heirarchical,Hybrid)|Inheritance(Multiple,Heirarchical,Hybrid)",

"Method Overloading,Overriding|Method Overloading,Overriding",

"Virtual Function(Early binding,Late binding)|Virtual Function(Early binding,Late binding)",

"Virtual base class,Pure virtual function|Virtual base class,Pure virtual function",

"Templates|Templates",

"File Handling|File Handling"];

	} else if(s1.value == "Core Java"){

		var optionArray = ["Intro of java,command Line Args|Intro of java,command Line Args",

"Data Types and Variables|Data Types and Variables",

"Operators|Operators",

"Decision Making|Decision Making",

"Loops,Nested loops,Control Statement|Loops,Nested loops,Control Statement",

"Static method,non-static method|Static method,non-static method",

"Array|Array",

"Constructor,Finalize|Constructor,Finalize",

"Inheritance(single,multilevel)|Inheritance(single,multilevel)",

"method overloading,overriding|method overloading,overriding",

"Interface|Interface",

"Abstract Method|Abstract Method",

"Threading|Threading",

"Packages|Packages",

"Exception Handling|Exception Handling",

"Input Method(BufferedReader),String Method|Input Method(BufferedReader),String Method",

"File Handling|File Handling",

"Applet|Applet",

"AWT Controls|AWT Controls",

"Awt Layouts|Awt Layouts",

"AWT Event|AWT Event",

"Swing Controls|Swing Controls",

"Swing Layouts|Swing Layouts",

"Swing Events|Swing Events"];

	}

	

	else if(s1.value == "Adv Java"){

		var optionArray = ["Intro of servlet|Intro of servlet",

"Servlet Request|Servlet Request",

"Servlet Collaboration|Servlet Collaboration",

"JDBC-ODBC|JDBC-ODBC",

"Session Tracking(using Session and Cookies)|Session Tracking(using Session and Cookies)",

"Intro of JSP,JSP scripting Elements|Intro of JSP,JSP scripting Elements",

"Implicit Object of JSP|Implicit Object of JSP",

"Directive Elements|Directive Elements",

"Action Element|Action Element",

"Expression Language|Expression Language",

"JSP Form|JSP Form",

"Intro of EJB|Intro of EJB",

"Session Bean|Session Bean"];

	}

	

	else if(s1.value == "C#"){

		var optionArray = ["Intro of C# with .NET Framework|Intro of C# with .NET Framework",

"Data types and variables|Data types and variables",

"operators|operators",

"Decision making|Decision making",

"Loops,nested loop,control stat|Loops,nested loop,control stat",

"Function|Function",

"Array|Array",

"Class and Object with keywords|Class and Object with keywords",

"Properties|Properties",

"Inheritance|Inheritance",

"Polymorphysm|Polymorphysm",

"Abstraction|Abstraction",

"Exception Handling|Exception Handling",

"File Handling|File Handling",

"Collection|Collection",

"Generic and Delegates|Generic and Delegates",

"Reflection|Reflection",

"Multithreading|Multithreading"];

	}

	

	else if(s1.value == "ASP.NET"){

		var optionArray = ["Introduction of ASP.NET|Introduction of ASP.NET",

"Web form Development|Web form Development",

"Server Site State Management|Server Site State Management",

"Web Form|Web Form",

"Validation Controls|Validation Controls",

"Table Controls|Table Controls",

"Calendar Control|Calendar Control",

"AddRotator Controls|AddRotator Controls",

"User Controls|User Controls",

"Chart Control|Chart Control",

"Multi View|Multi View",

"Master Page|Master Page",

"File Upload and Download|File Upload and Download",

"Exception Handling with ASP.net|Exception Handling with ASP.net",

"Client Side State Management|Client Side State Management",

"Theme & CSS|Theme & CSS",

"ADO.net|ADO.net",

"XML|XML",

"AJAX Control|AJAX Control",

"Navigation control|Navigation control",

"List Control|List Control"];

	}

	

	else if(s1.value == "VBA"){

		var optionArray = ["Intro of VBA|Intro of VBA",

"Data Types and Variables|Data Types and Variables",

"Operators|Operators",

"Decision Making|Decision Making",

"Loops|Loops",

"String|String",

"Date and Time|Date and Time",

"Arrays|Arrays",

"Function|Function",

"Excel Object|Excel Object",

"Text Files|Text Files",

"Charts|Charts",

"Userforms|Userforms"];

	}

	

	else if(s1.value == "Python"){

		var optionArray = [

"Intro of Python|Intro of Python",

"Data types and variables|Data types and variables",

"operators|operators",

"Decision making(if,if-else,elif)|Decision making(if,if-else,elif)",

"Loops,nested loop,control stat|Loops,nested loop,control stat",

"Function|Function",

"String|String",

"List|List",

"Tuple|Tuple",

"Dictionary|Dictionary",

"class and object with constructor|class and object with constructor",

"Inheritance|Inheritance",

"Exception Handling|Exception Handling",

"File I/O|File I/O",

"Modules|Modules",

"Dates|Dates",


"GUI Database|GUI Database"];

	}

	

	else if(s1.value == "JavaScript"){

		var optionArray = ["intro of JS|intro of JS",

"Data Types and variables|Data Types and variables",

"Operators|Operators",

"decision making|decision making",

"Loops|Loops",

"Nested loop and control statement|Nested loop and control statement",

"Functions|Functions",

"Event Handling|Event Handling",

"Object|Object",

"Date Object|Date Object",

"Number and Boolean object|Number and Boolean object",

"String object|String object",

"Array object|Array object",

"Regular Expression|Regular Expression",

"Cookies|Cookies",

"DOM|DOM",

"Form validation|Form validation"];

	}

	

	else if(s1.value == "Web Design"){

		var optionArray = ["intro of HTML & backgrounds|intro of HTML & backgrounds",

"Heading tags and Text formatting tags|Heading tags and Text formatting tags",

"List(order,unorder,defination)|List(order,unorder,defination)",

"Adding images,link and Marquee|Adding images,link and Marquee",

"Image Mapping(client,server)|Image Mapping(client,server)",

"Table design|Table design",

"Frameset and redirection|Frameset and redirection",

"Audio and Video with Embed tag|Audio and Video with Embed tag",

"Form Designing|Form Designing",

"intro of css(inline css)|intro of css(inline css)",

"css2(internal css and External css)|css2(internal css and External css)",

"Selectors(id,class)|Selectors(id,class)",

"Web Hosting intro(how to buy server)|Web Hosting intro(how to buy server)",

"Uploading pages on server|Uploading pages on server",

"Wordpress1|Wordpress1",

"Wordpress2|Wordpress2"];

	}

	

	else if(s1.value == "Android"){

		var optionArray = ["Intro of Android|Intro of Android",

"Android Widget Part-I|Android Widget Part-I",

"Android Widget Part-II|Android Widget Part-II",

"Activity and Intents|Activity and Intents",

"Image Slider & Image Switcher|Image Slider & Image Switcher",

"Tab Layout & Search View|Tab Layout & Search View",

"Android Fragments|Android Fragments",

"Android Menu|Android Menu",

"Android Services|Android Services",

"Android Alarm_Manager|Android Alarm_Manager",

"Android Storage|Android Storage",

"Android Preferences|Android Preferences",

"Android Media(Audio,Video)|Android Media(Audio,Video)",

"Android Recording Media|Android Recording Media",

"Android Text to Speech|Android Text to Speech",

"Android Call State|Android Call State",

"Android Phone Call & Notifications|Android Phone Call & Notifications",

"Android Sending SMS & Email|Android Sending SMS & Email",

"Android Device|Android Device",

"Camera Activity|Camera Activity",

"Android Graphics|Android Graphics",

"Android Animation|Android Animation",

"Android Database Connection|Android Database Connection",

"Android Working with Tables|Android Working with Tables",

"Android CRUD Operation|Android CRUD Operation"];

	}

	

	else if(s1.value == "Computer Science XII"){

		var optionArray = [

		"HTML I|HTML I",

		"HTML II|HTML II",

		"HTML III|HTML III",

		"VB I|VB I",

		"VB II|VB II",

		"VB III|VB III",

		"VB IV|VB IV",

		"C++|C++",

		"8085 MicroProcessor I|8085 MicroProcessor I",

		"8085 MicroProcessor II|8085 MicroProcessor II",

		"8085 MicroProcessor III|8085 MicroProcessor III",

		"8085 MicroProcessor IV|8085 MicroProcessor IV",

		"8086 MicroController I|8086 MicroController I",

		"8086 MicroController II|8086 MicroController II",

		"Data Structure I|Data Structure I",

		"Data Structure II|Data Structure II",

		"Data Structure III|Data Structure III",

		"Data Structure IV|Data Structure IV",

		"Computer Network I|Computer Network I",

		"Computer Network II|Computer Network II",

		"Computer Network III|Computer Network III",

		"Operating System I|Operating System I",

		"Operating System II|Operating System II",

		"Operating System III|Operating System III",

		];

		}

		

	

	else if(s1.value == "Computer Science XI"){

		var optionArray = ["HTML|HTML","VB|VB","C++|C++","8085 MicroProcessor|8085 MicroProcessor","8086 MicroController|8086 MicroController","Data Structure|Data Structure","Computer Network|Computer Network"];

		}

		

	

	else if(s1.value == "Wordpress"){

		var optionArray = ["Working with XAMPP Database|Working with XAMPP Database",

		"Create Website with XAMPP|Create Website with XAMPP",

		"Customizing Template|Customizing Template",

		"Working with Plugins I|Working with Plugins I",

		"Working with Plugins II|Working with Plugins II",

		"Add Own Templates|Add Own Templates",

		"Add Own Pages|Add Own Pages",

		"Add Own Database|Add Own Database"];

		}

	

	else if(s1.value =="PHP")

	{

		var optionArray=["Intro of PHP,constant,comments|Intro of PHP,constant,comments",

						"Data types and variables|Data types and variables",

						"operators|operators",

						"Decision making|Decision making",

						"Loops,nested loop,control stat|Loops,nested loop,control stat",

						"Functions|Functions",

						"String Function|String Function",

						"Math Function|Math Function",

						"Navigation(include,require)|Navigation(include,require)",

						"Array|Array",

						"Cookies|Cookies",

						"Session|Session",

						"File Handling|File Handling",

						"Upload and Download file|Upload and Download file",

						"Sending Mail|Sending Mail",

						"Database Connection|Database Connection",

						"CRUD operations in Database|CRUD operations in Database",

						"Login Module|Login Module"];

	}

	

	else if(s1.value =="SQL Server")

	{

		var optionArray=["Intro of DB,DB operation|Intro of DB,DB operation",

						"Sql Table|Sql Table",

						"Sql select|Sql select",

						"Sql Clause and delete|Sql Clause and delete",

						"Sql order by|Sql order by",

						"Sql update and insert|Sql update and insert",

						"Joins|Joins",

						"Keys|Keys"];

	}

	for(var option in optionArray){

		var pair = optionArray[option].split("|");

		var newOption = document.createElement("option");

		newOption.value = pair[0];

		newOption.innerHTML = pair[1];

		s2.options.add(newOption);

	}

}



function pop(s1,s2,s3){

	var s1 = document.getElementById(s1);

	var s2 = document.getElementById(s2);
	
	var s3 = document.getElementById(s3);

	s2.innerHTML = "";

	if(s1.value == "Andheri"){

		var optionArray = ["Completed|Completed"];



	}

	

	if(s1.value == "Vile Parle[AO]"){

		var optionArray = ["Completed|Completed"];



	}

	

	if(s1.value == "Vile Parle[CL]"){

		var optionArray = ["Completed|Completed"];



	}
	
	if(s1.value == "Jogeshwari"){

		var optionArray = ["Completed|Completed"];



	}
	


	

	

	for(var option in optionArray){

		var pair = optionArray[option].split("|");

		var newOption = document.createElement("option");

		newOption.value = pair[0];

		newOption.innerHTML = pair[1];

		s3.options.add(newOption);

	}

}

        document.addEventListener('contextmenu', (e) => e.preventDefault());

        document.addEventListener('keydown', (e) => {
            if (e.key === 'F12' || 
                (e.ctrlKey && e.shiftKey && (e.key === 'I' || e.key === 'J')) || 
                (e.ctrlKey && e.key === 'U')) {
                e.preventDefault();
            }
        });
    
</script>





</head>

<body  >









    <div class="hero-content">

        <header class="site-header">

            <div class="top-header-bar">

                <div class="container-fluid">

                    <div class="row">

                        <div class="col-12 col-lg-6 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">

                            <div class="header-bar-email d-flex align-items-center">

                                <i class="fa fa-envelope"></i>yashghole12@gmail.com

                            </div><!-- .header-bar-email -->



                            <div class="header-bar-text lg-flex align-items-center">

                                <p><i class="fa fa-phone"></i>7350059415 </p>

                            </div><!-- .header-bar-text -->

							

							

							

                        </div><!-- .col -->



                        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">

                            



                            <div class="header-bar-menu">

                                <ul class="flex justify-content-center align-items-center py-2 pt-md-0">

                                   <li><i class="far fa-hand-point-right" style="color:red;font-size:25px"></i></li>

									&nbsp;<li><a href="#" style="text-decoration:none;font-weight:bold;color:white;background:skyblue;padding:10px;border-radius:20px" data-toggle="modal" data-target="#myModal">Student Enrollment</a></li>

	&nbsp;&nbsp;<li><a href="#" style="text-decoration:none;font-weight:bold;color:white;background:pink;padding:10px;border-radius:20px" data-toggle="modal" data-target="#myModal5">Sign Up</a></li>

											

											



												

<div class="modal fade" id="myModal">



    <div class="modal-dialog">



      <div class="modal-content">



        <!-- Modal Header -->





        <!-- Modal body -->



        <div class="modal-body">



				<div class="card">

			<div class="card card-body">

	<div class="container">

  <form  method="post" action="book.php">

  

  <div class="form-group">

      <h3 style="text-align:center;font-family:algerian;color:violet">Student Admission Form</h3>

  

    </div>

  <hr>

    <div class="form-group">

      <label for="email">Enter Full Name:</label>

      <input type="text" class="form-control" id="Sname" placeholder="Enter Full Name" name="Sname" required minlength="15">

    </div>

	

	<div class="form-group">

      <label for="email">Enter Contact Number:</label>

      <input type="text" class="form-control" placeholder="Mobile Number" name="Contact" required minlength="10" maxlength="10">

    </div>

	

	

    <div class="form-group">

      <label for="pwd">Select Course:</label>

      <select class="form-control" name="Cname" id="Course" required>

		<option Value="">--select--</option>

		<option Value="BSC[IT]">BSC[IT]</option>

		<option Value="BSC[CS]">BSC[CS]</option>

		<option Value="Computer Science">Computer Science</option>

		<option Value="Prog Language">Prog Language</option>

		

	  </select>

    </div>

	

	<div class="form-group">

      <label for="pwd">Select Education Year:</label>

      <select class="form-control" name="Year" required>

		<option Value="">--select--</option>

		<option Value="FY">FY</option>

		<option Value="SY">SY</option>

		<option Value="TY">TY</option>

		<option Value="FYJC">FYJC</option>

		<option Value="SYJC">SYJC</option>

		<option Value="App/Software/Websites">App/Software/Websites</option>

		

	  </select>

    </div>

		

    <input type="submit" value="Save" class="btn btn-secondary">

   

  </form>

  </div>



		 



        </div>



        



        <!-- Modal footer -->



        <div class="modal-footer">



          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>



        </div>



        



      </div>



    </div>



  </div>

  
											

</ul>

                            </div><!-- .header-bar-menu -->

               
                
                        </div><!-- .col -->

                    </div><!-- .row -->
                    

                </div><!-- .container-fluid -->

            </div><!-- .top-header-bar -->


            <div class="nav-bar">

                <div class="container">

                    <div class="row">

                        <div class="col-9 col-lg-3">

                            <div class="site-branding">

                                <h1 class="site-title"><a href="index.php" rel="home" style="color:white;text-decoration:none;">Ya<span>sh</span></a></h1>

                            </div><!-- .site-branding -->
                            

                        </div><!-- .col -->

    

                        <div class="col-3 col-lg-9 flex justify-content-end align-content-center">


                            <nav class="site-navigation flex justify-content-end align-items-center">

                                <ul class="flex flex-column flex-lg-row justify-content-lg-end align-content-center">

                                    <li class="current-menu-item"><a href="index.php">&nbsp;&nbsp;Home</a></li>

                                    <li><a href="about.php">About</a></li>

                                    
                                    <li><a href="software.php">Softwares</a></li>

                                    <li><a href="courses.php">Courses</a></l>

                                    <li><a href="#" data-toggle="modal" data-target="#myModal4">Attendance</a></li>

                                    <li><a href="#" data-toggle="modal" data-target="#myModal2">Progress</a></li>

                                </ul>



                                <div class="hamburger-menu d-lg-none">

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                    <span></span>

                                </div><!-- .hamburger-menu -->



                                <div class="header-bar-cart">

								

                                    <a href="#" data-toggle="modal" data-target="#myModal3" title="Private Login" class="flex justify-content-center align-items-center"><img src="images/yash.jpg"  style="border-radius:50%;border:3px dotted yellow" height="50" width="50"></img></span></a>

                                </div><!-- .header-bar-search -->

                            </nav><!-- .site-navigation -->

                        </div><!-- .col -->

                    </div><!-- .row -->

                </div><!-- .container -->

            </div><!-- .nav-bar -->

        </header><!-- .site-header -->



        <div class="hero-content-overlay">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <div class="hero-content-wrap flex flex-column justify-content-center align-items-start">

                            <header class="entry-header">

                                <h4>Get started with University courses</h4>

                                <h1>best Private<br/>Learning system</h1>

                            </header><!-- .entry-header -->



                            <div class="entry-content">

                                <p>All University Courses According to Your Stream Just Click on Student Admission Link. You Can Apply Many Science IT Courses</p>

                            </div><!-- .entry-content -->



                            <footer class="entry-footer read-more">

                                <a href="#">read more</a>

                            </footer><!-- .entry-footer -->

                        </div><!-- .hero-content-wrap -->

                    </div><!-- .col -->

                </div><!-- .row -->

            </div><!-- .container -->

        </div><!-- .hero-content-hero-content-overlay -->

    </div><!-- .hero-content -->



    <div class="icon-boxes">

        <div class="container-fluid">

            <div class="flex flex-wrap align-items-stretch">

                <div class="icon-box">

                    <div class="icon">

                        <span class="ti-user"></span>

                    </div><!-- .icon -->



                    <header class="entry-header">

                        <h2 class="entry-title">Learn From The Experts</h2>

                    </header><!-- .entry-header -->



                    <div class="entry-content">

                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                    </div><!-- .entry-content -->



                    <footer class="entry-footer read-more">

                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>

                    </footer><!-- .entry-footer -->

                </div><!-- .icon-box -->



                <div class="icon-box">

                    <div class="icon">

                        <span class="ti-folder"></span>

                    </div><!-- .icon -->



                    <header class="entry-header">

                        <h2 class="entry-title">Book Library & Store</h2>

                    </header><!-- .entry-header -->



                    <div class="entry-content">

                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                    </div><!-- .entry-content -->



                    <footer class="entry-footer read-more">

                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>

                    </footer><!-- .entry-footer -->

                </div><!-- .icon-box -->



                <div class="icon-box">

                    <div class="icon">

                        <span class="ti-book"></span>

                    </div><!-- .icon -->



                    <header class="entry-header">

                        <h2 class="entry-title">Best Course Online</h2>

                    </header><!-- .entry-header -->



                    <div class="entry-content">

                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                    </div><!-- .entry-content -->



                    <footer class="entry-footer read-more">

                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>

                    </footer><!-- .entry-footer -->

                </div><!-- .icon-box -->



                <div class="icon-box">

                    <div class="icon">

                        <span class="ti-world"></span>

                    </div><!-- .icon -->



                    <header class="entry-header">

                        <h2 class="entry-title">Best Industry Leaders</h2>

                    </header><!-- .entry-header -->



                    <div class="entry-content">

                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>

                    </div><!-- .entry-content -->



                    <footer class="entry-footer read-more">

                        <a href="#">read more<i class="fa fa-long-arrow-right"></i></a>

                    </footer><!-- .entry-footer -->

                </div><!-- .icon-box -->

            </div><!-- .row -->

        </div><!-- .container-fluid -->

    </div><!-- .icon-boxes -->



    <section class="featured-courses horizontal-column courses-wrap">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <header class="heading flex justify-content-between align-items-center">

                        <h2 class="entry-title">Featured Courses</h2>



                        <a class="btn mt-4 mt-sm-0" href="#">view all</a>

                    </header><!-- .heading -->

                </div><!-- .col -->



                <div class="col-12 col-lg-6">

                    <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/sic.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <div class="course-ratings flex align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    


                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->



                                <h2 class="entry-title"><a href="#">The Complete Software Security Course</a></h2>



                                <div class="entry-meta flex flex-wrap align-items-center">

                                    <div class="course-author"><a href="#">Mr. Yash Ghole </a></div>



                                    <div class="course-date">Sept 23, 2020</div>

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    10k <span class="price-drop">15k</span>

                                </div><!-- .course-cost -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 col-lg-6">

                    <div class="course-content flex flex-wrap justify-content-between align-content-lg-stretch">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/ai.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <div class="course-ratings flex align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    

                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->



                                <h2 class="entry-title"><a href="#">Learn Artificial Intelligent Course</a></h2>



                                <div class="entry-meta flex flex-wrap align-items-center">

                                    <div class="course-author"><a href="#">Mr. Yash Ghole</a></div>



                                    <div class="course-date">Sept 23, 2020</div>

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    10k <span class="price-drop">15k</span>

                                </div><!-- .course-cost -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->

            </div><!-- .row -->

        </div><!-- .container -->

    </section><!-- .courses-wrap -->



    <section class="about-section">

        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6 align-content-lg-stretch">

                    <header class="heading">

                        <h2 class="entry-title">About Yash</h2>



                        <p><b>MySelf Yash Ghole.I am 25 Years Old.I have Expert in All Programming Language Now I have Softwares,Websites & Applications.along with that i'm working as free launcer in developement</b></p>

                    </header><!-- .heading -->



                    <div class="entry-content ezuca-stats">

                        <div class="stats-wrap flex flex-wrap justify-content-lg-between">

                            <div class="stats-count">

                                50<span>M+</span>

                                <p>STUDENTS LEARNING</p>

                            </div><!-- .stats-count -->



                            <div class="stats-count">

                                30<span>K+</span>

                                <p>ACTIVE COURSES</p>

                            </div><!-- .stats-count -->



                            <div class="stats-count">

                                340<span>M+</span>

                                <p>INSTRUCTORS ONLINE</p>

                            </div><!-- .stats-count -->



                            <div class="stats-count">

                                20<span>+</span>

                                <p>Country Reached</p>

                            </div><!-- .stats-count -->

                        </div><!-- .stats-wrap -->

                    </div><!-- .ezuca-stats -->

                </div><!-- .col -->



                <div class="col-12 col-lg-6 flex align-content-center mt-5 mt-lg-0">

                    <div class="ezuca-video position-relative">

                        <div class="video-play-btn position-absolute">

                            <img src="images/video-icon.png" alt="Video Play">

                        </div><!-- .video-play-btn -->



                        <img src="images/krish.jpg" alt="">

                    </div><!-- .ezuca-video -->

                </div><!-- .col -->

            </div><!-- .row -->

        </div><!-- .container -->

    </section><!-- .about-section -->



    <section class="testimonial-section">

        <!-- Swiper -->

        <div class="swiper-container testimonial-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">

                                <figure class="user-avatar">

                                    <img src="images/krish2.jpg" alt="">

                                </figure><!-- .user-avatar -->

                            </div><!-- .col -->



                            <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">

                                <div class="entry-content">

                                    <p>As a Professor or Developer I can help make Successfull Your Life.</p>

                                </div><!-- .entry-content -->



                                <div class="entry-footer">

                                    <h3 class="testimonial-user">Yash Ghole - <span>University in Mumbai</span></h3>

                                </div><!-- .entry-footer -->

                            </div><!-- .col -->

                        </div><!-- .row -->

                    </div><!-- .container -->

                </div><!-- .swiper-slide -->



                <div class="swiper-slide">

                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">

                                <figure class="user-avatar">

                                    <img src="images/krish3.jpg" alt="">

                                </figure><!-- .user-avatar -->

                            </div><!-- .col -->



                            <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">

                                <div class="entry-content">

                                    <p>As a Professor or Developer I can help make Successfull Your Life.</p>

                                </div><!-- .entry-content -->



                                <div class="entry-footer">

                                    <h3 class="testimonial-user">Yash Ghole - <span>University in Mumbai</span></h3>

                                </div><!-- .entry-footer -->

                            </div><!-- .col -->

                        </div><!-- .row -->

                    </div><!-- .container -->

                </div><!-- .swiper-slide -->



                <div class="swiper-slide">

                    <div class="container">

                        <div class="row">

                            <div class="col-12 col-lg-6 flex order-2 order-lg-1 align-items-center mt-5 mt-lg-0">

                                <figure class="user-avatar">

                                    <img src="images/krish6.jpg" alt="">

                                </figure><!-- .user-avatar -->

                            </div><!-- .col -->



                            <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">

                                <div class="entry-content">

                                    <p>As a Professor or Developer I can help make Successfull Your Life.</p>

                                </div><!-- .entry-content -->



                                <div class="entry-footer">

                                    <h3 class="testimonial-user">Yash Ghole - <span>University in Mumbai</span></h3>

                                </div><!-- .entry-footer -->

                            </div><!-- .col -->

                        </div><!-- .row -->

                    </div><!-- .container -->

                </div><!-- .swiper-slide -->

            </div><!-- .swiper-wrapper -->



            <div class="container">

                <div class="row">

                    <div class="col-12 col-lg-6 mt-5 mt-lg-0">

                        <div class="swiper-pagination position-relative flex justify-content-center align-items-center"></div>

                    </div><!-- .col -->

                </div><!-- .row -->

            </div><!-- .container -->

        </div><!-- .testimonial-slider -->

    </section><!-- .testimonial-section -->



    <section class="featured-courses vertical-column courses-wrap">

        <div class="container">

            <div class="row mx-m-25">

                <div class="col-12 px-25">

                    <header class="heading flex flex-wrap justify-content-between align-items-center">

                        <h2 class="entry-title">Featured Courses</h2>



                        <nav class="courses-menu mt-3 mt-lg-0">

                            

                        </nav><!-- .courses-menu -->

                    </header><!-- .heading -->

                </div><!-- .col -->



                <div class="col-12 col-md-6 col-lg-4 px-25">

                    <div class="course-content">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/android.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <h2 class="entry-title"><a href="#" style="text-decoration:none;">The Complete Android Course</a></h2>



                                <div class="entry-meta flex align-items-center">

                                    <div class="course-author"><a href="#">Mr.Yash Ghole</a></div>



                                   

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    15k <span class="price-drop">20k</span>

                                </div><!-- .course-cost -->



                                <div class="course-ratings flex justify-content-end align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    



                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 col-md-6 col-lg-4 px-25">

                    <div class="course-content">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/java.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <h2 class="entry-title"><a href="#" style="text-decoration:none;">The Complete JAVA Course</a></h2>



                                <div class="entry-meta flex align-items-center">

                                    <div class="course-author"><a href="#">Mr.Yash Ghole</a></div>



                                    

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                               <div class="course-cost">

                                    12k <span class="price-drop">15k</span>

                                </div><!-- .course-cost -->



                                <div class="course-ratings flex justify-content-end align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    



                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 col-md-6 col-lg-4 px-25">

                    <div class="course-content">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/php.png" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <h2 class="entry-title"><a href="#" style="text-decoration:none;">The Complete PHP Course</a></h2>



                                <div class="entry-meta flex align-items-center">

                                    <div class="course-author"><a href="#">Mr.Yash Ghole</a></div>



                                   

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    10k <span class="price-drop">12k</span>

                                </div><!-- .course-cost -->



                                <div class="course-ratings flex justify-content-end align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    



                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 col-md-6 col-lg-4 px-25">

                    <div class="course-content">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/sic.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <h2 class="entry-title"><a href="#" style="text-decoration:none;">The Security in Computing Course</a></h2>



                                <div class="entry-meta flex align-items-center">

                                    <div class="course-author"><a href="#">Mr. Yash Ghole</a></div>



                                   

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    10k <span class="price-drop">15k</span>

                                </div><!-- .course-cost -->



                                <div class="course-ratings flex justify-content-end align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    



                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 col-md-6 col-lg-4 px-25">

                    <div class="course-content">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/iot.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <h2 class="entry-title"><a href="#" style="text-decoration:none;">The Internet Of Things Course</a></h2>



                                <div class="entry-meta flex align-items-center">

                                    <div class="course-author"><a href="#">Mr.Yash Ghole</a></div>



                                   

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    10k <span class="price-drop">15k</span>

                                </div><!-- .course-cost -->



                                <div class="course-ratings flex justify-content-end align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    



                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 col-md-6 col-lg-4 px-25">

                    <div class="course-content">

                        <figure class="course-thumbnail">

                            <a href="#"><img src="images/ai.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="course-content-wrap">

                            <header class="entry-header">

                                <h2 class="entry-title"><a href="#" style="text-decoration:none;">The Complete Artificial Intelligent Course</a></h2>



                                <div class="entry-meta flex align-items-center">

                                    <div class="course-author"><a href="#">Mr.Yash Ghole</a></div>



                                    

                                </div><!-- .course-date -->

                            </header><!-- .entry-header -->



                            <footer class="entry-footer flex justify-content-between align-items-center">

                                <div class="course-cost">

                                    10k <span class="price-drop">15k</span>

                                </div><!-- .course-cost -->



                                <div class="course-ratings flex justify-content-end align-items-center">

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                    <span class="fa fa-star checked"></span>

                                   



                                    <span class="course-ratings-count">(5 votes)</span>

                                </div><!-- .course-ratings -->

                            </footer><!-- .entry-footer -->

                        </div><!-- .course-content-wrap -->

                    </div><!-- .course-content -->

                </div><!-- .col -->



                <div class="col-12 px-25 flex justify-content-center">

                    <a class="btn" href="#">view all courses</a>

                </div><!-- .col -->

            </div><!-- .row -->

        </div><!-- .container -->

    </section><!-- .courses-wrap -->



    <section class="latest-news-events">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <header class="heading flex justify-content-between align-items-center">

                        <h2 class="entry-title">Latest News & Events</h2>

                    </header><!-- .heading -->

                </div><!-- .col -->



                <div class="col-12 col-lg-6">

                    <div class="featured-event-content">

                        <figure class="event-thumbnail position-relative m-0">

                            <a href="#"><img src="images/event-1.jpg" alt=""></a>



                            <div class="posted-date position-absolute">

                                <div class="day">23</div>

                                <div class="month">Sept</div>

                            </div><!-- .posted-date -->

                        </figure><!-- .event-thumbnail -->



                        <header class="entry-header flex flex-wrap align-items-center">

                            <h2 class="entry-title"><a href="#" style="text-decoration:none;color:black">The Complete App , Websites & Software Developement Course</a></h2>



                            <div class="event-location"><i class="fa fa-map-marker"></i>Super Smart Dev, Opposite classic hotel, Andheri</div>



                            <div class="event-duration"><i class="fa fa-calendar"></i>1 Jun - 30 Jun</div>

                        </header><!-- .entry-header -->

                    </div><!-- .featured-event-content -->

                </div><!-- .col -->



                <div class="col-12 col-lg-6 mt-5 mt-lg-0">

                    <div class="event-content flex flex-wrap justify-content-between align-content-stretch">

                        <figure class="event-thumbnail">

                            <a href="#"><img src="images/event-2.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="event-content-wrap">

                            <header class="entry-header">

                                <div class="posted-date">

                                    <i class="fa fa-calendar"></i> 25 Mar 2020

                                </div><!-- .posted-date -->



                                <h2 class="entry-title"><a href="#">Personalized Developement experience</a></h2>



                                <div class="entry-meta flex flex-wrap align-items-center">

                                    <div class="post-author"><a href="#">Mr. Yash Ghole  </a></div>



                                    <div class="post-comments">05 Comments  </div>

                                </div><!-- .entry-meta -->

                            </header><!-- .entry-header -->



                            <div class="entry-content">

                                <p>Personaly You Can Build up Very much Applications in Few Days.</p>

                            </div><!-- .entry-content -->

                        </div><!-- .event-content-wrap -->

                    </div><!-- .event-content -->



                    <div class="event-content flex flex-wrap justify-content-between align-content-lg-stretch">

                        <figure class="event-thumbnail">

                            <a href="#"><img src="images/event-3.jpg" alt=""></a>

                        </figure><!-- .course-thumbnail -->



                        <div class="event-content-wrap">

                            <header class="entry-header">

                                <div class="posted-date">

                                    <i class="fa fa-calendar"></i> 25 Mar 2020

                                </div><!-- .posted-date -->



                                <h2 class="entry-title"><a href="#">Which investment project should my company choose?</a></h2>



                                <div class="entry-meta flex flex-wrap align-items-center">

                                    <div class="post-author"><a href="#">Mr. Yash Ghole </a></div>



                                    <div class="post-comments">05 Comments  </div>

                                </div><!-- .entry-meta -->

                            </header><!-- .entry-header -->



                            <div class="entry-content">

                                <p>Your Whole Investment is Depend on What you Should Begin with Us.</p>

                            </div><!-- .entry-content -->

                        </div><!-- .event-content-wrap -->

                    </div><!-- .event-content -->

                </div><!-- .col -->

            </div><!-- .row -->

        </div><!-- .container -->

    </section><!-- .latest-news-events -->



    <section class="home-gallery">

        <div class="gallery-wrap flex flex-wrap">

            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/a.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/b.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid2x2">

                <a href="#"><img src="images/c.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/d.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/e.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid2x1">

                <a href="#"><img src="images/g.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid2x1">

                <a href="#"><img src="images/h.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/i.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid2x2 ">

                <a href="#"><img src="images/j.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/k.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/l.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid2x1">

                <a href="#"><img src="images/m.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid3x1">

                <a href="#"><img src="images/n.jpg" alt=""></a>

            </div><!-- .gallery-grid -->



            <div class="gallery-grid gallery-grid1x1">

                <a href="#"><img src="images/o.jpg" alt=""></a>

            </div><!-- .gallery-grid -->

        </div><!-- .gallery-wrap -->

    </section><!-- .home-gallery -->



    <div class="clients-logo">

        <div class="container">

            <div class="row">

                <div class="col-12 flex flex-wrap justify-content-center justify-content-lg-between align-items-center">

                    <div class="logo-wrap">

                        <img src="images/logo-1.png" alt="">

                    </div><!-- .logo-wrap -->



                    <div class="logo-wrap">

                        <img src="images/logo-2.png" alt="">

                    </div><!-- .logo-wrap -->



                    <div class="logo-wrap">

                        <img src="images/logo-3.png" alt="">

                    </div><!-- .logo-wrap -->



                    <div class="logo-wrap">

                        <img src="images/logo-4.png" alt="">

                    </div><!-- .logo-wrap -->



                    <div class="logo-wrap">

                        <img src="images/logo-5.png" alt="">

                    </div><!-- .logo-wrap -->

                </div><!-- .col -->

            </div><!-- .row -->

        </div><!-- .container -->

    </div><!-- .clients-logo -->



    <footer class="site-footer">

        <div class="footer-widgets">

            <div class="container">

                <div class="row">

                    

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">

                        <div class="foot-contact">

                            <h2>Contact Us</h2>



                            <ul>

                                <li>Email: yashghole12@gmail.com</li>

                                <li>Phone: 7350059415</li>

                                <li>Address: A-Wing 105 Sankruti Apt. Old Post Office Ganpati Mandir, Virar East</li>

								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 

                            

							  

  <div class="modal fade" id="myModal5">

    <div class="modal-dialog">

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

         

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">

        

				<div class="container">



<div class="form-group">

      <h3 style="text-align:center;font-family:algerian;color:violet">Student Sign Up</h3>

      

    </div>

<hr>

<div class="card">

			<div class="card card-body">

	<div class="container">

  <form  method="post" action="student_register_login.php">

  

  <div class="form-group">

      

    </div>

  

    <div class="form-group">

      <label for="email">Enter Full Name:</label>

      <input type="text" class="form-control" id="Sname" placeholder="Enter Full Name" name="uname" required>

    </div>

	

	<div class="form-group">

      <label for="email">Username:</label>

      <input type="text" class="form-control" id="Sname" placeholder="Enter Username" name="user" required>

    </div>

	

	<div class="form-group">

      <label for="email">Password:</label>

      <input type="password" class="form-control" id="Sname" placeholder="Enter Password" name="pass" required>

    </div>

	

	

    <input type="submit" value="Sign Up" class="btn btn-secondary">

   

  </form>

  </div>

</div>

		 

        </div>

        

        <!-- Modal footer -->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>

        

      </div>

    </div>

  </div>



							

							

							</ul>

                        </div><!-- .foot-contact -->

                    </div><!-- .col -->



                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">

                        <div class="quick-links flex flex-wrap">

                            <h2 class="w-100">Quick Links</h2>



                            <ul class="w-50">

                                <li><a href="#">About </a></li>

                                <li><a href="#">Terms of Use </a></li>

                                <li><a href="#">Privacy Policy </a></li>

                                <li><a href="#">Contact Us</a></li>

                            </ul>



                            <ul class="w-50">

                                <li><a href="#">Documentation</a></li>

                                <li><a href="#">Forums</a></li>

                                <li><a href="#">Language Packs</a></li>

                                <li><a href="#">Release Status</a></li>

                            </ul>

                        </div><!-- .quick-links -->

                    </div><!-- .col -->



                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">

                        <div class="follow-us">

                            <h2>Follow Us</h2>



                            <ul class="follow-us flex flex-wrap align-items-center">

                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>

                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>

                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>

                            </ul>

                        </div><!-- .quick-links -->

                    </div><!-- .col -->

                </div><!-- .row -->

            </div><!-- .container -->

        </div><!-- .footer-widgets -->



        <div class="footer-bar">

            <div class="container">

                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-center">

                    <div class="col-12 col-lg-6">

                        <div class="download-apps flex flex-wrap justify-content-center justify-content-lg-start align-items-center">

                            <a href="#"><img src="images/app-store.png" alt=""></a>

                            <a href="#"><img src="images/play-store.png" alt=""></a>

                        </div><!-- .download-apps -->



                    </div>



                    <div class="col-12 col-lg-6 mt-4 mt-lg-0">

                        <div class="footer-bar-nav">

                            <ul class="flex flex-wrap justify-content-center justify-content-lg-end align-items-center">

                                <li><a href="#">DPA</a></li>

                                <li><a href="#">Terms of Use</a></li>

                                <li><a href="#">Privacy Policy</a></li>

                            </ul>

                        </div><!-- .footer-bar-nav -->

                    </div><!-- .col-12 -->

                </div><!-- .row -->

            </div><!-- .container -->

        </div><!-- .footer-bar -->

    </footer><!-- .site-footer -->



<script type='text/javascript' src='js/jquery.js'></script>

<script type='text/javascript' src='js/swiper.min.js'></script>

<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>

<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>

<script type='text/javascript' src='js/custom.js'></script>









<div class="modal fade" id="myModal2">

    <div class="modal-dialog">

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

         

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">

        

				<div class="container">



<div class="form-group">

      <h3 style="text-align:center;font-family:algerian;color:violet">Student Progress Login</h3>

      

    </div>

<hr>

<div class="card">

			<div class="card card-body">

	<div class="container">

  <form  method="post" action="student_log.php">

  

  <div class="form-group">

      

    </div>

  

    <div class="form-group">

      <label for="email">Username:</label>

      <input type="text" class="form-control" id="Sname" placeholder="Enter Username" name="user" required>

    </div>

	

	<div class="form-group">

      <label for="email">Password:</label>

      <input type="password" class="form-control" id="Sname" placeholder="Enter Password" name="pass" required>

    </div>

	

	<div class="form-group">

      <label for="email">User Type:</label>

      <select class="form-control" name="utype" id="utype" required>

		

		<option Value="Admin">Admin</option>

		<option Value="User">User</option>

	</select>

    </div>

    

    <input type="submit" value="Login" class="btn btn-secondary">

   

  </form>

  </div>

</div>

		 

        </div>

        

        <!-- Modal footer -->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>

        

      </div>

    </div>

  </div>

  

</div>

  

</div>









<div class="modal fade" id="myModal3">

    <div class="modal-dialog">

      <div class="modal-content">

      

        <!-- Modal Header -->

        <div class="modal-header">

         

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        

        <!-- Modal body -->

        <div class="modal-body">

        

				<div class="container">



<div class="form-group">

      <h3 style="text-align:center;font-family:algerian;color:violet">Private Login</h3>

      

    </div>

<hr>

<div class="card">

			<div class="card card-body">

	<div class="container">

  <form  method="post" action="frameset.php">

  

  <div class="form-group">

      

    </div>

  

    <div class="form-group">

      <label for="email">Username:</label>

      <input type="text" class="form-control" id="Sname" placeholder="Enter Username" name="user" required>

    </div>

	

	<div class="form-group">

      <label for="email">Password:</label>

      <input type="password" class="form-control" id="Sname" placeholder="Enter Password" name="pass" required>

    </div>

    

    <input type="submit" value="Login" class="btn btn-primary">

   

  </form>

  </div>

</div>

		 

        </div>

        

        <!-- Modal footer -->

        <div class="modal-footer">

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>

        

      </div>

    </div>

  </div>

  

</div>

  

      </div>









<div class="modal fade" id="myModal4">



    <div class="modal-dialog">



      <div class="modal-content">



        <!-- Modal Header -->





        <!-- Modal body -->



        <div class="modal-body">



				

			<div class="container">



<hr>

<div class="card">

			<div class="card card-body">

	<div class="container">

  <form  method="post" action="reg_record.php">

  

  <div class="form-group">

      <h3 style="text-align:center;font-family:algerian;color:violet">Student Attendence</h3>

      <hr><a href="topic_list.html"><input type="button" value="Check All Courses"  style="font-size:15px;position:absolute;right:55%;top:104%;border-radius:10px;background:green;color:white;border:3px solid yellow;font-family:algerian;padding:7px;text-decoration:none"></a>

    </div>

  

    <div class="form-group">

      <label for="email">Enter Name:</label>

      <input type="text" class="form-control" id="Sname" placeholder="Enter Full Name" name="Sname" required>

    </div>

    <div class="form-group">

      <label for="pwd">Select Course:</label>

      <select class="form-control" placeholder="Select Course" name="Cname" id="Cname" onchange="populate(this.id,'Tname')" required>

		<option Value=""></option>

		<option Value="C Prog">C Prog</option>

		<option Value="C++ Prog">C++ Prog</option>

		<option Value="Core Java">Core Java</option>

		<option Value="Adv Java">Adv Java</option>

		<option Value="C#">C#</option>

		<option Value="ASP.NET">ASP.NET</option>

		<option Value="VB.NET">VB.NET</option>

		<option Value="VBA">VBA</option>

		<option Value="Python">Python</option>

		<option Value="Android">Android</option>

		<option Value="Web Design">Web Design</option>

		<option Value="SQL Server">SQL Server</option>

		<option Value="JavaScript">JavaScript</option>

		<option Value="PHP">PHP</option>

		<option Value="Computer Science XI">Computer Science XI</option>

		<option Value="Computer Science XII">Computer Science XII</option>

		<option Value="Wordpress">Wordpress</option>

	  </select>

    </div>

	

	<div class="form-group">

      <label for="pwd">Topic Name:</label>

      <select class="form-control" name="Tname" id="Tname" required></select>

    </div>

	

	<div class="form-group">

      <label for="email">Branch Location</label>

      <select class="form-control" name="Tdate" id="Tdate" onchange="pop(this.id,'Prog')" required>

		<option></option>

		<option Value="Andheri">Andheri</option>

		<option Value="Vile Parle[CL]">Vile Parle[CL]</option>

		<option Value="Vile Parle[AO]">Vile Parle[AO]</option>
		
		<option Value="Vile Parle[AO]">Jogeshwari</option>

		</select>

    </div>

    

	

	

    <input type="submit" value="Save" class="btn btn-secondary">&emsp;&emsp;&emsp;

	

  </form>

  </div>

</div>

     <div class="modal-footer">

          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

        </div>   



      </div>



    </div>



  </div>




</body>

</html>

