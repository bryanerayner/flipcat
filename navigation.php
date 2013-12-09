<?php		
		if($_GET["page"]=="about" || $_GET["page"]=="what-we-do" || $_GET["page"]=="the-team" || $_GET["page"]=="jobs"){
			$aboutus = "pageOn";
			$portfolio = "pageOff";
			$services = "pageOff";
			$clients = "pageOff";
			$blog = "pageOff";
			$contact = "pageOff";
		}elseif($_GET["page"]=="services" || $_GET["page"]=="video" || $_GET["page"]=="web-design" || $_GET["page"]=="visual-identity"){
			$aboutus = "pageOff";
			$portfolio = "pageOff";
			$services = "pageOn";
			$clients = "pageOff";
			$blog = "pageOff";
			$contact = "pageOff";
		}elseif($_GET["page"]=="portfolio"){
			$aboutus = "pageOff";
			$portfolio = "pageOn";
			$services = "pageOff";
			$clients = "pageOff";
			$blog = "pageOff";
			$contact = "pageOff";
		}elseif($_GET["page"]=="clients"){
			$aboutus = "pageOff";
			$portfolio = "pageOff";
			$services = "pageOff";
			$clients = "pageOn";
			$blog = "pageOff";
			$contact = "pageOff";
		}elseif($_GET["page"]=="blog"){
			$aboutus = "pageOff";
			$portfolio = "pageOff";
			$services = "pageOff";
			$clients = "pageOff";
			$blog = "pageOn";
			$contact = "pageOff";
		}elseif($_GET["page"]=="contact"){
			$aboutus = "pageOff";
			$portfolio = "pageOff";
			$services = "pageOff";
			$clients = "pageOff";
			$blog = "pageOff";
			$contact = "pageOn";
		}else{
			$aboutus = "pageOff";
			$portfolio = "pageOff";
			$services = "pageOff";
			$clients = "pageOff";
			$blog = "pageOff";
			$contact = "pageOff";
		}
		echo '<div id="navigation">
        	<div id="navLevel1">
            	<a href="?page=about"><span class="'.$aboutus.'">About us</span></a>
                <a href="?page=portfolio"><span class="'.$portfolio.'">Portfolio</span></a>
                <a href="?page=services"><span class="'.$services.'">Services</span></a>
                <a href="?page=clients"><span class="'.$clients.'">Clients</span></a>
                <a href="?page=blog"><span class="'.$blog.'">Blog</span></a>
                <a href="?page=contact"><span class="'.$contact.'">Contact</span></a>
            </div>
            <div id="navLevel2">';
            
			if($_GET["page"]=="about" || $_GET["page"]=="what-we-do" || $_GET["page"]=="the-team" || $_GET["page"]=="jobs"){
				if($_GET["page"]=="about" || $_GET["page"]=="what-we-do"){
					$whatwedo = "subPageOn";
					$theteam = "subPageOff";
					$jobs = "subPageOff";
				}elseif($_GET["page"]=="the-team"){
					$whatwedo = "subPageOff";
					$theteam = "subPageOn";
					$jobs = "subPageOff";
				}elseif($_GET["page"]=="jobs"){
					$whatwedo = "subPageOff";
					$theteam = "subPageOff";
					$jobs = "subPageOn";
				}
				echo '<a href="?page=what-we-do"><span class="'.$whatwedo.'">What we do</span></a>
                <a href="?page=the-team"><span class="'.$theteam.'">The team</span></a>
                <a href="?page=jobs"><span class="'.$jobs.'">Jobs</span></a>';
			}elseif($_GET["page"]=="portfolio"){
				echo '<a href="?page=what-we-do"><span class="subPageOn">Completed Projects</span></a>';
			}elseif($_GET["page"]=="services" || $_GET["page"]=="video" || $_GET["page"]=="web-design" || $_GET["page"]=="visual-identity"){
				if($_GET["page"]=="services" || $_GET["page"]=="video"){
					$video = "subPageOn";
					$webdesign = "subPageOff";
					$visualidentity = "subPageOff";
				}elseif($_GET["page"]=="web-design"){
					$video = "subPageOff";
					$webdesign = "subPageOn";
					$visualidentity = "subPageOff";
				}elseif($_GET["page"]=="visual-identity"){
					$video = "subPageOff";
					$webdesign = "subPageOff";
					$visualidentity = "subPageOn";
				}
				echo '<a href="?page=video"><span class="'.$video.'">Video</span></a>
                <a href="?page=web-design"><span class="'.$webdesign.'">Web Design</span></a>
                <a href="?page=visual-identity"><span class="'.$visualidentity.'">Visual Identity</span></a>';
			}elseif($_GET["page"]=="clients"){
				echo '<a href="?page=clients"><span class="subPageOn">Our Clients</span></a>';
			}elseif($_GET["page"]=="blog"){
				echo '';
			}elseif($_GET["page"]=="contact"){
				echo '';
			} 
			
            echo '</div>
        </div>';
		
?>