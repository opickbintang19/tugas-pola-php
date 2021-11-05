<h1>Konversi Kode C++ ke PHP</h1>
  <form method="post">
    <select name="jenis">
      <option value="pola_3_bintang" selected>1. Membuat Pola 3 Bintang</option>
      <option value="segitiga_siku">2. Membuat Pola Segitiga Siku-siku</option>
      <option value="segitiga_sisi">3. Membuat Pola Segitiga Sama Sisi</option>
      <option value="piramida_1">4. Mencetak Angka Piramida(1)</option>
      <option value="angka_berlian">5. Mencetak Angka Berlian</option>
      <option value="pola_piramida">6. Mencetak Pola Angka Piramida</option>
      <option value="piramida_vert">7. Mencetak Piramida Nomor Vertikal</option>
      <option value="piramida_2">8. Mencetak Angka Piramida(2)</option>
      <option value="segitiga_1">9. Mencetak Angka pada Segitiga(1)</option>
      <option value="segitiga_2">10. Mencetak Angka pada Segitiga(2)</option>

      <option value="piramida_kiri">11. Mencetak Piramida Bintang ke Samping Kiri</option>
      <option value="piramida_berongga">12. Mencetak Piramida Bintang Berongga</option>
      <option value="piramida_berongga_terbalik">13. Mencetak Piramida Bintang Berongga Terbalik</option>
      <option value="piramida_berongga_berlian">14. Mencetak Piramida Bintang Berongga Pola Berlian</option>
      <option value="persegi_diamond_berongga">15. Mencetak Persegi dan Diamond Berongga</option>
      <option value="kupukupu">16. Mencetak Kupu-kupu</option>
      <option value="diagonal_kotak">17. Mencetak Diagonal dan Sisi Kotak Diagonal dan Sisi Kotak</option>
      <option value="diagonal_belah">18. Mencetak Diagonal an Sisi Belah Ketupat / Berlian</option>
      <option value="anak_panah">19. Mencetak Anak Panah</option>
      <option value="belah_ketupat">20. Mencetak Belah Ketupat</option>

      <option value="segitiga_bersebelahan">21. Mencetak Segitiga Bersebelahan</option>
      <option value="segitiga_fibo">22. Mencetak Segitiga Fibonacci</option>
      <option value="setengah_bintang">23. Mencetak Setengah Bintang</option>
      <option value="setengah_bintang_terbalik">24. Mencetak Setengah Bintang Terbalik</option>
      <option value="piramida_bintang_1">25. Mencetak Piramida Bintang Pola Ganjil</option>
      <option value="piramida_terbalik_1">26. Mencetak Piramida Terbalik Pola Ganjil</option>
      <option value="piramida_terbalik_2">27. Mencetak Piramida Terbalik</option>
      <option value="piramida_bintang_2">28. Mencetak Piramida Bintang</option>
      <option value="bintang_berlian">29. Mencetak Bintang Berlian</option>
      <option value="bintang_kanan">30. Mencetak Bintang Kanan</option>

    </select>
    <input type="number" name="input" placeholder="Masukkan angka...">
    <button type="sumbit" name="hitung">Hitung</button>
  </form>

  <?php

    error_reporting(E_ERROR | E_PARSE);

    if (isset($_POST['hitung'])) {
          $input = $_POST['input'];
          $jenis = $_POST['jenis'];
        }

        if ($jenis === "pola_3_bintang") {
          pola_3_bintang($input);
        }
        else if ($jenis === "segitiga_siku"){
          segitiga_siku($input);
        }
        else if ($jenis === "segitiga_sisi"){
          segitiga_sisi($input);
        }
        else if ($jenis === "piramida_1"){
          piramida_1($input);
        }
        else if ($jenis === "angka_berlian"){
          angka_berlian($input);
        }
        else if ($jenis === "pola_piramida"){
          pola_piramida($input);
        }
        else if ($jenis === "piramida_vert"){
          piramida_vert($input);
        }
        else if ($jenis === "piramida_2"){
          piramida_2($input);
        }
        else if ($jenis === "segitiga_1"){
          segitiga_1($input);
        }
        else if ($jenis === "segitiga_2"){
        	segitiga_2($input);
        }
        else if($jenis === "piramida_kiri"){
        	piramida_kiri($input);
        }
        else if($jenis === "piramida_berongga"){
        	piramida_berongga($input);
        }
         else if($jenis === "piramida_berongga_terbalik"){
          piramida_berongga_terbalik($input);
        }
        else if($jenis === "piramida_berongga_berlian"){
        	piramida_berongga_berlian($input);

        }
        else if($jenis === "persegi_diamond_berongga"){
        	persegi_diamond_berongga($input);

        }
        else if($jenis === "kupukupu"){
        	kupukupu($input);

        }
        else if($jenis === "diagonal_kotak"){
        	diagonal_kotak($input);
        }
        else if($jenis === "diagonal_belah"){
        	diagonal_belah($input);
        }
        else if($jenis === "anak_panah"){
        	anak_panah($input);
        }
        else if($jenis === "belah_ketupat"){
        	belah_ketupat($input);
        }
        else if($jenis === "segitiga_bersebelahan"){
        	segitiga_bersebelahan($input);
        }
        else if($jenis === "segitiga_fibo"){
          segitiga_fibo($input);
        }
        else if($jenis === "setengah_bintang"){
          setengah_bintang($input);
        }
        else if($jenis === "setengah_bintang_terbalik"){
          setengah_bintang_terbalik($input);
        }
        else if($jenis === "piramida_bintang_1"){
          piramida_bintang_1($input);
        }
        else if($jenis === "piramida_terbalik_1"){
          piramida_terbalik_1($input);
        }
        else if($jenis === "piramida_terbalik_2"){
          piramida_terbalik_2($input);
        }
        else if($jenis === "piramida_bintang_2"){
          piramida_bintang_2($input);
        }
        else if($jenis === "bintang_berlian"){
          bintang_berlian($input);
        }
        else{
          bintang_kanan($input);
        }


    // no 1
    function pola_3_bintang($input){
      for ($i=1; $i <= $input; $i++) { 
        echo "***";
        echo "<br>";
      }
    }
    
    // no 2
    function segitiga_siku($input){
      for ($i=1; $i <= $input; $i++){
        for($j=1;$j <= $i; $j++){
            echo "*";
        }
        echo "<br>";
        }
    }

    // no 3
    function segitiga_sisi($input){
      for ($i=1; $i<=$input; $i++){
        for($j=$input; $j>$i; $j--){
            echo "&nbsp;&nbsp";
        }
        for($j=1; $j<=$i;$j++){
            echo "*";
        }
        for($j=2; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
      }
    }

    // no 4
    function piramida_1($input){
      for ($x = 1; $x <= $input; $x++)
      {
          for ($y = 1; $y <= $input; $y++)
          {
                if ($y <= $x)
                    echo "$y";
                else
                    echo "&nbsp;&nbsp";
          }
          for ($y = $input; $y >= 1; $y--)
          {
                if ($y <= $x)
                    echo "$y";
                else
                    echo "&nbsp;&nbsp";
          }
          echo "<br>";
      }
    }

    // no 5
    function angka_berlian($input){
      for ($x = 1; $x <= $input; $x++)
      {
            for ($y = $x; $y < $input; $y++)
            {
                echo "&nbsp;&nbsp";
            }
            for ($k = 1; $k < ($x * 2); $k++)
            {
                echo "$k";
            }
            echo "<br>";
      }
      for ($x = 4; $x >= 1; $x--)
      {
            for ($y = $input; $y > $x; $y--)
            {
                echo "&nbsp;&nbsp";
            }
            for ($k = 1; $k < ($x * 2); $k++)
            {
                echo "$k";
            }
            echo "<br>";
      }
    }

    // no 6
    function pola_piramida($input){
      $y = 0;
      $cntr = 0;
      $cntr1 = 0;
      for ($x = 1; $x <= $input; ++$x)
          {
              for ($s = 1; $s <= $input - $x; ++$s)
              {
                  echo "&nbsp;&nbsp;&nbsp;&nbsp;";
                  ++$cntr;
              }
              while ($y != 2 * $x - 1)
              {
                    if ($cntr <= $input - 1)
                    {
                      echo $x + $y;
                      ++$cntr;
                    }
                    else
                    {
                      ++$cntr1;
                      echo ($x + $y - 2 * $cntr1);
                    }
                    ++$y;
              }
              $cntr1 = $cntr = $y = 0;
              echo "<br>";
        }
    }

    // no 7
    function piramida_vert($input){
      for ($x = 1; $x <= $input; $x++)
      {
        for ($y = 1; $y <= $x; $y++)
            echo $y;
            echo "<br>";
      }
    }

    // no 8
    function piramida_2($input){
      for ($x = $input; $x >= 0; $x--)
      {
            for ($y = 1; $y <= $x; $y++)
            echo $y;
            echo "<br>";
      }
      for ($x = 1; $x <= $input; $x++)
      {
            for ($y = 1; $y <= $x; $y++)
            echo $y;
            echo "<br>";
      }
    }

    // no 9
    function segitiga_1($input){
      for ($i = 1; $i <= $input; $i++) {
        for ($j = 1; $j <= $input - $i; $j++) {
            echo "&nbsp;&nbsp";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo $k;
            echo "&nbsp;&nbsp";
        }
        echo "<br>";
        $k = $k - 1;
      }
    }

    // no 10
    function segitiga_2($input){
      $l = 1;
      for ($i = 1; $i <= $input; $i++) {
        for ($j = 1; $j <= $input - $i; $j++) {
            echo "&nbsp;&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++, $l++) {
            echo $l;
            echo "&nbsp;&nbsp;&nbsp;";
        }
        echo "<br>";
    	}
    }

    // no 11
    function piramida_kiri($input){
    	for ($i = 1; $i <= $input; $i++){
	        for ($j = $i; $j < $input; $j++){
	            echo "&nbsp;&nbsp;&nbsp";
	        }
	        for ($j = 1; $j <= $i; $j++){
	            echo "* ";
	        }
	        echo "<br>";
	      }
	      for ($i = $input; $i >= 1; $i--){
	        for ($j = $i; $j <= $input; $j++){
	            echo "&nbsp;&nbsp;&nbsp";
	        }
	        for ($j = 1; $j < $i; $j++){
	            echo "* ";
	        }
	    	echo "<br>";
	    }
    }

    // no 12
    function piramida_berongga($input){
    	for ($i = 1; $i <= $input; $i++){
            for ($s = $i; $s < $input; $s++)
                  echo "&nbsp;&nbsp;&nbsp";
            for ($j = 1; $j <= (2 * $input - 1); $j++)
            {
                  if ($i == $input || $j == 1 || $j == 2 * $i - 1)
                        echo "* ";
                  else
                        echo "&nbsp;&nbsp;&nbsp";
            }
            echo "<br>";
      }
    }

    // no 13
    function piramida_berongga_terbalik($input){
    	for ($i = $input; $i >= 1; $i--){
    		for ($space = $i; $space < $input; $space++){
    			echo "&nbsp;&nbsp;&nbsp";
    		}
    		for ($j = 1; $j <= 2 * $i - 1; $j++){
    			if ($i == $input || $j == 1 || $j == 2 * $i - 1){
    				echo "* ";
    			}
    			else{
    				echo "&nbsp;&nbsp;&nbsp";
    			}
    		}
    		echo "<br>";
    	}
    }

    // no 14
    function piramida_berongga_berlian($input){
    	$m = 1;
    	for($i = 0; $i <= $input; $i++){
    		for ($j = $input; $j > $i; $j--){
    			echo "&nbsp;&nbsp";
    		}
    		echo "* ";
    		if($i>0){
    			for ($k = 1; $k <= $m; $k++){
    				echo "&nbsp;&nbsp";
    			}
    			$m += 2;
    			echo "* ";
    		}
    		echo "<br>";
    	}
    	$m -= 4;
    	for ($i = 0; $i <= $input - 1; $i++){
    		for ($j = 0; $j <= $i; $j++){
    			echo "&nbsp;&nbsp";
    		}
    		echo "* ";
    		for ($k = 1; $k <= $m; $k++){
    			echo "&nbsp;&nbsp";
    		}
    		$m -= 2;
    		if ($i != $input - 1){
    			echo "* ";
    		}
    		echo "<br>";
    	}
    }

    // no 15
    function persegi_diamond_berongga($input){
    	for ($i = 0; $i < $input; $i++){
	        for ($j = 0; $j < (2 * $input); $j++){
	            if ($i + $j <= $input - 1){
	                echo "* ";
	            }
	            else{
	                echo "&nbsp;&nbsp;&nbsp";
	            }
	            if (($i + $input) <= $j){
	                echo "* ";
	            }
	            else{
	                echo "&nbsp;&nbsp;&nbsp";
	            }
	        }
	        echo "<br>";
	    }
	 
	    for ($i = 0; $i < $input; $i++)
	    {
	        for ($j = 0; $j < (2 * $input); $j++)
	        {
	            if ($i >= $j){
	                echo "* ";
	            }
	            else{
	                echo "&nbsp;&nbsp;&nbsp";
	            }
	            if ($i >= (2 * $input - 1) - $j){
	                echo "* ";
	            }
	            else{
	                echo "&nbsp;&nbsp;&nbsp";
	            }
	        }
	        echo "<br>";
	    }
    }

    // no 16
    function kupukupu($input){
    	for ($i = 0; $i < $input; $i++){
        	for ($j = 0; $j < (2 * $input); $j++){
            	if ($i >= $j) 
                	echo "* ";
            	else
                	echo "&nbsp;&nbsp;&nbsp";
            	if ($i >= (2 * $input - 1) - $j)  
                	echo "* ";
            	else
                	echo "&nbsp;&nbsp;&nbsp";
        	}
	        echo "<br>";
	    }
	      for ($i = 0; $i < $input; $i++)
	    {
	        for ($j = 0; $j < (2 * $input); $j++)
	        {
	            if ($i + $j <= $input - 1)  
	                echo "* ";
	            else
	                echo "&nbsp;&nbsp;&nbsp";
	            if (($i + $input) <= $j)  
	                echo "* ";
	            else
	                echo "&nbsp;&nbsp;&nbsp";
	        }
	       	echo "<br>";
	    }
    }

    // no 17
    function diagonal_kotak($input){
    	for ($i = 0; $i < $input; $i++){
            for ($j = 0; $j < $input; $j++){                 
                 if ($i == $j || $i + $j == $input - 1 || $i == 0 || $i == $input - 1 || $j == 0 || $j == $input - 1){
                        echo "* ";
                 }
                 else{
                        echo "&nbsp;&nbsp;&nbsp";
                 }
            }
            echo "<br>";
      	}
    }

    // no 18 
    function diagonal_belah($input){
      $num1 = floor($input/2) * 3;
      for ($i = 0; $i < $input; $i++)
      {
            for ($j = 0; $j < $input; $j++)
            {                 
                  if ($i == floor($input / 2) || $j == floor($input / 2) || $i + $j == floor($input / 2) || $i - $j == floor($input / 2) or $j - $i == floor($input / 2) or $i + $j == $num1){
                    echo "*";
                  }else{
                    echo "&nbsp;&nbsp";
                  }  
            }
            echo "<br>";
      }
    }

    //  no 19
    function anak_panah($input){
    	$num1 = floor($input / 2) * 3;
    	echo "Panah kanan<br>";
    	for ($i = 0; $i < $input; $i++)
	      {
	            for ($j = 0; $j < $input; $j++)
	            {                 
	                  if ($i == floor($input / 2) or $j - $i == floor($input / 2) or $i + $j == $num1) echo "*";
	                  else echo "&nbsp;&nbsp;";
	            }
	            echo "<br>";
	      }
	       
	      echo "Panah kiri<br>";
	      for ($i = 0; $i < $input; $i++)
	      {
	            for ($j = 0; $j < $input; $j++)
	            {                 
	                  if ($i == floor($input / 2) or $i - $j == floor($input / 2) or $i + $j == floor($input / 2))
	                        echo "*";
	                  else
	                        echo "&nbsp;&nbsp";
	            }
	            echo "<br>";
	      }
    }

    // no 20
    function belah_ketupat($input){
    	echo "Belah Ketupat Padat";
    	echo "<br>";
	      for ($i = 0; $i < $input; $i++)
	      {
	            for ($j = 0; $j < $input - $i; $j++)
	            {
	                  echo "&nbsp";
	            }
	            for ($j = 0; $j < $input; $j++)
	            {
	                  echo "* ";
	            }
	            echo "<br>";
	      }
	 
	    echo "Belah Ketupat Berongga";
    	echo "<br>";
	      for ($i = 0; $i < $input; $i++)
	      {
	            for ($j = 0; $j < $input - $i; $j++)
	            {
	                  echo "&nbsp";
	            }
	            for ($j = 0; $j < $input; $j++)
	            {
	                  if ($i == 0 || $i == $input - 1 || $j == 0 || $j == $input - 1)
	                        echo "* ";
	                  else
	                        echo "&nbsp;&nbsp;&nbsp";
	            }
	            echo "<br>";
	    }
    }

    // no 21
    function segitiga_bersebelahan($input){
    	for ($x = 1; $x <= $input; $x++){
            for ($y = 1; $y <= $input; $y++){
                if ($y <= $x){
                    echo "* ";
                }
                else{
                    echo "&nbsp;&nbsp;&nbsp";
                }
            }
            for ($y = $input; $y >= 1; $y--)
            {
                if ($y <= $x){
                    echo "* ";
                }
                else{
                    echo "&nbsp;&nbsp;&nbsp";
                }
            }
        echo "<br>";
      }
    }

    // no 22
    function segitiga_fibo($input){
      $count1 = 1;
      for ($i = 0; $i <= $input; $i++) {
        for ($space = 1; $space <= $input - $i; $space++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 0; $j <= $i; $j++) {
            if ($j == 0 || $i == 0)
                $count1 = 1;
            else
                $count1 = $count1 * ($i - $j + 1) / $j;
            echo $count1 . "&nbsp;&nbsp;";
        }
        echo "<br>";
      }
    }
    
    // no 23
    function setengah_bintang($input){
      for ($i = 1; $i <= $input; $i++){
            for ($j = 1; $j <= $i; $j++){
              echo "* ";
            }
            echo "<br>";
        }
    }

    // no 24
    function setengah_bintang_terbalik($input){
      for ($i = $input; $i >= 1; $i--)
      {
            for ($j = 1; $j <= $i; $j++)
            {
                  echo "* ";
            }
            // ending line after each row
            echo "<br>";
      }
    }
    // no 25
    function piramida_bintang_1($input){
      for($i = 1, $k = 0; $i <= $input; ++$i, $k = 0){
        for($space = 1; $space <= $input-$i; ++$space){
            echo "&nbsp;";
        }
        while($k != 2*$i-1){
            echo "* ";
            ++$k;
        }
        echo "<br>";
      }    
    }

    // no 26
    function piramida_terbalik_1($input){
      for ($i = $input; $i >= 1; $i--)
      {
            //for loop to put space
            for ($s = $i; $s < $input; $s++)
                echo "&nbsp;";
            //for loop for displaying star
            for ($j = 1; $j <= (2 * $i - 1); $j++)
                echo "* ";
            // ending line after each row
            echo "<br>";
      }
    }

    // no 27
    function piramida_terbalik_2($input){
      for ($i = $input; $i >= 1; $i--)
      {
            //for loop to put space
            for ($s = $i; $s < $input; $s++)
                echo "&nbsp;";
            //for loop for displaying star
            for ($j = 1; $j <= $i; $j++)
                echo "* ";
            // ending line after each row
            echo "<br>";
      }
    }

    // no 28
    function piramida_bintang_2($input){
      for ($i = 1; $i <= $input; $i++)
      {
            //for loop to put space
            for ($s = $i; $s < $input; $s++) echo "&nbsp;";
            //for loop for displaying star
            for ($j = 1; $j <= $i; $j++) echo "* ";
            // ending line after each row
            echo "<br>";
      }
    }

    // no 29
    function bintang_berlian($input){
      for ($i = 0; $i <= $input; $i++)
      {
            for ($s = $input; $s > $i; $s--)
            echo "&nbsp;";
            for ($j = 0; $j < $i; $j++)
            echo "* ";
            echo "<br>";
      }
      for ($i = 1; $i < $input; $i++)
      {
            for ($s = 0; $s < $i; $s++)
            echo "&nbsp;";
            for ($j = $input; $j > $i; $j--)
            echo "* ";
            // ending line after each row
            echo "<br>";
      }
    }

    // no 30
    function bintang_kanan($input){
      for ($i = 1; $i <= $input; $i++)
      {
            for ($j = 1; $j <= $i; $j++)
            {
              echo "*";
            }
            echo "<br>";
      }
      for ($i = $input; $i >= 1; $i--)
      {
            for ($j = 1; $j <= $i; $j++)
            {
              echo "*";
            }
            // ending line after each row
            echo "<br>";
      }
    }

  ?>