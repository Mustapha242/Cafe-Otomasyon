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


// VERITABANINA URUN KATEGORI EKLEME KODLARI
if (isset($_POST['category_add'])) {
    $product_category_name = mysqli_real_escape_string($db, $_POST['product_category_name']);
    $product_category_description = mysqli_real_escape_string($db, $_POST['product_category_description']);

    if (empty($product_category_name) && empty($product_category_description)) {
        array_push($errors, "Enter the category name and description!");
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

    $product_category_title_query = "SELECT * FROM product_category WHERE `product_category_name`='$product_category_name'";
    $resultProductCategoryTitleQuery = mysqli_query($db, $product_category_title_query);
    $productCategoryAlreadyControl = mysqli_fetch_assoc($resultProductCategoryTitleQuery);

    if ($productCategoryAlreadyControl) {
        if ($productCategoryAlreadyControl['product_category_name'] === $product_category_name) {
            array_push($errors, "This category is already available in the system!");
        }
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO product_category (product_category_name,product_category_description,product_category_date) 
        VALUES ('$product_category_name','$product_category_description','$currentDateTime')";
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header('location: app-product-category-list.php');
        } else {
            $errors[] = "Work could not be loaded: " . mysqli_error($db);
        }
    }
}


// URUN KATEGORI LISTESINE VERI CEKME KODLARI
$fetchDataProductCategory = fetch_data_product_category($db, $tableNameProductCategory, $columnsProductCategory);
function fetch_data_product_category($db, $tableName, $columns)
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
        $query .= " ORDER BY product_category_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Kategori Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


// VERITABANINDAN URUN KATEGORI SILME KODLARI
if (isset($_GET['deleteProductCategory'])) {
    $id = validate($_GET['deleteProductCategory']);
    $condition = ['product_category_id' => $id];
    $deleteMsg = delete_data_product_category($db, $tableNameProductCategory, $condition);
    header("location:app-product-category-list.php");
}

function delete_data_product_category($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}


//VERITABANINDAN URUN KATEGORI DETAY SAYFASINA VERI CEKME KODLARI 
if (isset($_SERVER['REQUEST_URI'])) {
    $url_segments = explode('/', $_SERVER['REQUEST_URI']);
    $product_category_id = end($url_segments);
    $id = validate($product_category_id);
    $fetchDataProductCategoryDetails = fetch_data_product_category_detail($db, $tableNameProductCategory, $columnsProductCategory, $id);
}
function fetch_data_product_category_detail($db, $tableName, $columns, $id)
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
        $query .= " WHERE product_category_id = '$id'";
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


// VERITABANINDA URUN KATEGORI GUNCELLEME KODLARI
if (isset($_POST['category_update'])) {
    $product_category_id  = mysqli_real_escape_string($db, $_POST['product_category_id']);
    $product_category_name = mysqli_real_escape_string($db, $_POST['product_category_name']);
    $product_category_description = mysqli_real_escape_string($db, $_POST['product_category_description']);

    $select_query = "SELECT * FROM product_category WHERE product_category_id = '$product_category_id'";
    $result = mysqli_query($db, $select_query);
    $row = mysqli_fetch_assoc($result);

    $update_query = "UPDATE product_category SET 
        product_category_name = '$product_category_name',
        product_category_description = '$product_category_description'
        WHERE product_category_id = '$product_category_id'";

    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
        header('location: app-product-category-list.php');
    } else {
        $errors[] = "Work could not be updated: " . mysqli_error($db);
    }
}













