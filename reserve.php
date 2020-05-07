<?php 

//予約日
$reserve_date = isset($_POST['reserve_request_date']) ? $_POST['reserve_request_date'] : '-';
//予約時間
$reserve_time = isset($_POST['reserve_request_time']) ? $_POST['reserve_request_time'] : ''; 
//電話番号
$reserve_tels = isset($_POST['reserve_request_tels']) ? $_POST['reserve_request_tels'] : '-'; 
//予約人数
$reserve_num = isset($_POST['reserve_request_num']) ? $_POST['reserve_request_num'] : '-';  
//連絡事項
$reserve_comment = isset($_POST['reserve_request_comment']) ? $_POST['reserve_request_comment'] : '-';

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="p-reserve-info container mt-3">
        <p>ご予約ありがとうございました。</p>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th>予約日時</th>
                    <td><?php echo $reserve_date." ".$reserve_time ?></td>
                </tr>
                <tr>
                    <th>ご予約人数</th>
                    <td><?php echo $reserve_num ?></td>
                </tr>
                <tr>
                    <th>電話番号</th>
                    <td><?php echo $reserve_tels ?></td>
                </tr>
                <tr>
                    <th>ご要望・連絡事項</th>
                    <td><?php echo $reserve_comment ?></td>
                </tr>                                    
            </tbody>
        </table>
    </div>

</body>
</html>