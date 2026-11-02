<?php
// 1. SUMA

function suma($a, $b)
{
    return $a + $b;
}

$a = 10;
$b = 20;

echo "<h2>1. SUMA</h2>";
echo suma($a, $b);

echo "<hr>";


// 2. PODSTAWY

function podstawy($a, $b)
{
    echo "Suma: " . ($a + $b) . "<br>";
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";

    if ($b != 0) {
        echo "Iloraz: " . ($a / $b);
    }
    else {
        echo "Nie można dzielić przez zero";
    }
}

echo "<h2>2. PODSTAWY</h2>";
podstawy(10, 5);

echo "<hr>";


// 3. KALKULATOR

function kalkulator($a, $b, $dzialanie)
{
    if ($dzialanie == "+") return $a + $b;
    elseif ($dzialanie == "-") return $a - $b;
    elseif ($dzialanie == "*") return $a * $b;
    elseif ($dzialanie == "/") {
        if ($b != 0) return $a / $b;
        else return "Nie można dzielić przez zero";
    }
}

echo "<h2>3. KALKULATOR</h2>";
echo kalkulator(10, 5, "+");

echo "<hr>";


// 4. MAKS

function maks($a, $b, $c)
{
    return max($a, $b, $c);
}

echo "<h2>4. MAKS</h2>";
echo maks(10, 25, 15);

echo "<hr>";

// 5. WZROST

function wzrost($a)
{
    if ($a < 150) echo "Niski";
    elseif ($a > 180) echo "Wysoki";
    else echo "Średni";
}

echo "<h2>5. WZROST</h2>";
wzrost(175);

echo "<hr>";

// 6. BMI

function bmi($wzrost, $waga)
{
    $wynik = $waga / (($wzrost / 100) * ($wzrost / 100));

    echo "BMI: " . round($wynik, 2) . "<br>";

    if ($wynik < 18.5) echo "Za mało!";
    elseif ($wynik > 25) echo "Za dużo!";
    else echo "OK!";
}

echo "<h2>6. BMI</h2>";
bmi(180, 75);

echo "<hr>";

// 7. STARSZY

function starszy($data1, $data2)
{
    if ($data1 < $data2) echo "Pierwsza osoba jest starsza";
    elseif ($data1 > $data2) echo "Druga osoba jest starsza";
    else echo "Obie osoby są w tym samym wieku";
}

echo "<h2>7. STARSZY</h2>";
starszy("2000-05-10", "2003-08-15");

echo "<hr>";



// 8. PRZESTĘPNY


function przestepny($rok)
{
    if (($rok % 400 == 0) || ($rok % 4 == 0 && $rok % 100 != 0)) {
        echo "Rok przestępny";
    }
    else {
        echo "Rok nieprzestępny";
    }
}

echo "<h2>8. PRZESTĘPNY</h2>";
przestepny(2024);

echo "<hr>";


// 9. SIŁA


function sila($haslo)
{
    $dlugosc = strlen($haslo);

    if (
        $dlugosc <= 4 ||
        !preg_match('/[0-9]/', $haslo) ||
        !preg_match('/[A-Z]/', $haslo) ||
        !preg_match('/[a-z]/', $haslo) ||
        !preg_match('/[^a-zA-Z0-9]/', $haslo)
    ) {
        echo "Hasło słabe";
    }
    elseif ($dlugosc < 8) {
        echo "Hasło średnie";
    }
    else {
        echo "Hasło mocne";
    }
}

echo "<h2>9. SIŁA</h2>";
sila("Abc12345!");

echo "<hr>";



// 10. TROJKAT

function trojkat($a, $b, $c)
{
    if (
        $a > 0 && $b > 0 && $c > 0 &&
        $a + $b > $c &&
        $a + $c > $b &&
        $b + $c > $a
    ) {
        echo "Można utworzyć trójkąt";
    }
    else {
        echo "Nie można utworzyć trójkąta";
    }
}

echo "<h2>10. TROJKAT</h2>";
trojkat(3, 4, 5);

echo "<hr>";

// 11. SZYFR

function szyfr($tekst)
{
    $wynik = "";

    for ($i = 0; $i < strlen($tekst); $i++) {

        $znak = $tekst[$i];

        if ($znak >= 'a' && $znak <= 'z') {
            $wynik .= chr((ord($znak) - 97 + 2) % 26 + 97);
        }
        elseif ($znak >= 'A' && $znak <= 'Z') {
            $wynik .= chr((ord($znak) - 65 + 2) % 26 + 65);
        }
        else {
            $wynik .= $znak;
        }
    }

    return $wynik;
}

echo "<h2>11. SZYFR</h2>";

echo szyfr("kot");

?>