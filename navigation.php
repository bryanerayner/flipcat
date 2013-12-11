<?php		
	$navigation = array(
		"About Us" => array(
			"About Us" => "what-we-do",
			"What we do" => "what-we-do",
			"The team" => "the-team",
			"Jobs" => "jobs"),
		"Portfolio" => array(
			"Portfolio" => "portfolio",
			"Completed Projects" => "portfolio"
			),
		"Services" => array(
			"Services" => "services",
			"Video"=>"video",
			"Web Design"=>"web-design",
			"Visual Identity"=>"visual-identity"),
		"Clients"=>array(
			"Clients"=>"clients"
			),
		"Blog"=>"blog",
		"Contact"=>"contact"
		);

$navPage = "";

if (isset($_GET["page"]))
{
	$navPage = $_GET["page"];
}



function navClass($page, $topLevel)
{
	global $navPage;


	if (isset($topLevel) && is_array($topLevel))
	{
		foreach ($topLevel as $nav_title => $path) {
			if ($topLevel[$nav_title] == $navPage)
			{
				return "selected";
			}			
		}
	}

	if ($navPage == $page)
	{
		return "selected";
	}else
	{
		return "";
	}

}


?>

<nav id="navigation" role="navigation">
	<ul>	

<?php



	foreach ($navigation as $nav_title => $path) {

		if (is_array($navigation[$nav_title]))
		{
			$origTitle = $nav_title;
			foreach ($navigation[$nav_title] as $sub_title => $sub_path)
			{
				if ($origTitle == $sub_title)
				{
					?>
					<li class = "<?php echo navClass($sub_path, $navigation[$nav_title]);?>" ><a  href="?page=<?php echo $sub_path ?>"><?php echo $sub_title?></a>
					<?php
				}
			}
			?>
			<ul class ="tk-museo-sans">
			<?php
			foreach ($navigation[$nav_title] as $sub_title => $sub_path)
			{
				if ($origTitle != $sub_title)
				{
					?>
					<li class = "<?php echo navClass($sub_path);?>"><a  href="?page=<?php echo $sub_path ?>"><?php echo $sub_title?></a></li>
					<?php
				}
			}
			?>
			</ul>
			<?php
		}
		else
		{
			?>
			<li class = "<?php echo navClass($nav_title);?>"><a href="?page=<?php echo $path ?>"><?php echo $nav_title?></a></li>
			<?php
		}
	}
	?>
	</ul>
</nav>