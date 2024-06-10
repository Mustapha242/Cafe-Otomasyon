<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

$errors = array();

session_start();

include_once('errors.php');
include_once('dbconnect.php');


function validate($value)
{
    $value = trim($value);
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}


function splitByComma($sentence)
{
    $words = preg_split('/\s*,\s*/', $sentence, -1, PREG_SPLIT_NO_EMPTY);
    return $words;
}

function cleanTurkishCharacters($text)
{
    $turkishCharacters = array('ç', 'ğ', 'ı', 'i', 'ö', 'ş', 'ü', 'Ç', 'Ğ', 'İ', 'Ö', 'Ş', 'Ü', ' ', "'");
    $englishCharacters = array('c', 'g', 'i', 'i', 'o', 's', 'u', 'C', 'G', 'I', 'O', 'S', 'U', '-', '');

    $cleanedText = str_replace($turkishCharacters, $englishCharacters, $text);
    $cleanedText = preg_replace('/[^A-Za-z0-9\-]/', '', $cleanedText); // Remove special characters
    $cleanedText = strtolower($cleanedText); // Convert to lowercase

    return $cleanedText;
}

function cleanPhoneNumber($phoneNumber)
{
    $cleanedNumber = str_replace(['(', ')', ' '], '', $phoneNumber);
    return $cleanedNumber;
}


$tableNameProductCategory = "product_category";
$columnsProductCategory = ['product_category_id', 'product_category_name', 'product_category_description', 'product_category_date'];

$tableNameProduct = "product";
$columnsProduct = ['product_id', 'product_category_id', 'product_photos_1024x683', 'product_name', 'product_small_price', 'product_middle_price', 'product_big_price', 'product_publicy', 'product_date_time'];

$fetchDataCategory = fetch_data_category($db, $tableNameProductCategory, $columnsProductCategory);

function fetch_data_category($db, $tableName, $columns)
{
    if (empty($db)) {
        return "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        return "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        return "Table name is empty";
    } else {
        $categories = array(); // Kategorileri depolamak için boş bir dizi oluşturuyoruz
        $query = "SELECT * FROM $tableName"; // Tüm sütunları alıyoruz
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                while ($category = $result->fetch_assoc()) {
                    $categories[$category['product_category_id']] = $category; // Kategoriyi diziye ekliyoruz
                }
                return $categories; // Kategorileri döndürüyoruz
            } else {
                return "No categories found!";
            }
        } else {
            return "Query error: " . $db->error;
        }
    }
}

$fetchDataProductEspresso = fetch_data_product($db, $tableNameProduct, $columnsProduct, 5);
$fetchDataProductExtras = fetch_data_product($db, $tableNameProduct, $columnsProduct, 6);
$fetchDataProductSpecialHotDrinks = fetch_data_product($db, $tableNameProduct, $columnsProduct, 7);
$fetchDataProductTeas = fetch_data_product($db, $tableNameProduct, $columnsProduct, 8);
$fetchDataProductIcedCoffeeDrinks = fetch_data_product($db, $tableNameProduct, $columnsProduct, 9);
$fetchDataProductColdDrinks = fetch_data_product($db, $tableNameProduct, $columnsProduct, 10);
$fetchDataProductLemonades = fetch_data_product($db, $tableNameProduct, $columnsProduct, 11);
$fetchDataProductFrozen = fetch_data_product($db, $tableNameProduct, $columnsProduct, 12);
$fetchDataProductFrappe = fetch_data_product($db, $tableNameProduct, $columnsProduct, 13);
$fetchDataProductMilkshake = fetch_data_product($db, $tableNameProduct, $columnsProduct, 14);

function fetch_data_product($db, $tableName, $columns, $category_id)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT $columnName FROM $tableName";
        $query .= " WHERE product_category_id = $category_id AND product_publicy = 1";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "No records found for the specified category ID!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

$fetchDataProduct = fetch_data_all_product($db, $tableNameProduct, $columnsProduct);

