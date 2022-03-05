<!DOCTYPE html>
<html lang="ja">
<head>
    <title>九九表</title>
    <!-- レイアウト画像の通り、表に枠線を追加する -->
    <style>
      table {
        border-collapse: collapse;
      }
      td {
        border: solid 1px black;
        padding: 3px;
      }
    </style>
</head>
<body>
  <!-- 九九表の出力 -->
  <table>
    <!-- 各段を繰り返し出力 -->
    <?php for($i = 1; $i <= 9; $i++){ ?>
      <tr>
        <!-- 各段の一つ一つのマスを繰り返し出力 -->
        <?php for($j = 1; $j <= 9; $j++){ ?>
          <td><?php echo $i * $j; ?></td>
        <?php } ?>
      </tr>
    <?php } ?>

  </table>
</body>
</html>