// VERITABANINA URUN EKLEME KODLARI
if (isset($_POST['product_add'])) {
    $product_category_id = mysqli_real_escape_string($db, $_POST['product_category_id']);
    $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $product_small_price = mysqli_real_escape_string($db, $_POST['product_small_price']);
    $product_middle_price = mysqli_real_escape_string($db, $_POST['product_middle_price']);
    $product_big_price = mysqli_real_escape_string($db, $_POST['product_big_price']);
    $product_publicy = isset($_POST['product_publicy']) ? 1 : 0;

    $targetDirectory = "product_photos/";

    $product_photos_1024x683 = $_FILES['product_photos_1024x683']['name'];

    $product_photos_1024x683_cafe = $targetDirectory . basename($_FILES['product_photos_1024x683']['name']);

    $product_photos_1024x683_cafe_img = $product_photos_1024x683_cafe;


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

    $product_title_query = "SELECT * FROM  product WHERE `product_name`='$product_name'";
    $resultProductTitleQuery = mysqli_query($db, $product_title_query);
    $resultAlreadyControl = mysqli_fetch_assoc($resultProductTitleQuery);

    if ($resultAlreadyControl) {
        if ($resultAlreadyControl['product_name'] === $product_name) {
            array_push($errors, "This product is already available in the system!");
        }
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO product (product_category_id,product_photos_1024x683,product_name,product_small_price,product_middle_price,product_big_price,product_publicy,product_date_time) 
        VALUES ('$product_category_id','$product_photos_1024x683_cafe_img','$product_name','$product_small_price','$product_middle_price','$product_big_price','$product_publicy','$currentDateTime')";
        $post_data_query = mysqli_query($db, $query);

        if ($post_data_query) {
            header('location: app-product-list.php');
        } else {
            $errors[] = "Work could not be loaded: " . mysqli_error($db);
        }
    }
}


//VERITABANINDAN URUN LISTESINE VERI CEKME KODLARI 
$tableNameProduct = "product";
$columnsProduct = ['product_id', 'product_category_id', 'product_photos_1024x683', 'product_name', 'product_small_price', 'product_middle_price', 'product_big_price', 'product_publicy', 'product_date_time'];

$fetchDataProduct = fetch_data_product($db, $tableNameProduct, $columnsProduct);

function fetch_data_product($db, $tableName, $columns)
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
        $query .= " ORDER BY product_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Urun Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}

//VERITABANINDAN URUN DETAY SAYFASINA VERI CEKME KODLARI 
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
        $query .= " WHERE product_id  = '$id'";
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

// VERITABANINDA URUN GUNCELLEME KODLARI
if (isset($_POST['product_update'])) {
    $product_id = mysqli_real_escape_string($db, $_POST['product_id']);
    $product_category_id = mysqli_real_escape_string($db, $_POST['product_category_id']);
    $product_name = mysqli_real_escape_string($db, $_POST['product_name']);
    $product_small_price = mysqli_real_escape_string($db, $_POST['product_small_price']);
    $product_middle_price = mysqli_real_escape_string($db, $_POST['product_middle_price']);
    $product_big_price = mysqli_real_escape_string($db, $_POST['product_big_price']);
    $product_publicy = isset($_POST['product_publicy']) ? 1 : 0;

    $select_query = "SELECT * FROM product WHERE product_id = '$product_id'";
    $result = mysqli_query($db, $select_query);
    $row = mysqli_fetch_assoc($result);

    $product_photos_1024x683_cafe_img = $row['product_photos_1024x683'];

    $targetDirectory = "product_photos/";

    if (!empty($_FILES['product_photos_1024x683']['name'])) {
        $product_photos_1024x683 = $_FILES['product_photos_1024x683']['name'];
        $product_photos_1024x683_cafe_img = $targetDirectory . basename($product_photos_1024x683);
    } else {
        $product_photos_1024x683_cafe_img = $row['product_photos_1024x683'];
    }

    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_TIME, 'tr_TR.utf8');
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

    $update_query = "UPDATE product SET 
        product_category_id = '$product_category_id',
        product_photos_1024x683 = '$product_photos_1024x683_cafe_img',
        product_name = '$product_name',
        product_small_price = '$product_small_price',
        product_middle_price = '$product_middle_price',
        product_big_price = '$product_big_price',
        product_publicy = '$product_publicy',
        product_date_time = '$currentDateTime'
        WHERE product_id = '$product_id'";

    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
        header('location: app-product-list.php');
    } else {
        $errors[] = "Work could not be updated: " . mysqli_error($db);
    }
}


