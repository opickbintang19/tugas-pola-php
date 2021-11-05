<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Konversi Kode C++ ke PHP</title>
  </head>
  <body>
      <h1>Konversi Kode C++ ke PHP</h1>
      <?php 
      $pola = 
        [
          ["nama" => "pola_3_bintang","keterangan" => "1. Membuat Pola 3 Bintang"],
          ["nama" => "segitiga_siku","keterangan" => "2. Membuat Pola Segitiga Siku-siku"],
          ["nama" => "segitiga_sisi","keterangan" => "3. Membuat Pola Segitiga Sama Sisi"],
          ["nama" => "piramida_1","keterangan" => "4. Mencetak Angka Piramida(1)"],
          ["nama" => "angka_berlian","keterangan" => "5. Mencetak Angka Berlian"],
          ["nama" => "pola_piramida","keterangan" => "6. Mencetak Pola Angka Piramida"],
          ["nama" => "piramida_vert","keterangan" => "7. Mencetak Piramida Nomor Vertikal"],
          ["nama" => "piramida_2","keterangan" => "8. Mencetak Angka Piramida(2)"],
          ["nama" => "segitiga_1","keterangan" => "9. Mencetak Angka pada Segitiga(1)"],
          ["nama" => "segitiga_2","keterangan" => "10. Mencetak Angka pada Segitiga(2)"],

          ["nama" => "piramida_kiri","keterangan" => "11. Mencetak Piramida Bintang ke Samping Kiri"],
          ["nama" => "piramida_berongga","keterangan" => "12. Mencetak Piramida Bintang Berongga"],
          ["nama" => "piramida_berongga_terbalik","keterangan" => "13. Mencetak Piramida Bintang Berongga Terbalik"],
          ["nama" => "piramida_berongga_berlian","keterangan" => "14. Mencetak Piramida Bintang Berongga Pola Berlian"],
          ["nama" => "persegi_diamond_berongga","keterangan" => "15. Mencetak Persegi dan Diamond Berongga"],
          ["nama" => "kupukupu","keterangan" => "16. Mencetak Kupu-kupu"],
          ["nama" => "diagonal_kotak","keterangan" => "17. Mencetak Diagonal dan Sisi Kotak Diagonal dan Sisi Kotak"],
          ["nama" => "diagonal_belah","keterangan" => "18. Mencetak Diagonal an Sisi Belah Ketupat / Berlian"],
          ["nama" => "anak_panah","keterangan" => "19. Mencetak Anak Panah"],
          ["nama" => "belah_ketupat","keterangan" => "20. Mencetak Belah Ketupat"],

          ["nama" => "segitiga_bersebelahan","keterangan" => "21. Mencetak Segitiga Bersebelahan"],
          ["nama" => "segitiga_fibo","keterangan" => "22. Mencetak Segitiga Fibonacci"],
          ["nama" => "setengah_bintang","keterangan" => "23. Mencetak Setengah Bintang"],
          ["nama" => "setengah_bintang_terbalik","keterangan" => "24. Mencetak Setengah Bintang Terbalik"],
          ["nama" => "piramida_bintang_1","keterangan" => "25. Mencetak Piramida Bintang Pola Ganjil"],
          ["nama" => "piramida_terbalik_1","keterangan" => "26. Mencetak Piramida Terbalik Pola Ganjil"],
          ["nama" => "piramida_terbalik_2","keterangan" => "27. Mencetak Piramida Terbalik"],
          ["nama" => "piramida_bintang_2","keterangan" => "28. Mencetak Piramida Bintang"],
          ["nama" => "bintang_berlian","keterangan" => "29. Mencetak Bintang Berlian"],
          ["nama" => "bintang_kanan","keterangan" => "30. Mencetak Bintang Kanan"]
        ];
      ?>
      <form method="post">
        <select name="jenis">
          <?php foreach($pola as $p) : ?>
            <option value="<?= $p["nama"];?>"><?= $p["keterangan"]; ?></option>
          <?php endforeach; ?>
        </select>
        <br>
        <input type="number" name="input" placeholder="Masukkan angka..." style="width: 350px;">
        <button type="sumbit" name="hitung" class="btn btn-success">Hitung</button>
      </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

  <?php

    // error_reporting(E_ERROR | E_PARSE);

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