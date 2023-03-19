<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Activity Score - STTNF</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
		<style>
			body{
				margin:10px;
			}
		</style>
    </head>
    <body>
        <?php
        /**
         * Task 1
         * Buatlah class Calculator 2 bilangan
         * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
         * Tampilkan masing-masing method dengan object
         */
            class Calculator {
                public $bilangan1;
                public $bilangan2;

                public function __construct($bil_pertama, $bil_kedua) {
                    // code..
                    $this->bilangan1 = $bil_pertama;
                    $this->bilangan2 = $bil_kedua;
                    echo "<h3><p>First number is <strong>{$this->bilangan1}</strong> and second number is <strong>{$this->bilangan2}</strong>.</p></h3>";
                }

                // Method lainnya
                public function Pertambahan() {
                    $tambah = $this->bilangan1 + $this->bilangan2;
                    return $tambah;
                }
                public function Pengurangan() {
                    $kurang = $this->bilangan1 - $this->bilangan2;
                    return $kurang;
                }
                public function Perkalian() {
                    $kali = $this->bilangan1 * $this->bilangan2;
                    return $kali;
                }
                public function Pembagian() {
                    $bagi = $this->bilangan1 / $this->bilangan2;
                    return $bagi;
                }
            }

            // Buat object dan tampilkan masing-masing method
            $calculator = new Calculator(10, 5);

            echo 'Addition Result (Pertambahan): '.$calculator->Pertambahan();
            echo '<br>Subtraction Result (Pengurangan): '.$calculator->Pengurangan();
            echo '<br>Multiplication Result (Perkalian): '.$calculator->Perkalian();
            echo '<br>Division Result (Pembagian): '.$calculator->Pembagian();
        ?>
    </body>
</html>