// VERITABANINDAN URUN SILME KODLARI
if (isset($_GET['deleteProduct'])) {
    $id = validate($_GET['deleteProduct']);
    $condition = ['product_id' => $id];
    $deleteMsg = delete_data_product($db, $tableNameProduct, $condition);
    header("location:app-product-list.php");
}

function delete_data_product($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}





$tableNameOrders = "orders";
$columnsOrders = ['id', 'customer_desk_number', 'customer_name', 'created_at'];
$tableNameOrderItems = "order_items";
$columnsOrderItems = ['id', 'order_id', 'product_id', 'product_name', 'quantity', 'price', 'created_at'];


$fetchDataOrders = fetch_data_orders($db, $tableNameOrders, $columnsOrders);

function fetch_data_orders($db, $tableName, $columns){
    if (empty($db)) {
        $msg = "Database connection error";
    } elseif (empty($columns) || !is_array($columns)) {
        $msg = "Column names must be defined in the array";
    } elseif (empty($tableName)) {
        $msg = "Table name is empty";
    } else {
        $columnName = implode(", ", $columns);
        $query = "SELECT " . $columnName . " FROM $tableName";
        $query .= " WHERE order_status = 1"; 
        $query .= " ORDER BY id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Siparis Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}


function fetch_data_order_items($db, $tableName, $columns, $id)
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
        $query .= " WHERE order_id = '$id'";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $rows = array(); // Initialize an array to hold all rows
                while ($data = $result->fetch_assoc()) {
                    $rows[] = $data; // Append each row to the array
                }
                return $rows; // Return the array containing all rows
            } else {
                $msg = "No data found";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}




if (isset($_GET['deactiveOrders'])) {
    $id = validate($_GET['deactiveOrders']); // 'id' değişkeni tanımlanmadığından dolayı hata verebilir, düzeltmek için $id'i tanımlayın.
    $order_status = "0"; // 'comment_status' yerine 'order_status' kullanıldı

    $select_query = "SELECT * FROM orders WHERE id = '$id'";
    $result = mysqli_query($db, $select_query);
    $row = mysqli_fetch_assoc($result);

    $update_query = "UPDATE orders SET 
        order_status = '$order_status'
        WHERE id = '$id'"; // 'id' değişkeni tek tırnak içine alındı

    $update_result = mysqli_query($db, $update_query);

    if ($update_result) {
        header('location: app-orders.php');
    } else {
        $errors[] = "Work could not be updated: " . mysqli_error($db);
    }
}


$tableNameReservation = "reservation";
$columnsReservation = ['reservation_id', 'number_of_people', 'reservation_date','reservation_clock', 'reservation_name', 'reservation_email', 'reservation_phone', 'currentDateTime'];

$fetchDataReservation = fetch_data_reservation($db, $tableNameReservation, $columnsReservation);
function fetch_data_reservation($db, $tableName, $columns)
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
        $query .= " ORDER BY reservation_id";
        $result = $db->query($query);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = array();
                while ($data = $result->fetch_assoc()) {
                    $row[] = $data;
                }
                $msg = $row;
            } else {
                $msg = "Siparis Bulunamadi!";
            }
        } else {
            $msg = "Query error: " . $db->error;
        }
    }

    return $msg;
}



// VERITABANINDAN REZERVASYON SILME KODLARI
if (isset($_GET['deleteReservation'])) {
    $id = validate($_GET['deleteReservation']);
    $condition = ['reservation_id' => $id];
    $deleteMsg = delete_data_reservation($db, $tableNameReservation, $condition);
    header("location:app-reservation.php");
}

function delete_data_reservation($db, $tableName, $condition)
{
    $conditionData = '';
    $i = 0;
    foreach ($condition as $index => $data) {
        $and = ($i > 0) ? ' AND ' : '';
        $conditionData .= $and . $index . " = " . "'" . $data . "'";
        $i++;
    }

    $query = "DELETE FROM " . $tableName . " WHERE " . $conditionData;
    $result = $db->query($query);
    if ($result) {
        $msg = "data was deleted successfully";
    } else {
        $msg = $db->error;
    }
    return $msg;
}