function fetch_data_all_product($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT $columnName FROM $tableName";
        $query .= " WHERE product_publicy = 1";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "No records found for the specified category ID!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

// ANASITEYE VERITABANINDAN URUN DETAY SAYFASINA VERI CEKME KODLARI 
if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $product_id = end($url_segments);
    $id = validate($product_id);
    $fetchDataProductDetails = fetch_data_product_detail($db, $tableNameProduct, $columnsProduct, $id);
}
function fetch_data_product_detail($db, $tableName, $columns, $id)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE product_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $msg = $row;
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['product_id'], $_POST['product_category_id'], $_POST['product_photos_1024x683'], $_POST['product_name'], $_POST['product_small_price'], $_POST['product_middle_price'], $_POST['product_big_price'], $_POST['quantity'])) {;

        $product_id = validate($_POST['product_id']);
        $product_category_id = validate($_POST['product_category_id']);
        $product_photos_1024x683 = validate($_POST['product_photos_1024x683']);
        $product_name = validate($_POST['product_name']);
        $product_small_price = validate($_POST['product_small_price']);
        $product_middle_price = validate($_POST['product_middle_price']);
        $product_big_price = validate($_POST['product_big_price']);
        $product_publicy = validate($_POST['product_publicy']);
        $product_date_time = validate($_POST['product_date_time']);
        $quantity = validate($_POST['quantity']);

        $query = "SELECT * FROM product WHERE product_id = $product_id";
        $result = $db->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $cart  = array(
                'product_id' => $row['product_id'],
                'product_category_id' => $row['product_category_id'],
                'product_photos_1024x683' => $row['product_photos_1024x683'],
                'product_name' => $row['product_name'],
                'product_small_price' => $row['product_small_price'],
                'product_middle_price' => $row['product_middle_price'],
                'product_big_price' => $row['product_big_price'],
                'product_publicy' => $row['product_publicy'],
                'product_date_time' => $row['product_date_time'],
                'quantity' => $quantity
            );

            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }
            array_push($_SESSION['cart'], $cart);
        } else {
            echo "Ürün bulunamadı.";
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order'])) {

    $customer_desk_number = validate($_POST['desk_id']);
    $customer_name = htmlspecialchars($_POST['customer_name']);

    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_TIME, 'tr_TR.utf8'); // Türkçe dil desteği için locale ayarı
    $gunler = array(
        'Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'
    );
    $aylar = array(
        'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'
    );
    $gun = $gunler[date('w')];
    $ay = $aylar[date('n') - 1];
    $gunAyYil = date('d') . ' ' . $ay . ' ' . date('Y');
    $saatDakika = date('H:i');
    $currentDateTime = $gunAyYil . ' ' . $saatDakika;

    // Veritabanına müşteri bilgilerini kaydet
    $stmt = $db->prepare("INSERT INTO orders (customer_desk_number, customer_name, created_at, order_status) VALUES (?, ?, ?, ?)");
    $status = "1"; // $status değişkeni eklenerek
    $stmt->bind_param("ssss", $customer_desk_number, $customer_name, $currentDateTime, $status); // $currentDateTime doğrudan değil, referans olarak geçirildi.
    $stmt->execute();
    $order_id = $stmt->insert_id; // Eklenen siparişin ID'si
    $stmt->close();

    // Sepetteki ürünleri al ve veritabanına kaydet
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $product) {
            $product_id = $product['product_id'];
            $product_name = $product['product_name'];
            $quantity = $product['quantity'];
            $product_small_price = $product['product_small_price'];
            // Veritabanına ürünleri kaydet
            $stmt = $db->prepare("INSERT INTO order_items (order_id, product_id, product_name, quantity, price, created_at) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("iisiis", $order_id, $product_id, $product_name, $quantity, $product_small_price, $currentDateTime); 
            $stmt->execute();
            $stmt->close();
        }

        // Sepeti temizle
        unset($_SESSION['cart']);

        header('location: index.php');
    }
}

$fetchDataProductLimit3 = fetch_data_3_product($db, $tableNameProduct, $columnsProduct);

function fetch_data_3_product($db, $tableName, $columns)
{
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT $columnName FROM $tableName";
        $query .= " WHERE product_publicy = 1";
        $query .= " ORDER BY product_id DESC"; // Son yüklenen ürünleri önce listelemek için sıralama
        $query .= " LIMIT 3"; // Son yüklenen 3 ürünü al
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "No records found for the specified category ID!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}



// VERITABANINA URUN KATEGORI EKLEME KODLARI
if (isset($_POST['reservation-add'])) {
    $number_of_people = mysqli_real_escape_string($db, $_POST['number_of_people']);
    $reservation_date = mysqli_real_escape_string($db, $_POST['reservation_date']);
    $reservation_clock = mysqli_real_escape_string($db, $_POST['reservation_clock']);
    $reservation_name = mysqli_real_escape_string($db, $_POST['reservation_name']);
    $reservation_email = mysqli_real_escape_string($db, $_POST['reservation_email']);
    $reservation_phone = mysqli_real_escape_string($db, $_POST['reservation_phone']);

    if (empty($reservation_phone) && empty($reservation_clock) && empty($reservation_date) && empty($number_of_people) && empty($reservation_name)) {
        array_push($errors, "Enter the branch name and owner!");
    }

    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_TIME, 'tr_TR.utf8'); // Türkçe dil desteği için locale ayarı
    $gunler = array(
        'Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'
    );
    $aylar = array(
        'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'
    );
    $gun = $gunler[date('w')];
    $ay = $aylar[date('n') - 1];
    $gunAyYil = date('d') . ' ' . $ay . ' ' . date('Y');
    $saatDakika = date('H:i');
    $currentDateTime = $gunAyYil . ' ' . $saatDakika;

    $reservation_title_query = "SELECT * FROM reservation WHERE `reservation_name`='$reservation_name'";
    $resultReservationTitleQuery = mysqli_query($db, $reservation_title_query);
    $reservationAlreadyControl = mysqli_fetch_assoc($resultReservationTitleQuery);

    if ($reservationAlreadyControl) {
        if ($reservationAlreadyControl['reservation_name'] === $reservation_name) {
            array_push($errors, "This branch is already available in the system!");
        }
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO reservation (number_of_people,reservation_date,reservation_clock,reservation_name,reservation_email,reservation_phone,currentDateTime) 
        VALUES ('$number_of_people','$reservation_date','$reservation_clock','$reservation_name','$reservation_email','$reservation_phone','$currentDateTime')";  
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header('location: index.php');
        } else {
            $errors[] = "Work could not be loaded: " . mysqli_error($db);
        }
    }
}