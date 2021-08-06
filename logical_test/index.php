<?php
// 1. Array Loop
echo "1. Array Loop";
echo "<br>";
$arr = array(3, 6, 4, 1, 7);
$i = 0;

while ($i < count($arr)) {
    echo $arr[$i] . "  ";
    $i++;
}

echo "<br><br>";

// 2. MySQL Query
echo "2. MySQL Query";
echo "<br>";
$sql = "SELECT mhs_nama FROM tb_mahasiswa JOIN tb_mahasiswa_nilai ON tb_mahasiswa.mhs_id =  tb_mahasiswa_nilai.mhs_id JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id WHERE tb_matakuliah.mk_kode = 'MK303' ORDER BY tb_mahasiswa_nilai.nilai DESC LIMIT 1";
echo $sql;

echo "<br><br>";

// 3. Operator Logic
echo "3. Operator Logic";
echo "<br>";

$a = 10;
$b = 3;
$count = 0;

while($a >= $b) {
    $a = $a - $b;
    $count++;
}

echo "10 : 3 = " . $count;

echo "<br><br>";

// 4. Looping Condition
echo "4. Looping Condition";
echo "<br>";

for($j = 1; $j <= 50; $j++) {
    if ($j % 3 == 0 && $j % 5 != 0) {
        echo "Foo<br>";
    } else if ($j % 5 == 0 && $j % 3 != 0) {
        echo "Bar<br>";
    } else if ($j % 3 == 0 && $j % 5 == 0) {
        echo "FooBar<br>";
    } else {
        echo $j . "<br>";
    }
}
?>