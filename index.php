<?php
// Создание массива с именами товарищей
$friends = array("Анатолий", "Светлана", "Дмитрий", "Екатерина");

// Вывод имен на экран
foreach ($friends as $friend) {
    echo $friend . "<br>";
}

// Разделительная пунктирная линия после задания
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
// Создание массива из 5 произвольных чисел
$numbers = array(10, 25, 30, 45, 50);

// Получение значения элемента с индексом 2
$value = $numbers[2];

// Вывод значения на экран
echo "Элемент с индексом 2: " . $value;

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
// Создание ассоциативного массива с информацией о знакомом
$friend = array(
    "name" => "Иван",
    "age" => 28,
    "city" => "Москва"
);

// Вывод имени и возраста на экран
echo "Имя: " . $friend["name"] . "<br>";
echo "Возраст: " . $friend["age"] . "<br>";
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
// Создание массива из 5 чисел
$numbers = array(3, 12, 8, 18, 70);

// Вывод чисел, больше 10
echo "Числа больше 10:<br>";
foreach ($numbers as $number) {
    if ($number > 10) {
        echo $number . "<br>";
    }
}
// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
// Создание массива из 5 чисел
$numbers = array(3, 12, 8, 18, 70);

// Использование функции array_sum() для подсчета суммы
$sum = array_sum($numbers);

// Вывод суммы на экран
echo "Сумма чисел: " . $sum;

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/* Задача 6: Учет товаров в магазине
    6.1. Создание массива товаров с ключами name, price, quantity
*/
$products = array(
    array("name" => "Молоко", "price" => 50, "quantity" => 30),
    array("name" => "Хлеб", "price" => 20, "quantity" => 50),
    array("name" => "Яблоки", "price" => 70, "quantity" => 40),
    array("name" => "Сыр", "price" => 150, "quantity" => 15),
    array("name" => "Сок", "price" => 100, "quantity" => 25)
);
?>

<?php
// 6.2. Функция для вывода списка товаров с их названиями и ценами
function showProducts($products) {
    echo "Список товаров:<br>";
    foreach ($products as $product) {
        echo "Название: " . $product['name'] . ", Цена: " . $product['price'] . " руб.<br>";
    }
}

// Вызов функции
showProducts($products);
?>

<?php
// 6.3. Функция для добавления нового товара
function addProduct(&$products, $name, $price, $quantity) {
    $newProduct = array(
        "name" => $name,
        "price" => $price,
        "quantity" => $quantity
    );
    $products[] = $newProduct;
    echo "Товар '$name' добавлен!<br>";
}

// Добавление нового товара
addProduct($products, "Бананы", 60, 35);
showProducts($products); // вывод обновленного списка товаров
?>

<?php
// 6.4. Функция для обновления количества товара
function updateQuantity(&$products, $name, $newQuantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] = $newQuantity;
            echo "Количество товара '$name' обновлено до $newQuantity.<br>";
            return;
        }
    }
    echo "Товар '$name' не найден.<br>";
}

// Обновление количества товара
updateQuantity($products, "Яблоки", 50);
showProducts($products); // вывод обновленного списка товаров

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 7: Расчет среднего балла студентов
    7.1. Создание массива студентов с полями name и grades (оценки)
*/
$students = array(
    array("name" => "Алексей", "grades" => array(4, 5, 5, 3)),
    array("name" => "Мария", "grades" => array(5, 5, 4, 5)),
    array("name" => "Дмитрий", "grades" => array(3, 4, 4, 5))
);
?>

<?php
// 7.2. Функция для вывода среднего балла каждого студента
function calculateAverageGrade($grades) {
    // Рассчитываем средний балл
    $sum = array_sum($grades);
    $count = count($grades);
    return $sum / $count;
}

function showAverageGrades($students) {
    foreach ($students as $student) {
        $average = calculateAverageGrade($student['grades']);
        echo "Средний балл студента " . $student['name'] . ": " . $average . "<br>";
    }
}

// Вызов функции для вывода среднего балла студентов
showAverageGrades($students);
?>

<?php
// 7.3. Функция для вывода имени студента с самым высоким средним баллом
function findTopStudent($students) {
    $topStudent = null;
    $highestAverage = 0;

    foreach ($students as $student) {
        $average = calculateAverageGrade($student['grades']);
        if ($average > $highestAverage) {
            $highestAverage = $average;
            $topStudent = $student['name'];
        }
    }

    echo "Студент с самым высоким средним баллом: " . $topStudent . " (Средний балл: " . $highestAverage . ")<br>";
}

// Вызов функции для нахождения студента с самым высоким средним баллом
findTopStudent($students);

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 8: Поиск дубликатов в массиве
    8.1. Массив с произвольными числами, включая дубликаты
*/
$numbers = array(1, 5, 3, 7, 5, 3, 9, 1, 10);
?>

<?php
// 8.2. Функция для поиска дубликатов
function findDuplicates($array) {
    // Вспомогательный массив для хранения количества вхождений
    $occurrences = array();
    $duplicates = array();
    
    // Проход по массиву для подсчета вхождений каждого числа
    foreach ($array as $number) {
        if (isset($occurrences[$number])) {
            $occurrences[$number]++;
        } else {
            $occurrences[$number] = 1;
        }
    }

    // Поиск чисел, которые встречаются более одного раза
    foreach ($occurrences as $number => $count) {
        if ($count > 1) {
            $duplicates[] = $number;
        }
    }

    // Вывод дубликатов
    if (!empty($duplicates)) {
        echo "Повторяющиеся числа: " . implode(", ", $duplicates) . "<br>";
    } else {
        echo "Повторяющихся чисел нет.<br>";
    }
}

// Вызов функции для поиска дубликатов
findDuplicates($numbers);

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 9: Объединение и сортировка массивов
    9.1. Два массива с произвольными числами
*/
$array1 = array(8, 3, 5, 12);
$array2 = array(10, 4, 1, 7);
?>

<?php
// 9.2. Функция для объединения массивов
function mergeArrays($array1, $array2) {
    // Объединение двух массивов
    return array_merge($array1, $array2);
}

// Объединяем массивы
$mergedArray = mergeArrays($array1, $array2);

// Вывод объединенного массива
echo "Объединенный массив: " . implode(", ", $mergedArray) . "<br>";
?>

<?php
//  9.3. Функция для сортировки массива по возрастанию (вручную)
function sortArray(&$array) {
    // Реализация простой сортировки методом "пузырька"
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Меняем местами элементы, если предыдущий больше следующего
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
}

// Сортировка объединенного массива
sortArray($mergedArray);

// Вывод отсортированного массива
echo "Отсортированный массив: " . implode(", ", $mergedArray) . "<br>";

// Разделительная пунктирная линия
echo "<div style='border-bottom: 1px dashed gray; padding: 5px; width: 20%; margin-right: auto; margin-bottom: 15px;'></div>";
?>

<?php
/*  Задача 10: Фильтрация массива
    10.1. Создание массива с произвольными числами
*/
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
?>

<?php
// 9.2. Функция для фильтрации четных чисел
function filterEvenNumbers($array) {
    $evenNumbers = array();
    
    // Проход по массиву для фильтрации четных чисел
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $evenNumbers[] = $number;
        }
    }
    
    // Возвращаем массив только с четными числами
    return $evenNumbers;
}

// Вызов функции для фильтрации и вывод результата
$evenNumbers = filterEvenNumbers($numbers);
echo "Четные числа: " . implode(", ", $evenNumbers) . "<br>";
?>
