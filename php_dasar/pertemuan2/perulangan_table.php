<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan Table</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center> <h2>Perulangan Table</h2>
    <table border="4" cellpadding="10" cellspacing="0">
        <?php for( $i = 1; $i <= 10; $i++ ) { ?>
            <?php if( $i % 3 == 1 ) : ?>
                <tr class="warna-baris">
                    <?php else : ?>
                        <tr class="warna-kolom">
                            <?php endif; ?>
                            <?php for( $j = 1; $j <= 7; $j++) { ?>
                                <td>
                                    <?php echo "$i, $j"; ?>
                                </td>
                                <?php } ?>
                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                </center>
                </body>
</html>