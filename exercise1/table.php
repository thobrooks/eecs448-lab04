    <?php
      echo "<table><tr><th> </th>";
      for($i = 1; $i <=100; $i++){
			    echo "<th>$i</th>";
			    }
      echo "</tr>";
      for ($i = 1; $i <= 100; $i++) {
			 echo "<tr><th>$i</th>";
			 for ($j = 1; $j <=100; $j++){
						echo "<th>". $i * $j. "</th>";
						}
						echo "</tr>";
					}
			 echo "</table>";
						
   ?>
