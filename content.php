<?php
	if($_GET["page"]=="about" || $_GET["page"]=="what-we-do"){
		echo '<div class="cols2">
            	<div class="colHeader col1">What We Do</div>
                <div class="colBody">We are a media studio based in downtown Ottawa that specializes in creating 

beautiful pieces of work. We work closely with our clients to deliver work that is both 

Our unique approach, and creative ideas set us apart from the crowd. We believe in the 

combination of art and science.</div>
                <div class="colFooter">&nbsp;</div>
          </div>';
		  sideBar();
	}elseif($_GET["page"]=="the-team"){
		echo '<div class="cols2">
            	<div class="colHeader col1">The Team</div>
                <div class="colBody">Here is our amazing team! Click on each staff member to learn more about what they do!
				<div id="members">
<div id="member1" class="member"></div><div id="member2" class="member"></div><div id="member3" class="member"></div>
<div id="member4" class="member"></div><div id="member5" class="member"></div><div id="member6" class="member"></div>
<div id="member7" class="member"></div><div id="member8" class="member"></div><div id="member9" class="member"></div>
</div>

				</div>
                <div class="colFooter">&nbsp;</div>
          </div><div class="cols3">
            	<div class="colHeader col3">About us</div>
                <div class="colBody">
					<div id="teamDescription">
					
					</div>
			
				</div>
          </div>';
	}elseif($_GET["page"]=="jobs"){
		echo '<div class="cols2">
            	<div class="colHeader col1">Jobs at FlipCat</div>
                <div class="colBody">Want to join our growing team? We are always looking for motivated individuals who have a passion for multimedia. Send us your resume and we will get back to you as 
soon as possible.
<br />
<h1 class="jobTitle">Current job postings</h1>

<b>Receptionist</b><br />
We are looking for a full time receptionist with at least 2 years experience in customer service. The applicants must have excellent organization skills. The receptionist will be 
required to answer the phones, meet and greet clients, manage office supplies, and organize meetings with clients.<br /><br />
Email in your resume to staffcoordinator@gmail.com<br /><br />
<b>Web Developer</b><br />
We are looking for a full time web developer with at least 2 years experience in web developer. The applicants must have excellent skills in design and code. The web 
developer will have to be able to use:
<ul class="jobs">
<li>HTML</li>
<li>CSS</li>
<li>PHP</li>
<li>JavaScript</li>
</ul>
Excellent design skills are required, as well as coding experience. A portfolio is required to be sent for the job consideration.<br /><br />
Email in your resume to staffcoordinator@gmail.com<br /><br />
<b>Motion Graphics</b><br />
We are looking for a full time motion graphics expert with at least 3 years experience in the field. The applicants must have excellent skills in after affects, and an awesome 
portfolio. Team work skills are required, and diverse video motion graphics experience. A portfolio of previous work is required.<br /><br />
Email in your resume to staffcoordinator@gmail.com</div>
                <div class="colFooter">&nbsp;</div>
          </div>';
		  sideBar();
	}elseif($_GET["page"]=="portfolio"){
		echo '<div class="cols2">
				<div class="colHeader col1">Our Portfolio</div>
				<div class="colBody"><p>Listed below are some of our most recent clients. Click to view what work we completed for them.</p>
<h1 class="jobTitle">Lil Grasshopers</h1>
<b>Work provided:</b><br />
<ul class="jobs">
<li>Logo</li>
<li>Web site</li>
</ul>
<b>Description:</b>
<p>Lil Grasshoppers is a kung-Fu studio focused on teaching children aged 3-12 the art of self-<br />
  defense in a fun, cool way. We incorporated their philosophy into their website and logo.</p>
<p>We gave them a fun logo, to reflect their fun personality.</p>
<p>We incorporated their personality into the typography and logo. The website is easily </p>
<p>readable, and provides an easy user-experience.</p>
<h1 class="jobTitle">Ninja PR</h1>
<b>Work provided:</b><br />
<ul class="jobs">
<li>Website</li>
</ul>
<p>Ninja games is a Toronto based PR Company. They are a bold company, needing a </p>
<p>website to match. We used bright red to signify their bold style. We provided a great way for </p>
<p>Ninja PR to promote themselves through social media integration and more. </p>
<p>We created a professional website with an edgy flair.</p>
<h1 class="jobTitle">Anita\'s Argentinian Grill</h1>
<b>Work provided: </b><br />
<li>Brand identity</p>
<ul class="jobs">
<li>Web site</li>
</ul>
<p>Anita\'s Argentinian Grill was founded by Anita and Carlos Munoz. They believe in quality </p>
<p>food for great prices. With a new location in downtown Ottawa, they needed a website </p>
<p>that is a place for loyal customers to check in for the latest news, make reservations, and </p>
<p>continue to embrace Latin American culture. They want their website and restaurant to bring </p>
<p>a little piece of Buenos Aires to Canadians. We created a memorable logo that is highly </p>
<p>recognizable in the busy streets of downtown. </p>
<h1 class="jobTitle">GreenBob Construction</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>Video</li>
</ul>
<p>Bob is a builder is a new completely environmentally friendly construction company based </p>
<p>in London, Ontario. They asked our team to create a video to be placed on their website </p>
<p>describing who they are and what they do. We took our team, and spent three weeks </p>
<p>shooting organic, raw footage of GreenBob Construction in action to create the best </p>
<p>possible video, with the coolest footage possible.</p>
<h1 class="jobTitle">Exploration Canada</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>Website</li>
</ul>
<p>Exploration Canada is a company based in downtown Ottawa, they believe in the beauty of </p>
<p>our vast country. They take small tours on tours to around Canada to explore in once in a </p>
<p>life-time time places in cool ways like helicopter rides, zip-lining, rock climbing and more. </p>
<p>They employ highly trained employees to take the groups </p>
<h1 class="jobTitle">Dolmans Art and Pottery</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>Website</li>
<li>Web design</li>
</ul>
<p>Dolmans Art and pottery is an after-school program for kids with disabilities. This not for </p>
<p>profit organization wanted a website that could provide </p>
<p>Our team members immersed themselves into this project, to create a bright and happy </p>
<p>virtual space where art and pottery could be appreciated by the younger generation. </p>
<h1 class="jobTitle">Camp Oshenaga</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>Video</li>
<li>Shot and edited</li>
</ul>
<p>Camp Oshenaga is one of the longest-standing sleepover camps in the world. They are an </p>
<p>all-girl camp run by a family very involved in the community. They believe in camp, and the </p>
<p>independence it gives it\'s young campers. They needed a video to promote the camp even </p>
<p>more with a presence on YouTube, camp conventions, their website and more. A website, </p>
<p>as discovered by the director of Oshenaga is not enough to convince young campers that </p>
<p>this camp is for them, they need a video to explore the fun world that is Camp Oshenaga.</p>
<p>Our company sent a team, and shot footage for about 5 days. Fast-forward to a few months </p>
<p>later, we produced a stunning video that makes anyone want to be part of the camp </p>
<p>experience at Camp Oshenaga.</p>
<h1 class="jobTitle">Head Phones and Gadgets</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>Video</li>
</ul>
<p>Head Phones and gadgets is an online store started up by 2 University of Ottawa students. </p>
<p>They found that head phones and gadgets are all part of university daily life. They are </p>
<p>always on the cutting edge of technology, and always have the latest gadgets and styles of </p>
<p>headphones. We flipped their modern business style, into a modern website keeping their </p>
<p>vision for their company alive. </p>
<h1 class="jobTitle">Ashley\'s Candles and tea</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>Video</li>
<li>Web design</li>
</ul>
<p>Ashley\'s candles and tea is a very clean-cut company that needed website to reflect that. </p>
<p>We create a very easy to use shopping website that is almost too easy to use, and browse </p>
<p>through.</p>
<h1 class="jobTitle">Education House</h1>
<b>Work provided: </b><br />
<ul class="jobs">
<li>UX</li>
<li>Website Design</li>
</ul>
<p>Education house contacted us, needing our help to set up their website. They are an online </p>
<p>education center that hold large amounts of information. They specialize in tutorials, and </p>
<p>resources for high school students in over 10 subjects. We created a way of organizing </p>
<p>the website information in a way that creates searching for material, a quick and easy</p>
<p>experience. We also provided a web design that reflects their classic style and young </p>
<p>audience.</p></div>
				<div class="colFooter">&nbsp;</div>
			 </div>';
		  sideBar();
			 
	}elseif($_GET["page"]=="services" || $_GET["page"]=="video" || $_GET["page"]=="web-design" || $_GET["page"]=="visual-identity"){
			echo '<div class="cols2">
				<div class="colHeader col1">Services We Offer</div>
				<div class="colBody">We follow the latest trends in all aspects of media. We involve our clients from start to 
finish through the entire project. Here are the services we provide: 
<h1 class="jobTitle">Print design</h1>
We produce beautiful, and contemporary art direction through our print design. 
We are always on the hunt for the latest print design trends, and offer those to 
our clients. We involve our clients from start to finish, to ensure great results with the desired elements.
<h1 class="jobTitle">Web design and development</h1>
We build and design websites from start to finish with a modern approach. We create clean code to give your website the best performance possible. From 
layout to the final content, we are dedicated to contemporary websites that match your needs.
<h1 class="jobTitle">Brand Identity</h1>
Our team can create an identity for any brand, with stunning visuals to match. 
We can create the visuals for your company\'s every need from logo to letterhead. 
Our team will ensure that your company\'s brand message is displayed consistently through each visual piece.
<h1 class="jobTitle">Video production</h1>
Our company can produce small-scale productions. We carry our own top of the line equipment that will deliver state-of-the art results. Our animation knowledge 
can add to any video production and create beautiful results.
<h1 class="jobTitle">Motion Graphics</h1>
We offer motion graphics services, from lyric videos to advertisements.Our design and visual direction, and collaborative process allows motion 
graphics projects to be just what our clients need to bring their concepts to the next level.</div>
				<div class="colFooter">&nbsp;</div>
			 </div>';
		  sideBar();
	}elseif($_GET["page"]=="contact"){
		echo '<div class="cols2">
				<div class="colHeader col1">Contact FlipCat</div>
				<div class="colBody">
				<br /><br />';
		
		if(isset($_POST["submit"])){
			echo "<h1 class='jobTitle'>Your message has been sent. We will get back to you shortly!</h1>";
		}else{
			echo '<form method="POST" action="?page=contact">
				<b>Your Name</b><br />
				<input type="text" class="form" name="name" required>
				<br /><br />
				<b>Email</b><br />
				<input type="text" class="form" name="email" required>
				<br /><br />
				<b>Message</b><br />
				<textarea name="message" class="form" cols="30" rows="10"></textarea>
				<br /><br />
				<input type="submit" name="submit">
				</form>';
		}
		
		echo '<br /><br />
				Give us a call, or send us an email and we will get back to you as soon as possible! Follow us through social media to hear about the latest news!<br /><br />
				<b>Inquiries:</b><br /><br />info@flipcat.com<br />145 Albert St.<br />K2J 9G0<br />Ottawa, ON
				</div>
				<div class="colFooter">&nbsp;</div>
			 </div>
			 <div class="cols3">
            	<div class="colHeader col3">Recent Work</div>
                <div class="colBody">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                <div class="colFooter"><span class="readMoreOrange">Read More</span></div>
          </div>';
	}else{
		echo '<div class="cols">
            	<div class="colHeader col1">Recent Blog Article</div>
                <div class="colBody">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                <div class="colFooter"><span class="readMoreBlue">Read More</span></div>
          </div>
          <div class="cols">
            	<div class="colHeader col2">Recent Work</div>
                <div class="colBody">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                <div class="colFooter"><span class="readMoreOrange">Read More</span></div>
          </div>';
		  sideBar();
	}
	
	function sideBar(){
		echo '<div class="cols3">
            	<div class="colHeader col3">Recent Work</div>
                <div class="colBody" style="text-align: center;">
					<img src="images/sidebar/stuntman.jpg" border="0" alt="STUNT MAN" class="responsiveImage"/><br /><br />
					<img src="images/sidebar/flowers.jpg" border="0" alt="Flower Artists"  class="responsiveImage"/><br /><br />
					<img src="images/sidebar/dog.jpg" border="0" alt="Dog Show"  class="responsiveImage"/><br /><br />
					<img src="images/sidebar/depression.jpg" border="0" alt="Depression Exposed"  class="responsiveImage"/><br /><br />
			
				</div>
          </div>';
	}
?>