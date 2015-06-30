
<form action="logout.php" method="post">
	<input type="submit" name="logout" value="logout">
</form>
<form action="get_posted_review.php" method="Post">
		<?php
			$loc_attributes = array("Neighborhood:","Roads:", "Safety:", "Cleanliness:", "Public:", "Parking:",
			 "Connectivity:", "Traffic:", "Schools:", "Restaurants:", "Hospital:", "Market:", "Net:", "Review:");
			foreach($loc_attributes as $loc)
			{
				echo "<h2>{$loc}</h2>";
				?>
				<select value = <?php echo $loc; ?> name=<?php echo $loc; ?>>		
				<?php
				for($i = 1 ; $i <= 10 ; $i++)
				{
					?>
						<option value=<?php echo $i; ?>><?php echo $i; ?></option>					
					<?php
				}
				?>
			</select>
			<br>
			<?php
			}?>
		
		 <br>
		 <!--echo "<h2>Comment:</h2>";-->
		 <textarea  name="Review:"></textarea>
		 <br>
		 <input type="submit" name="Post" value="Post Review">

		</form>
<!--
		Neighborhood: <select value="Neighborhood:" name="Neighborhood:">

			  <option value=1>1</option>
			  <option value=2>2</option>
			  <option value=3>3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		Roads: <select value="Roads:" name="Roads:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		Safety: <select value="Safety:" name="Safety:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		 Cleanliness:<select value="Cleanliness:" name="Cleanliness:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		 Public Transport:<select value="Public Transport:" name="Public Transport:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		Parking: <select value="Parking:" name="Parking:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		 Connectivity:<select value="Connectivity:" name="Connectivity:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		Traffic: <select value="Traffic:" name="Traffic:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		 chools:<select value="Schools:" name="Schools:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
         <br>
		 Restaurants:<select value="Restaurants:" name="Restaurants:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
         <br>
		Hospital: <select value="Hospital:" name="Hospital:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>
		 <br>
		Market: <select value="Market:" name="Market:">

			  <option value="v1">1</option>
			  <option value="v2">2</option>
			  <option value="v3">3</option>
			  <option value="v4">4</option>
			  <option value="v5">5</option>
			  <option value="v6">6</option>
			  <option value="v7">7</option>
			  <option value="v8">8</option>
			  <option value="v9">9</option>
			  <option value="v10">10</option>

		 </select>

	-->

